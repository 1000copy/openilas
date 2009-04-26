using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;

namespace openilas
{
    public partial class Password : Form
    {
        public Password()
        {
            InitializeComponent();
        }
        private string _newpassword;

        public string newpassword
        {
            get { return _newpassword; }
            set { _newpassword = value; }
        }
        private void Password_Load(object sender, EventArgs e)
        {
            //ok.DialogResult = DialogResult.OK;
            cancel.DialogResult = DialogResult.Cancel;
            _password.PasswordChar = '*';
            _confirmpassword.PasswordChar = '*';

        }

        private void ok_Click(object sender, EventArgs e)
        {
            
            if (_password.Text != _confirmpassword.Text)
            {
                MessageBox.Show("password must equal to confirmpassword!");
            }else{
                _newpassword = _password.Text;
                this.DialogResult = DialogResult.OK ;
            }
        }
    }
}
