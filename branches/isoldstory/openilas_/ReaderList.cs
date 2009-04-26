using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;

namespace openilas
{
    public partial class ReaderList : Form
    {
        public ReaderList()
        {
            InitializeComponent();
        }
        private DbHelper db = new DbHelper();
        private const string fields = "[READER_ID],[READER_BAR],[NAME],[SEX],[DEPT_CODE],[DEPT_NAME]";
        DataTable table = null;
        private void refresh()
        {
            string username = this.textBox1.Text;
            string sql = "";
            sql = "select {0} from reader ";
            sql = string.Format(sql, fields);
            if (username != "")
            {
                sql = String.Format(sql +" where [name] like '%{0}%'", username);
            }
            table = db.Query(sql);
            grid.DataSource = table;
            grid.Refresh();
        }
        
        private void query_Click(object sender, EventArgs e)
        {
            refresh();
        }

        private void ReaderList_Load(object sender, EventArgs e)
        {
            grid.AutoGenerateColumns = false;
            //[READER_ID],[READER_BAR],[NAME],[SEX],[DEPT_CODE],[DEPT_NAME],[POSITION],[READER_LVL],[BN_LIMIT],[BN_CHECK],[ISSUE_DATE],[EXPIREDATE],[REGIST_TAG],[OVDT_NUM],[REG_DATE],[TOTAL_FINE],[FINE_FEE],[NOTES],[MTH_CHKOUT],
            //[YR_CHKOUT],[TTL_CHKOUT],[OVDT_TOTAL],[FINE_TOTAL],[FINE_INTLB],[MTH_RDRM],[YR_RDRM],[TTL_RDRM],[FINE_RDRM],[PASSWORD],[EMAIL]
            DataGridViewTextBoxColumn col = null;
            col = new DataGridViewTextBoxColumn();
            col.DataPropertyName = "READER_ID";
            col.HeaderText = "reader id ";
            grid.Columns.Add(col);
            col = new DataGridViewTextBoxColumn();
            col.DataPropertyName = "READER_BAR";
            col.HeaderText = "READER_BAR ";
            grid.Columns.Add(col);
            col = new DataGridViewTextBoxColumn();
            col.DataPropertyName = "NAME";
            col.HeaderText = "NAME ";
            grid.Columns.Add(col);
            col = new DataGridViewTextBoxColumn();
            col.DataPropertyName = "SEX";
            col.HeaderText = "SEX ";
            grid.Columns.Add(col);
            col = new DataGridViewTextBoxColumn();
            col.DataPropertyName = "DEPT_CODE";
            col.HeaderText = "DEPT_NAME ";
            grid.Columns.Add(col);
            grid.AllowUserToAddRows = false;
            grid.AllowUserToDeleteRows = false;

            refresh();
        }

        private void exit_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void add_Click(object sender, EventArgs e)
        {
            DataTable table_add = ReaderAdd.do_add();
            if (table_add != null)
            {
                DataRow row_add = table_add.Rows[0];
                DataRow row = table.NewRow();
                foreach (DataColumn column in row.Table.Columns)
                {
                    row[column.ColumnName] = row_add[column.ColumnName];
                }
                table.Rows.Add(row);
                DbHelper db = new DbHelper();
                db.Insert("reader",row);
            }
        }

        private void edit_Click(object sender, EventArgs e)
        {
            DataTable table_add = ReaderAdd.do_add();
            if (table_add != null)
            {
                DataRow row_add = table_add.Rows[0];
                DataRow row = table.NewRow();
                foreach (DataColumn column in row.Table.Columns)
                {
                    row[column.ColumnName] = row_add[column.ColumnName];
                }
                table.Rows.Add(row);
                DbHelper db = new DbHelper();
                // TODO: -- reader ,为reader_id ,reader_bar,name 添加唯一约束，并且不得为空
                db.Insert("reader", row);

            }
        }
    }
}
