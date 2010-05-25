using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;
using OpenIlas.Marc;
using System.IO;

namespace OpenIlas
{
    public partial class MarcForm : Form
    {
        public MarcForm()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            
        }

        private void button1_Click_1(object sender, EventArgs e)
        {
            OpenFileDialog dlg = new OpenFileDialog();
            if (dlg.ShowDialog() == DialogResult.OK)
            {
                 //string file =@"D:\lcjun\test\1001批（29件，286条).txt";
                string file = dlg.FileName;
                DataTable dt = MarcRRR.Marc2Datatable(file);
                //dataGridView1.DataSource = dt ;
                dt.TableName = "marc";
                ToCSV(dt);
                //dt.WriteXml("result_liuchuanjun_work_for_s.xml");
                Text = string.Format("{0}", dt.Rows.Count);
            }
        }

        private void ToCSV(DataTable dt)
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
                ts = titles.ToArray();
                line = string.Join(",", ts);
                writer.WriteLine(line);
            }
            writer.Flush();
            writer.Close();
            //FileInfo file = new FileInfo("r.csv");
            //File.WriteAllText("r.csv", sb.ToString(),Encoding.UTF8);
            //FileStream stream = file.OpenWrite();
            //stream.wr
            
        }
    }
}
