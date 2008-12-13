using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;
using System.Data.Common;

namespace mdisample
{
    public partial class UserList : Form
    {
        private DbHelper db = new DbHelper();
        private DataTable table = null;
        public UserList()
        {
            InitializeComponent();
        }



        private void ReadList_Load(object sender, EventArgs e)
        {
            grid.AutoGenerateColumns = false;
            DataGridViewTextBoxColumn col = null;
            col = new DataGridViewTextBoxColumn();
            col.DataPropertyName = "user";
            col.HeaderText = "user name ";
            grid.Columns.Add(col);
            col = new DataGridViewTextBoxColumn();
            col.DataPropertyName = "user_code";
            col.HeaderText = "user code ";
            grid.Columns.Add(col);
            col = new DataGridViewTextBoxColumn();
            col.DataPropertyName = "unit";
            col.HeaderText = "dept ";
            grid.Columns.Add(col);
            grid.AllowUserToAddRows = false;
            grid.AllowUserToDeleteRows = false;
            //grid.Dock = DockStyle.Bottom;
            refresh();
        }
        private void refresh()
        {
            string username = this.textBox1.Text;
            string sql = "";
            if (username != "")
            {
                sql = String.Format("select * from usercode where [user] like '%{0}%'", username);
            }
            else
            {
                sql = "select * from usercode ";

            }
            DataTable ds = db.Query(sql);
            table = ds;
            grid.DataSource = table;
            grid.Refresh();
        }
        
        private void query_Click(object sender, EventArgs e)
        {
            refresh();
        }

        private void edit_Click(object sender, EventArgs e)
        {
            UserAdd useradd = new UserAdd();
            string usercode = ((DataRowView)grid.CurrentRow.DataBoundItem)["user_code"].ToString();
            useradd.usercode = usercode;
            if (useradd.ShowDialog() == DialogResult.OK)
            {
                MessageBox.Show(useradd.table.Rows[0]["user"].ToString());
            }
        }

        private void add_Click(object sender, EventArgs e)
        {
            UserAdd useradd = new UserAdd();
            if (useradd.ShowDialog() == DialogResult.OK)
            {
                if (useradd.user != null)
                {
                    // update ui
                    DataRow row = table.NewRow();
                    row["user"] = useradd.user.user;
                    row["user_code"] = useradd.user.user_code;
                    row["unit"] = useradd.user.unit;
                    table.Rows.Add(row);
                    //update db
                    DbHelper db = new DbHelper();
                    string sql = String.Format("insert into usercode([user],user_code,unit) values('{0}','{1}','{2}')",useradd.user.user,useradd.user.user_code,useradd.user.unit);
                    MessageBox.Show( db.Exec(sql).ToString());
                }
            }
        }

        private void exit_Click(object sender, EventArgs e)
        {
            Close();
        }

        private void delete_Click(object sender, EventArgs e)
        {
            int i = grid.CurrentCell.RowIndex;
            if (i >-1 ){
                string user_code = table.Rows[i]["user_code"].ToString();
                string sql = String.Format("delete from usercode where user_code='{0}'", user_code);
                DbHelper db = new DbHelper();
                db.Exec(sql);
                table.Rows.RemoveAt(i);                
            }
        }
    }
}
