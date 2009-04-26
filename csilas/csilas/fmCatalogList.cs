using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;

namespace csilas
{
    public partial class fmCatalogList : Form
    {

       private static string strSQL = "select * from ctlgcnmc"; 
        private DataTable table = new DataTable();
        private BindingSource dbBindSource = null;
        DBHelper db = null;
        public fmCatalogList()
        {
            InitializeComponent();
            this.Text = "中文编目浏览";   
        }

        private void fmReaderList_Load(object sender, EventArgs e)
        {
            DataGridViewColumn col = new DataGridViewTextBoxColumn ();
            col = new DataGridViewTextBoxColumn();
            col.HeaderText = "登录号";
            col.DataPropertyName = "accs_nos";
            grid1.Columns.Add(col);
            col = new DataGridViewTextBoxColumn();
            col.HeaderText = "副本数";
            col.DataPropertyName = "total_num";
            grid1.Columns.Add(col);
            col = new DataGridViewTextBoxColumn();
            col.HeaderText = "总价";
            col.DataPropertyName = "price_sum";
            grid1.Columns.Add(col);
            col = new DataGridViewTextBoxColumn();
            col.HeaderText = "正题名";
            col.DataPropertyName = "title";
            grid1.Columns.Add(col);
            col = new DataGridViewTextBoxColumn();
            col.HeaderText = "出版地";
            col.DataPropertyName = "pub_city";
            grid1.Columns.Add(col);
            col = new DataGridViewTextBoxColumn();
            col.HeaderText = "出版者";
            col.DataPropertyName = "publisher";
            grid1.Columns.Add(col);
            col = new DataGridViewTextBoxColumn();
            col.HeaderText = "出版日期";
            col.DataPropertyName = "pub_date";
            grid1.Columns.Add(col);
            col = new DataGridViewTextBoxColumn();
            col.HeaderText = "编目员";
            col.DataPropertyName = "operator";
            grid1.Columns.Add(col);
            db = new DBHelper();
            grid1.AutoGenerateColumns = false;
            table = db.query(strSQL);
            dbBindSource = new BindingSource();
            dbBindSource.DataSource = table;
            grid1.DataSource = dbBindSource;   
            
        }

        private void button1_Click(object sender, EventArgs e)
        {
            //MessageBox.Show(table.Rows.Count.ToString());
            foreach (DataRow row in table.Rows)
            {
                if (row.RowState == DataRowState.Added)
                {
                    //MessageBox.Show(row["user"].ToString());
                    string[] al = new string[] { "aqui_flag", "cata_flag", "coll_flag", "circ_flag", "seri_flag", "bibl_flag", "rdrm_flag", "refr_flag" };

                    foreach (string str in al)
                    {
                        if (row[str].GetType() == typeof(DBNull))
                        {
                            row[str] = false;
                        }
                    }
                };
     
            }
            db.update(table);
            grid1.DataSource = dbBindSource;
        }

        private void grid1_RowsAdded(object sender, DataGridViewRowsAddedEventArgs e)
        {

        }

        private void grid1_CellEndEdit(object sender, DataGridViewCellEventArgs e)
        {
            //if (table.Rows[e.RowIndex]["rdrm_flag"] == null )
            //    table.Rows[e.RowIndex]["rdrm_flag"] = false;
            //cata_flag,coll_flag,circ_flag,seri_flag,bibl_flag,rdrm_flag,refr_flag 
        }

        private void grid1_DefaultValuesNeeded(object sender, DataGridViewRowEventArgs e)
        {
           
        }
        private bool CanClose()
        {
            bool isdirty = false;
           
            foreach (DataRow row in table.Rows)
            {
                if (row.RowState != DataRowState.Unchanged)
                {
                    isdirty = true;
                    break;
                }
            }
            if (!isdirty)
            {
                return true;
            }
            else if  (MessageBox.Show("有修改，确认退出？", "确认", MessageBoxButtons.OKCancel) == DialogResult.OK)
            {
                return true;
            }
            return false;
        }
        private void button2_Click(object sender, EventArgs e)
        {
             this.Close(); 
        }

        private void fmSysUser_FormClosing(object sender, FormClosingEventArgs e)
        {
            e.Cancel = !CanClose();
        }

        private void button2_Click_1(object sender, EventArgs e)
        {
            this.Close();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            string str = table.Rows[grid1.CurrentRow.Index]["maindb_key"].ToString();
            fmAddCatalog.ShowAdd(str);

        }

        private void button1_Click_1(object sender, EventArgs e)
        {
            fmAddCatalog.ShowAdd("0");
        }
    }
}