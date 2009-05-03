using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;


namespace OpenIlas
{
    public partial class DeptEditForm : Form
    {
        private int id = 0;

        public int Id
        {
            get { return id; }
            set { id = value; }
        }
        public DeptEditForm()
        {
            InitializeComponent();
            this.Load += doLoad;
        }
        Dept dept= null;
        CompanyDb db = CompanyApp.Instance().CompanyDb;
        private void ok_Click(object sender, EventArgs e)
        {
            this.DialogResult = DialogResult.OK;
            if (id != 0)
                db.Dept.Update();
            else
                db.Dept.Insert();            
        }

        private void cancel_Click(object sender, EventArgs e)
        {
            this.DialogResult = DialogResult.Cancel;
        }       
   

        private void doLoad(object sender, EventArgs e)
        {
            Text = TextConst.DeptEdit;
            db.Dept.ClearValues();
            if (this.id != 0)            
            {
                QueryDeptsById q = new QueryDeptsById(CompanyApp.Instance(), id);
                q.DoQuery();
                if (q.Count > 0)
                {
                    dept = q.First();
                    db.Dept.Id.Value = dept.Id.Value;
                    db.Dept.Name.Value = dept.Name.Value;                    
                }
            }
            this.edId.DataBindings.Clear();
            this.edName.DataBindings.Clear();
            this.edId.DataBindings.Add("Text", db.Dept.Id, "Value");
            this.edName.DataBindings.Add("Text", db.Dept.Name, "Value");            
        }
    }
}
