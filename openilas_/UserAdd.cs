﻿using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;

namespace mdisample
{
    public partial class UserAdd : Form
    {
        public UserAdd()
        {
            InitializeComponent();
        }
        public string usercode=null;
        DbHelper db = new DbHelper();
        public DataTable table = null;
        private void UserAdd_Load(object sender, EventArgs e)
        {
            permit.Enabled = false;
            string sql = "select * from usercode";
            if (usercode != null)
            {
                string cond = String.Format("user_code = '{0}'", usercode);
                sql += " where " + cond;
                table = db.Query(sql);
            }
            else
            {
                string cond = String.Format("1=0", usercode);
                sql += " where 1=0";
                table = db.Query(sql);
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
            
        }

        private void cancel_Click(object sender, EventArgs e)
        {
            this.DialogResult = DialogResult.Cancel;
        }
    }
}
