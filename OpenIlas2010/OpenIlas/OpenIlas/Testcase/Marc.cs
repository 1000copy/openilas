using System;
using System.Collections.Generic;
using System.Text;
using OpenIlas.Marc;
using System.IO;
using System.Data;

namespace OpenIlas.MarcTestcase
{
    public class Marc
    {
        
    }
    class Test
    {
        string marc = "00761nam0 2200253   45  00100130000000500170001301000370003010000410006710100080010810200150011610500180013110600060014920000690015521000310022421500200025522500550027533000770033060600130040760600130042069000080043370100200044190500330046198900160049401200800584820081106083959.5  a7-113-05198-7d￥66.00（全三册）  a20081106d2004    ekmy0chiy0121    ea0 achi  aCNb110000  ay   z   000yy  ar1 a妙管理的5个小建议AMiao Guan Li De 218 Ge Xiao Jian Yif烨子著  a北京c中国铁道出版社d2004  a391页c图d21cm2 a小智慧做大事丛书AXiao Zhi Hui Zuo Da Shi Cong Shu  a本书就企业管理问题进行探讨，以管理基本理论为基础，注重理论与实践的结合。  a企业管理  a通俗读物  av3 0a烨子AYe Zi4著  b00236515-9dF270-49e05198.1  a0009b0009";
       
        void PrintToSqReview()
        {
           // marc += marc;
            marc = File.ReadAllText(@"D:\lcjun\test\1001批（29件，286条).txt",Encoding.GetEncoding("GB2312"));
            //marc = File.ReadAllText(@"D:\lcjun\test\111",Encoding.GetEncoding("GB2312"));
            
            //Console.WriteLine(marc);
            DataTable dt = new DataTable();
            MarcRecords mrs = new MarcRecords(marc);
            foreach (MarcRecord rec in mrs.Content)
            {   
                foreach (Field item in rec.Toc)
                {
                    string datafield = string.Format("F_{0}", item.Code);
                    if (!dt.Columns.Contains(datafield))
                    {
                        DataColumn col = dt.Columns.Add();
                        col.ColumnName = datafield;
                    }
                    
                    Dictionary<string, string> sfs = item.SubFields;
                    if (sfs.Keys.Count != 0)
                    {
                        foreach (string key in sfs.Keys)
                        {
                            string sub_datafield = string.Format("F_{0}_{1}", item.Code, key);
                            if (!dt.Columns.Contains(sub_datafield))
                            {
                                DataColumn col = dt.Columns.Add();
                                col.ColumnName = sub_datafield;
                            }
                        }
                    }
                }
            }
            foreach (MarcRecord rec in mrs.Content)
            {
                DataRow row = dt.NewRow();
                foreach (Field item in rec.Toc)
                {
                    string datafield = string.Format("F_{0}", item.Code);
                    row[datafield] = item.strField;
                    Dictionary<string, string> sfs = item.SubFields;
                    if (sfs.Keys.Count != 0)
                    {
                        foreach (string key in sfs.Keys)
                        {
                            string sub_datafield = string.Format("F_{0}_{1}", item.Code, key);
                            row[sub_datafield] = sfs[key];
                        }
                    }
                }
                dt.Rows.Add(row);
            }
        }
        
        string b = @"
-------------------------------分析marc
1. 原始marc :

00761nam0 2200253   45  00100130000000500170001301000370003010000410006710100080010810200150011610500180013110600060014920000690015521000310022421500200025522500550027533000770033060600130040760600130042069000080043370100200044190500330046198900160049401200800584820081106083959.5  a7-113-05198-7d￥66.00（全三册）  a20081106d2004    ekmy0chiy0121    ea0 achi  aCNb110000  ay   z   000yy  ar1 a妙管理的5个小建议AMiao Guan Li De 218 Ge Xiao Jian Yif烨子著  a北京c中国铁道出版社d2004  a391页c图d21cm2 a小智慧做大事丛书AXiao Zhi Hui Zuo Da Shi Cong Shu  a本书就企业管理问题进行探讨，以管理基本理论为基础，注重理论与实践的结合。  a企业管理  a通俗读物  av3 0a烨子AYe Zi4著  b00236515-9dF270-49e05198.1  a0009b0009

2. 分析区

00763nam0 2200253   45

001 0013 00000
005 0017 00013
010 0037 00030
100 0041 00067
101 0008 00108
102 0015 00116
105 0018 00131
106 0006 00149
200 0069 00155
210 0031 00224
215 0020 00255
225 0055 00275
330 0077 00330
606 0013 00407
606 0013 00420
690 0008 00433
701 0020 00441
905 0033 00461
989 0016 00494

01200800584820081106083959.5  a7-113-05198-7d￥66.00（全三册）  a20081106d2004    ekmy0chiy0121    ea0 achi  aCNb110000  ay   z   000yy  ar1 a妙管理的118个小建议AMiao Guan Li De 218 Ge Xiao Jian Yif烨子著  a北京c中国铁道出版社d2004  a391页c图d21cm2 a小智慧做大事丛书AXiao Zhi Hui Zuo Da Shi Cong Shu  a本书就企业管理问题进行探讨，以管理基本理论为基础，注重理论与实践的结合。  a企业管理  a通俗读物  av3 0a烨子AYe Zi4著  b00236515-9dF270-49e05198.1  a0009b0009
3. 分析结果

1-5 记录长度：ex：00763,763字节
6-6  记录状态  ex : n 表示新纪录，详细查询p12
7-9  执行代码  ex : 7= a 表示 文字印刷品
			    8=m ex：专著
			    9 层次：ex 0 无层次
			    10 未定义
			    11 2 字段指示符长度  字段
			    12 2 字段标识符长度 子字段

12-16 00233        数据基础地址
17-19   处理细节 这里没有用";
    }
}
