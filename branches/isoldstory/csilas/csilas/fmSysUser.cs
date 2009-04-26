using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;
using System.Data.Common;
using System.Data.SqlClient;
using System.Collections;

namespace csilas
{
    public partial class fmSysUser : Form
    {
       private static string strSQL = "select maindb_key,user_code,[user],unit,aqui_flag,cata_flag,coll_flag,circ_flag,seri_flag,bibl_flag,rdrm_flag,refr_flag from usercode"; 
        private DataTable table = new DataTable();
        private BindingSource dbBindSource = null;
        DBHelper db = null;
        public fmSysUser()
        {
            InitializeComponent();
            this.Text = "管理系统用户";   
        }

        private void fmSysUser_Load(object sender, EventArgs e)
        {
            //dataAdapter  = new SqlDataAdapter(strSQL, strCon);
            //commandBuilder = new SqlCommandBuilder(dataAdapter);

            DataGridViewColumn col = new DataGridViewTextBoxColumn ();


            col = new DataGridViewTextBoxColumn();
            col.HeaderText = "代号";
            col.DataPropertyName = "user_code";
            grid1.Columns.Add(col);
            col = new DataGridViewTextBoxColumn();
            col.HeaderText = "用户";
            col.DataPropertyName = "user";
            grid1.Columns.Add(col);
            col = new DataGridViewTextBoxColumn();
            col.HeaderText = "部门";
            col.DataPropertyName = "unit";
            grid1.Columns.Add(col);
            col = new DataGridViewCheckBoxColumn();
            col.HeaderText = "可以使用编目";
            col.DataPropertyName = "cata_flag";
            grid1.Columns.Add(col);
            col = new DataGridViewCheckBoxColumn();
            col.HeaderText = "可以使用典藏";
            col.DataPropertyName = "coll_flag";
            grid1.Columns.Add(col);
            col = new DataGridViewCheckBoxColumn();
            col.HeaderText = "可以使用流通";
            col.DataPropertyName = "circ_flag";
            grid1.Columns.Add(col);
            col = new DataGridViewCheckBoxColumn();
            col.HeaderText = "可以使用期刊";
            col.DataPropertyName = "seri_flag";
            grid1.Columns.Add(col);
            col = new DataGridViewCheckBoxColumn();
            col.HeaderText = "可以使用书目维护";
            col.DataPropertyName = "bibl_flag";
            grid1.Columns.Add(col);
            col = new DataGridViewCheckBoxColumn();
            col.HeaderText = "可以使用阅览室";
            col.DataPropertyName = "rdrm_flag";
            grid1.Columns.Add(col);
            // Populate a new data table and bind it to the BindingSource.
            
            //table.Locale = System.Globalization.CultureInfo.InvariantCulture;

            //dataAdapter.Fill(table);
            db = new DBHelper();
            table = db.query(strSQL);
            dbBindSource = new BindingSource();
            
            dbBindSource.DataSource = table;
            //this.dataGridView1.AutoResizeColumns(DataGridViewAutoSizeColumnsMode.AllCellsExceptHeader);
            grid1.AutoGenerateColumns = false;
            //dataGridView1.ReadOnly = true;  
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
    }
}