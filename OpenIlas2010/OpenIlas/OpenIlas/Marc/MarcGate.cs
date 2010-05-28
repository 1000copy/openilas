using System;
using System.Collections.Generic;
using System.Text;
using System.Data;
using System.IO;
namespace OpenIlas.Marc
{
    // @"D:\lcjun\test\1001批（29件，286条).txt"
    public class MarcRRR
    {
        public   static void ToCSV(DataTable dt)
        {
            string filename = "r.csv";
            List<string> titles = new List<string>();
            foreach (DataColumn col in dt.Columns)
            {
                titles.Add(col.ColumnName);
            }
            string [] ts = titles.ToArray();
            string line = string.Join(",", ts);
            StreamWriter writer = new StreamWriter("r.csv");
            writer.AutoFlush = true;
            writer.WriteLine(line);
            foreach (DataRow row in dt.Rows)
            {
                titles.Clear();
                for (int i = 0; i < dt.Columns.Count; i++)
                {
                    titles.Add(row[i] == null ? "" : row[i].ToString());
                }

                SplitBarcodeLine(titles, writer);
                
            }
            writer.Flush();
            writer.Close();
            //FileInfo file = new FileInfo("r.csv");
            //File.WriteAllText("r.csv", sb.ToString(),Encoding.UTF8);
            //FileStream stream = file.OpenWrite();
            //stream.wr
            
        }

        private static void SplitBarcodeLine(List<string> titles, StreamWriter writer)
        {
            string line = "";
            string[] ts = titles.ToArray();
            string oldBarcode = ts[2];
            if (oldBarcode.Contains("+") || oldBarcode.Contains("-"))
            {
                ts[2] = "{0}";
                line = string.Join(",", ts);
                List<string> barcodeList = GetBarcodeList(oldBarcode);
                foreach (string barcode in barcodeList)
                {
                    writer.WriteLine(line, barcode);
                }
            }
            else
            {
                line = string.Join(",", ts);
                writer.WriteLine(line);
            }
        }

        private static List<string> GetBarcodeList(string barcode)
        {
            List<string> temp = new List<string>();
            string[] arr = barcode.Split('+');
            foreach (string item in arr)
            {
                AppendSequel(item, temp);
            }
            return temp;
        }

        private static void AppendSequel(string item, List<string> temp)
        {
            try
            {
                if (!item.Contains("-"))
                {
                    temp.Add(item);
                    return;
                }
                string[] sequels = item.Split('-');
                if (sequels.Length < 2)
                {
                    temp.Add(item);
                    return;
                }
                string start = sequels[0];
                string end = sequels[1];
                end = start.Substring(0, start.Length - end.Length) + end;
                int iStart = Convert.ToInt32(start);
                int iEnd = Convert.ToInt32(end);
                if (iStart >= iEnd)
                {
                    temp.Add(item);
                    return;
                }
                for (int i = iStart; i <= iEnd; i++)
                {
                    temp.Add(PaddingLen(i, start.Length));
                }
            }
            catch
            {
                temp.Add(item);                    
            }
        }

        private static string PaddingLen(int src, int p)
        {
            string r = "";
            for (int i = 0; i < p; i++)
                r += "0";
            r += src.ToString();
            return r.Substring(r.Length - p, p);
        }
        static string fieldsRequired = "F_010_d,F_200_a,F_905_b,F_905_d,F_905_e";
        public static DataTable Marc2Datatable(string filename)
        {
            string marc = File.ReadAllText(filename, Encoding.GetEncoding("GB2312"));
            DataTable dt = new DataTable();
            MarcRecords mrs = new MarcRecords(marc);
            foreach (MarcRecord rec in mrs.Content)
            {
                foreach (Field item in rec.Toc)
                {
                    Dictionary<string, string> sfs = item.SubFields;
                    if (sfs.Keys.Count != 0)
                    {
                        foreach (string key in sfs.Keys)
                        {
                            //if (key == "A") key = "A_";
                            string sub_datafield = string.Format("F_{0}_{1}", item.Code, KeyMagic(key));
                            if (!dt.Columns.Contains(sub_datafield)  && IsRequired(sub_datafield))
                            {
                                DataColumn col = dt.Columns.Add();
                                col.ColumnName = sub_datafield;
                            }
                        }
                    }
                    else
                    {
                        string datafield = string.Format("F_{0}", item.Code);
                        if (!dt.Columns.Contains(datafield) && IsRequired(datafield))
                        {
                            DataColumn col = dt.Columns.Add();
                            col.ColumnName = datafield;
                        }                    
                    }
                    
                }
            }
            // to Dataset 
            foreach (MarcRecord rec in mrs.Content)
            {
                DataRow row = dt.NewRow();
                foreach (Field item in rec.Toc)
                {
                    Dictionary<string, string> sfs = item.SubFields;
                    if (sfs.Keys.Count != 0)
                    {
                        foreach (string key in sfs.Keys)
                        {
                            string sub_datafield = string.Format("F_{0}_{1}", item.Code, KeyMagic(key));
                            if (IsRequired(sub_datafield))
                                row[sub_datafield] = ReplaceSpecial(sfs[key]);
                        }
                    }
                    else
                    {
                        string datafield = string.Format("F_{0}", item.Code);
                        if (IsRequired(datafield))
                        row[datafield] = ReplaceSpecial(item.strField);                    
                    }
                    
                }
                dt.Rows.Add(row);
            }
            return dt;
        }

        private static bool IsRequired(string sub_datafield)
        {
            return fieldsRequired.Contains(sub_datafield);
        }

        private static object ReplaceSpecial(string p)
        {
            return p.Replace((char)31,' ').Replace(',','`');
        }

        private static string KeyMagic(string key)
        {
            return "ABCDEFGHIJKLMNOPQRSTUVWXYZ".Contains(key) ? key + "_" : key;
        }
    }
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
        public IList<MarcRecord> Content { get { 
            if (content.Count == 0) 
                Run(); 
            return content; 
        } }
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
                    try
                    {
                        item.Len = Convert.ToInt32(strAddress.Substring(index + FIELD_CODE_LEN, FIELD_LEN_LEN));
                        item.Start = Convert.ToInt32(strAddress.Substring(index + FIELD_CODE_LEN + FIELD_LEN_LEN, FIELD_START_LEN));
                    }
                        // TODO ： 哑异常，待处理
                    catch { }
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
            if (currentIndex < p.Length && CONST.IsRS(p[currentIndex])) currentIndex++;
            while (currentIndex < p.Length && !CONST.IsRS(p[currentIndex]) && !CONST.IsGS(p[currentIndex]) )
            {
                r += p[currentIndex];
                currentIndex++;
            }
            return r;
        }
    }
}
