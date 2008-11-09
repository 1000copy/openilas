using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;

namespace csilas
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void 中文图书ToolStripMenuItem_Click(object sender, EventArgs e)
        {
            fmCatalogList cataloglist = new fmCatalogList();
            cataloglist.ShowDialog();
        }

        private void menuStrip1_ItemClicked(object sender, ToolStripItemClickedEventArgs e)
        {

        }

        private void 系统用户ToolStripMenuItem_Click(object sender, EventArgs e)
        {
            fmSysUser user = new fmSysUser();
            user.ShowDialog();
        }

        private void 读者管理ToolStripMenuItem_Click(object sender, EventArgs e)
        {
            fmReaderList reader = new fmReaderList();
            reader.ShowDialog();
        }

        private void 外借ToolStripMenuItem_Click(object sender, EventArgs e)
        {
            CalculatorForm f = new CalculatorForm();
            f.ShowDialog();
        }
    }
}