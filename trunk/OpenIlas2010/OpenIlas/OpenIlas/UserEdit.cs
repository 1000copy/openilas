using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;


namespace OpenIlas
{
    public partial class UserEditForm : Form
    {
        private int id = 0;

        public int Id
        {
            get { return id; }
            set { id = value; }
        }
        public UserEditForm()
        {
            InitializeComponent();
            this.Load += doLoad;
        }

        private void ok_Click(object sender, EventArgs e)
        {
            this.DialogResult = DialogResult.OK;
        }

        private void cancel_Click(object sender, EventArgs e)
        {
            this.DialogResult = DialogResult.Cancel;
        }
        private DataTable table = null;
        public static DataTable do_add()
        {

            return null;
           
        }

        private void doLoad(object sender, EventArgs e)
        {
            QueryPersonsById q = new QueryPersonsById(CompanyApp.Instance(),id);
            q.DoQuery();
            if (q.Count > 0)
            {
                QueryPerson person = q.First();
                this.edId.DataBindings.Add("Text", person.Id, "Value");
                this.edName.DataBindings.Add("Text", person.Name, "Value");
                this.cbDeptId.DataBindings.Add("Text", person.DeptId, "Value");
            }

        }
    }
}
