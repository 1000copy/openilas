using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;

namespace csilas
{
    public partial class fmReaderList : Form
    {

       private static string strSQL = "select * from reader"; 
        private DataTable table = new DataTable();
        private BindingSource dbBindSource = null;
        DBHelper db = null;
        public fmReaderList()
        {
            InitializeComponent();
            this.Text = "管理系统用户";   
        }

        private void fmReaderList_Load(object sender, EventArgs e)
        {
            //dataAdapter  = new SqlDataAdapter(strSQL, strCon);
            //commandBuilder = new SqlCommandBuilder(dataAdapter);

            DataGridViewColumn col = new DataGridViewTextBoxColumn ();


            col = new DataGridViewTextBoxColumn();
            col.HeaderText = "证号";
            col.DataPropertyName = "reader_id";
            grid1.Columns.Add(col);
            col = new DataGridViewTextBoxColumn();
            col.HeaderText = "姓名";
            col.DataPropertyName = "name";
            grid1.Columns.Add(col);
            col = new DataGridViewTextBoxColumn();
            col.HeaderText = "单位代码";
            col.DataPropertyName = "dept_code";
            grid1.Columns.Add(col);
            col = new DataGridViewTextBoxColumn();
            col.HeaderText = "单位";
            col.DataPropertyName = "dept_name";
            grid1.Columns.Add(col);
            col = new DataGridViewTextBoxColumn();
            col.HeaderText = "类别";
            col.DataPropertyName = "position";
            grid1.Columns.Add(col);
            col = new DataGridViewTextBoxColumn();
            col.HeaderText = "已借阅";
            col.DataPropertyName = "bn_check";
            grid1.Columns.Add(col);
            col = new DataGridViewTextBoxColumn();
            col.HeaderText = "最大借阅";
            col.DataPropertyName = "bn_limit";
            grid1.Columns.Add(col);
            col = new DataGridViewTextBoxColumn();
            col.HeaderText = "发证日期";
            col.DataPropertyName = "issue_date";
            grid1.Columns.Add(col);
            db = new DBHelper();
            //this.grid1.AutoResizeColumns(DataGridViewAutoSizeColumnsMode.AllCellsExceptHeader);
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
            string str = table.Rows[grid1.CurrentRow.Index]["reader_id"].ToString();
            fmAddUser.ShowAddUser(str);

        }

        private void button1_Click_1(object sender, EventArgs e)
        {
            fmAddUser.ShowAddUser("0");
        }
    }
}