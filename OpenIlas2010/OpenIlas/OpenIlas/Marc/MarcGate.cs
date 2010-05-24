﻿using System;
using System.Collections.Generic;
using System.Text;

namespace OpenIlas.Marc
{
    class CONST
    {
        static int RS = 30;
        static int GS = 29;
        static int US = 31;
        public static bool IsRS(char a)
        {
            return (int)a == RS;
        }

        internal static bool IsUS(char p)
        {
            return (int)p == US;
        }

        internal static bool IsGS(char p)
        {
            return (int)p == GS;
        }
    }
    public enum Status { New, Frodo }
    public class Field
    {
        public string Code;
        public int Start;
        public int Len;
        public string strField;
        Dictionary<string, string> _SubFields = new Dictionary<string, string>();
        public Dictionary<string, string> SubFields
        {
            get
            {
                if (_SubFields.Count > 0) return _SubFields;
                int index = 0;
                while (index < strField.Length)
                {
                    // Find first US
                    while (index < strField.Length && !CONST.IsUS(strField[index]))
                    {
                        index++;
                    }
                    index++;
                    // construct value until next US or end
                    string value_mid = "";
                    while (index < strField.Length && !CONST.IsUS(strField[index]))
                    {
                        value_mid += strField[index];
                        index++;
                    }
                    // append the value to subfields 
                    if (value_mid.Length > 1)
                    {
                        string key =value_mid.Substring(0, 1);
                        if (!_SubFields.ContainsKey(key))
                            _SubFields.Add(key, value_mid.Substring(1));
                        else
                            //Console.WriteLine("--debug--key viladation:{0},code:{1}",key,Code);
                            _SubFields[key] += "+" + value_mid.Substring(1);
                    }
                }
                return _SubFields;
            }
        }

        internal object ReadableCode()
        {
            string Idontknow = "I don't know yet";
            Dictionary<string, string> dic = new Dictionary<string, string>();
            dic.Add("001", "控制号");
            dic.Add("005", "记录生成时间");
            dic.Add("010", "美国国会图书馆控制号");
            dic.Add("100", "标目-个人名称");
            dic.Add("101", Idontknow);
            dic.Add("102", Idontknow);
            dic.Add("105", Idontknow);
            dic.Add("106", Idontknow);
            dic.Add("200", "个人名称-一般信息");
            dic.Add("210", "团体名称-一般信息");
            dic.Add("215", Idontknow);
            dic.Add("225", Idontknow);
            dic.Add("330", "统一题名-一般信息");
            dic.Add("606", Idontknow);
            dic.Add("690", Idontknow);
            dic.Add("701", Idontknow);
            dic.Add("905", Idontknow);
            dic.Add("989", Idontknow);
            if (dic.ContainsKey(Code)) return dic[Code];
            return "未定义code ";
        }
    }
    public class MarcRecords
    {
        string src = "";
        IList<MarcRecord> content = new List<MarcRecord>();
        public IList<MarcRecord> Content { get { Run(); return content; } }
        public MarcRecords(string src)
        {
            this.src = src;
        }
        void Run()
        {
            int first = 0;
            int index = 0;
            while (index < src.Length)
            {
                while ( index < src.Length && !CONST.IsGS(src[index]) )
                {
                    index++;
                }
                if (index < src.Length) 
                {
                    MarcRecord rec = new MarcRecord(src.Substring(first, index - first).Trim());
                    content.Add(rec);
                    index++;
                    first = index;
                }
            }
        }
    }
    
    public class MarcRecord
    {
        const int REGION_HEADER_LEN = 24;
        const int REGION_TOL_LEN = 12;
        const int FIELD_CODE_LEN = 3;
        const int FIELD_LEN_LEN = 4;
        const int FIELD_START_LEN = 5;

        string marc = "";
        public MarcRecord(string src)
        {
            marc = src;
            IList<Field> toc = Toc;
            foreach (Field item in toc)
            {
                item.strField = FetchNextField();
                Dictionary<string, string> sfs = item.SubFields;
            }
        }
        public string strHeader { get { return marc.Substring(0, REGION_HEADER_LEN); } }
        public string strAddress { get { return marc.Substring(REGION_HEADER_LEN, BaseAddress - REGION_HEADER_LEN); } }
        public string strContent
        {
            get
            {
                return marc.Substring(BaseAddress);
            }
        }
        IList<Field> _Toc = new List<Field>();
        public IList<Field> Toc
        {
            get
            {
                if (_Toc.Count != 0) return _Toc;
                int index = 0;
                while (index + REGION_TOL_LEN < strAddress.Length)
                {
                    Field item = new Field();
                    item.Code = strAddress.Substring(index, FIELD_CODE_LEN);
                    item.Len = Convert.ToInt32(strAddress.Substring(index + FIELD_CODE_LEN, FIELD_LEN_LEN));
                    item.Start = Convert.ToInt32(strAddress.Substring(index + FIELD_CODE_LEN + FIELD_LEN_LEN, FIELD_START_LEN));
                    _Toc.Add(item);
                    index += REGION_TOL_LEN;
                }
                return _Toc;
            }
        }
        public int BaseAddress { get { return Convert.ToInt32(marc.Substring(12, 5)); } }
        public int len { get { return Convert.ToInt32(marc.Substring(0, 5)); } }
        //6-6  记录状态
        public Status status { get { return marc.Substring(5, 1) == "n" ? Status.New : Status.New; } }
        //7-9  执行代码  ex : 6= a 表示 文字印刷品
        //public Status status { get { return marc.Substring(6, 3) == "n" ? Status.New : Status.New; } }
        // 下一个字段
        int currentIndex = 0;

        public string FetchNextField()
        {
            string p = this.strContent;
            string r = "";
            if (CONST.IsRS(p[currentIndex])) currentIndex++;
            while (!CONST.IsRS(p[currentIndex]) && !CONST.IsGS(p[currentIndex]) && currentIndex < p.Length)
            {
                r += p[currentIndex];
                currentIndex++;
            }
            return r;
        }
    }
}