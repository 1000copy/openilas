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
            this.cbDeptId.DropDownStyle = ComboBoxStyle.DropDownList;
        }
        QueryPerson person = null;
        CompanyDb db = CompanyApp.Instance().CompanyDb;
        private void ok_Click(object sender, EventArgs e)
        {
            if (this.cbDeptId.SelectedValue != null)
            {                
                this.DialogResult = DialogResult.OK;
                db.Person.DeptId.Value = this.cbDeptId.SelectedValue;
                if (id != 0)
                    db.Person.Update();
                else
                    db.Person.Insert();
            }
            else
            {
                MessageBox.Show("Dept Must be selected ");
            }

        }

        private void cancel_Click(object sender, EventArgs e)
        {
            this.DialogResult = DialogResult.Cancel;
        }
        /*
        class book
        {
            private int id = 0;

            public int Id
            {
                get { return id; }
                set { id = value; }
            }
            private string name = "";

            public string Name
            {
                get { return name; }
                set { name = value; }
            }
        }        
        book[] books = new book[2];
        books[0] = new book();
        books[1] = new book();
        books[0].Id = 1;
        books[0].Name = "11";
        books[1].Id = 2;
        books[1].Name = "22";
         * */
        private void doLoad(object sender, EventArgs e)
        {
            db.Person.ClearValues();
            if (this.id != 0)
            {
                QueryPersonsById q = new QueryPersonsById(CompanyApp.Instance(), id);
                q.DoQuery();
                if (q.Count > 0)
                {
                    person = q.First();
                    db.Person.Id.Value = person.Id.Value;
                    db.Person.Name.Value = person.Name.Value;
                    db.Person.DeptId.Value = person.DeptId.Value;
                    db.Person.Birthday.Value = DateTime.Now;
                }
            }
            
            this.edId.DataBindings.Clear();
            this.edName.DataBindings.Clear();
            this.cbDeptId.DataBindings.Clear();
            this.edId.DataBindings.Add("Text", db.Person.Id, "Value");
            this.edName.DataBindings.Add("Text", db.Person.Name, "Value");
            this.cbDeptId.DataBindings.Add("Text", db.Person.DeptId, "Value");

            DeptList depts = new DeptList(CompanyApp.Instance());
            depts.DoQuery();
            this.cbDeptId.DataSource = depts;
            this.cbDeptId.DisplayMember = "Name";
            this.cbDeptId.ValueMember = "Id";
            // FIX : 这样不行，难道是winform的bug？ 详细见：http://bytes.com/groups/net-vb/351341-set-combobox-selectedvalue
            //this.cbDeptId.SelectedValue = db.Person.DeptId.Value;
            this.cbDeptId.SelectedIndex = FindIndexByValue(depts, db.Person.DeptId.Value);
            if (this.id ==0)
            {
                this.cbDeptId.SelectedIndex = 0;
            }
        }

        private int FindIndexByValue(DeptList depts, object p)
        {
            for (int i = 0; i < depts.Count; i++)
            {
                if (Convert.ToInt32(depts[i].Id.Value) ==Convert.ToInt32( p)) return i;
            }
            return -1;
        }

        private void UserEditForm_Load(object sender, EventArgs e)
        {

        }
    }
}
