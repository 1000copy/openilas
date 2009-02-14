using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;
using System.Data.Common;
using System.Reflection;

namespace openilas
{
    public partial class UserList : Form
    {
        //private DbHelper db = new DbHelper();
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
            //permit.Enabled = false;
            //password.Enabled = false;
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
            // TODO :DataTable ds = db.Query(sql);
            //table = ds;
            //grid.DataSource = table;
            //grid.Refresh();
        }
        
        private void query_Click(object sender, EventArgs e)
        {
            refresh();
        }

        private void edit_Click(object sender, EventArgs e)
        {
            UserAdd useradd = new UserAdd();
            string gid = ((DataRowView)grid.CurrentRow.DataBoundItem)["gid"].ToString();
             useradd.gid = gid;
            if (useradd.ShowDialog() == DialogResult.OK)
            {
                MessageBox.Show(useradd.user.user);
                int i = grid.CurrentCell.RowIndex;
                if (i > -1)
                {
                    DataRow row = table.Rows[i];
                    row["user"] = useradd.user.user;
                    row["user_code"] = useradd.user.user_code;
                    row["unit"] = useradd.user.unit;
                    //TODO :DbHelper db = new DbHelper();
                    //string sql = String.Format("update  usercode set [user] ='{0}',user_code='{1}',unit='{2}' where gid='{3}'", useradd.user.user, useradd.user.user_code, useradd.user.unit,gid);
                    //db.Exec(sql);
                }
         
              
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
                    string gid = Guid.NewGuid().ToString();
                    row["gid"] = gid;
                    table.Rows.Add(row);
                    //update db
                    //DbHelper db = new DbHelper();
                    User user = useradd.user;
                    Type type = user.GetType();
                    foreach( PropertyInfo p in type.GetProperties()) {
                        if (p.PropertyType == typeof(bool))
                        {
                            string name = p.Name;
                            bool value =(bool) p.GetValue(user, null);
                        }
                     };
                    string sql = String.Format("insert into usercode(gid,[user],user_code,unit,aqui_flag,cata_flag,coll_flag,circ_flag,seri_flag,bibl_flag,rdrm_flag,refr_flag) values('{0}','{1}','{2}','{3}',0,0,0,0,0,0,0,0)",gid, useradd.user.user, useradd.user.user_code, useradd.user.unit);
                    //db.Exec(sql);
                    
                }
            }
        }

        private void exit_Click(object sender, EventArgs e)
        {
            Close();
        }

        private void delete_Click(object sender, EventArgs e)
        {
            if (MessageBox.Show("are you sure ?","confirm",MessageBoxButtons.OKCancel) == DialogResult.OK) 
            { 
            int i = grid.CurrentCell.RowIndex;
            if (i >-1 ){
                string user_code = table.Rows[i]["user_code"].ToString();
                string sql = String.Format("delete from usercode where user_code='{0}'", user_code);
                //TODO DbHelper db = new DbHelper();
                //db.Exec(sql);
                table.Rows.RemoveAt(i);                
            }
            }
        }

        private void permit_Click(object sender, EventArgs e)
        {
            UserPermit permit = new UserPermit();
            int i = grid.CurrentCell.RowIndex;
            if (i >-1 ){
               string gid = table.Rows[i]["gid"].ToString();
               permit.gid = gid;
               if (permit.ShowDialog() == DialogResult.OK)
               {
                   //aqui_flag,cata_flag,coll_flag,circ_flag,seri_flag,bibl_flag,rdrm_flag
                   //TODO :DbHelper db = new DbHelper();
                   string sql = string.Format("update usercode set aqui_flag={0},cata_flag={1},coll_flag={2},circ_flag={3},seri_flag={4},bibl_flag={5},rdrm_flag={6} where gid = '{7}'",
                       permit.table.Rows[0]["aqui_flag"].ToString()=="True"?1:0,
                       permit.table.Rows[0]["cata_flag"].ToString() == "True" ? 1 : 0,
                       permit.table.Rows[0]["coll_flag"].ToString() == "True" ? 1 : 0,
                       permit.table.Rows[0]["circ_flag"].ToString() == "True" ? 1 : 0,
                       permit.table.Rows[0]["seri_flag"].ToString() == "True" ? 1 : 0,
                       permit.table.Rows[0]["bibl_flag"].ToString() == "True" ? 1 : 0,
                       permit.table.Rows[0]["rdrm_flag"].ToString() == "True" ? 1 : 0,
                       gid);
                   MessageBox.Show(sql);
                   //TODO:db.Exec(sql);
               }
            }
        }

        private void password_Click(object sender, EventArgs e)
        {
            Password password = new Password();
            if (password.ShowDialog() == DialogResult.OK)
            {
                //aqui_flag,cata_flag,coll_flag,circ_flag,seri_flag,bibl_flag,rdrm_flag
                int i = grid.CurrentCell.RowIndex;
                string gid = table.Rows[i]["gid"].ToString();
                //TODO:DbHelper db = new DbHelper();
                //string _password = Encrypt.EncodePassword( password.newpassword ) ;
                //_password = _password.Substring(0, 10);
                //string sql = string.Format("update usercode set password = '{0}' where gid = '{1}'",_password,gid);
                //TODO:db.Exec(sql);
            }
        }
    }
}


