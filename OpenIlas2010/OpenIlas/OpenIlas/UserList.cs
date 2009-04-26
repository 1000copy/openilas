using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;

using SqlSmart;
using OpenIlas;

namespace OpenIlas
{
    public partial class ReaderList : Form
    {
        public ReaderList()
        {
            InitializeComponent();
        }
        CompanyApp app = new CompanyApp();
        CompanyDb db = null;
        QueryPersonsByName persons = null;
        DataGridView grid1 = null;
        Button btnEdit = null;
        Button btnClose = null;
        private void refresh()
        {
            persons = new QueryPersonsByName(app,"");
            persons.DoQuery();
            grid1.DataSource = persons;
            grid1.Refresh();
        }
        
        private void query_Click(object sender, EventArgs e)
        {
            refresh();
        }

        private void ReaderList_Load(object sender, EventArgs e)
        {
            grid1 = new DataGridView();
            grid1.Dock = DockStyle.Fill; 
            Controls.Add(grid1);
            FlowLayoutPanel p = new FlowLayoutPanel();
            p.Dock = DockStyle.Top;
            Controls.Add(p);
            btnClose = new Button();
            btnClose.Text = "close";
            btnClose.Parent = p;
            btnClose.Click += new EventHandler(onClose);
            p.Height = 40;
            btnEdit = new Button();
            btnEdit.Text = "Edit";
            btnEdit.Parent = p;
            btnEdit.Click += new EventHandler(onEdit);
            p.Height = 40;
            InitData();
        }

        void onClose(object sender, EventArgs e)
        {
            Close();
        }
        void onEdit(object sender, EventArgs e)
        {
            if (grid1.SelectedRows.Count > 0)
            {
                UserEditForm editForm = new UserEditForm();
                editForm.Id = Convert.ToInt32(((grid1.SelectedRows[0].Cells[0].Value) as SLMField).Value);
                editForm.ShowDialog();
            }
            else
            {
                MessageBox.Show("no row selected");
            }
        }
        private void InitData()
        {
            persons = new QueryPersonsByName(app, "");
            this.Text = "User List";
            db = new CompanyDb(app);
            app.CreateApp(new DbHelper(db.ToString()), db);
            grid1.AutoGenerateColumns = false;
            DataGridViewTextBoxColumn col = null;
            col = new DataGridViewTextBoxColumn();
            col.DataPropertyName = QueryPersonMeta.Id.ToString();
            col.HeaderText = QueryPersonMeta.Id.Caption;
            grid1.Columns.Add(col);
            col = new DataGridViewTextBoxColumn();
            col.DataPropertyName = QueryPersonMeta.Name.ToString();
            col.HeaderText = QueryPersonMeta.Name.Caption;
            grid1.Columns.Add(col);
            col = new DataGridViewTextBoxColumn();
            col.DataPropertyName = QueryPersonMeta.DeptName.ToString();
            col.HeaderText = QueryPersonMeta.DeptName.Caption;
            grid1.Columns.Add(col);

            grid1.AllowUserToAddRows = false;
            grid1.AllowUserToDeleteRows = false;
            refresh();
        }

        private void exit_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void add_Click(object sender, EventArgs e)
        {
          

        }

        private void edit_Click(object sender, EventArgs e)
        {

        }


        private void exit_Click_1(object sender, EventArgs e)
        {
            Close();
        }

        private void delete_Click(object sender, EventArgs e)
        {
          
        }

        private void add_Click_1(object sender, EventArgs e)
        {
            db.Person.DeleteAll();
            db.Dept.DeleteAll();
            db.Person.Id.Value = 1;
            db.Person.Name.Value = "1000copy";
            db.Person.DeptId.Value = 1;
            db.Person.Insert();
            db.Dept.Id.Value = 1;
            db.Dept.Name.Value = "trd";
            db.Dept.Insert();
        }

        private void query_Click_1(object sender, EventArgs e)
        {
            refresh();
        }

        private void edit_Click_1(object sender, EventArgs e)
        {

        }
    }
}
