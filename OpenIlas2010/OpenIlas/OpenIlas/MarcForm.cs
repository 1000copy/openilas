using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;
using OpenIlas.Marc;

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
                dataGridView1.DataSource = dt ;
                Text = string.Format("{0}", dt.Rows.Count);
            }
        }
    }
}
