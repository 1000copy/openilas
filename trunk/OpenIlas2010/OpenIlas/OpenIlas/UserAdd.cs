using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;
using System.Reflection;

namespace openilas
{
    public partial class UserAdd : Form
    {
        public UserAdd()
        {
            InitializeComponent();
        }
        public string gid=null;
        public User user = null;
        public DataTable table = null;
        private void UserAdd_Load(object sender, EventArgs e)
        {
            string sql = "select [user],unit,user_code from usercode";
            if (gid != null && gid!="")
            {
                string cond = String.Format("gid = '{0}'", gid);
                sql += " where " + cond;
                //TODO:table = db.Query(sql);
            }
            else
            {
                string cond = String.Format("1=0", gid);
                sql += " where 1=0";
                //TODO table = db.Query(sql);
                DataRow row = table.NewRow();
                table.Rows.Add(row);                
            }
            this.textBox1.DataBindings.Add("Text", table, "user");
            this.textBox2.DataBindings.Add("Text", table, "unit");
            this.textBox3.DataBindings.Add("Text", table, "user_code");
        }

        private void ok_Click(object sender, EventArgs e)
        {
            this.DialogResult = DialogResult.OK;
            user = new User ();
            Type type = user.GetType();
            foreach( PropertyInfo p in type.GetProperties()) {
                if (table.Columns[p.Name] != null)
                {
                    string dvalue = table.Rows[0][p.Name].ToString();
                    p.SetValue(user, dvalue, null);
                }
            };
           
        }

        private void cancel_Click(object sender, EventArgs e)
        {
            this.DialogResult = DialogResult.Cancel;

        }
    }
}
