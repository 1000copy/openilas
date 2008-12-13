﻿using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;
using System.Data.Common;
using System.Reflection;

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
            string maindb_key = ((DataRowView)grid.CurrentRow.DataBoundItem)["maindb_key"].ToString();
            string usercode = ((DataRowView)grid.CurrentRow.DataBoundItem)["user_code"].ToString();
            useradd.usercode = usercode;
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
                    DbHelper db = new DbHelper();
                    string sql = String.Format("update  usercode set [user] ='{0}',user_code='{1}',unit='{2}' where maindb_key={3}", useradd.user.user, useradd.user.user_code, useradd.user.unit,maindb_key);
                    db.Exec(sql);
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
                    table.Rows.Add(row);
                    //update db
                    DbHelper db = new DbHelper();
                    User user = useradd.user;
                    Type type = user.GetType();
                    foreach( PropertyInfo p in type.GetProperties()) {
                        if (p.PropertyType == typeof(bool))
                        {
                            string name = p.Name;
                            bool value =(bool) p.GetValue(user, null);
                        }
                     };
                    string sql = String.Format("insert into usercode([user],user_code,unit,aqui_flag,cata_flag,coll_flag,circ_flag,seri_flag,bibl_flag,rdrm_flag,refr_flag) values('{0}','{1}','{2}',0,0,0,0,0,0,0,0)", useradd.user.user, useradd.user.user_code, useradd.user.unit);
                    MessageBox.Show( db.Insert(sql).ToString());
                    
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
