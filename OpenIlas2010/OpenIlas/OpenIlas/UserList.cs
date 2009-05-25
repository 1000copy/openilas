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
    public partial class UserList : Form
    {
        public UserList()
        {
            InitializeComponent();
        }
        static CompanyApp app = CompanyApp.Instance();
        static CompanyDb db = app.CompanyDb;
        QueryPersonsByName persons = null;
        DataGridView grid1 = null;

        private void refresh()
        {
            persons = new QueryPersonsByName(app, "");
            persons.DoQuery();
            grid1.DataSource = persons;
            grid1.Refresh();
        }
        FlowLayoutPanel p = null;
        private void onLoad(object sender, EventArgs e)
        {
            grid1 = new DataGridView();
            grid1.Dock = DockStyle.Fill;
            Controls.Add(grid1);
            p = new FlowLayoutPanel();
            p.Dock = DockStyle.Top;
            Controls.Add(p);
            ButtonHelper.CreateButton(p, TextConst.Close, onClose);
            ButtonHelper.CreateButton(p, TextConst.Edit, onEdit);
            ButtonHelper.CreateButton(p, TextConst.Add, onAdd);
            ButtonHelper.CreateButton(p, TextConst.Delete, onDel);
            ButtonHelper.CreateButton(p, TextConst.DeleteAll, onDelAll);
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
                if (editForm.ShowDialog() == DialogResult.OK)
                {
                    refresh();
                }
            }
            else
            {
                MessageBox.Show(TextConst.NoRowSelected);
            }
        }
        void onAdd(object sender, EventArgs e)
        {
            UserEditForm editForm = new UserEditForm();
            if (editForm.ShowDialog() == DialogResult.OK)
            {
                refresh();
            }
        }
        void onDel(object sender, EventArgs e)
        {
            if (grid1.SelectedRows.Count > 0)
            {
                int id = Convert.ToInt32(((grid1.SelectedRows[0].Cells[0].Value) as SLMField).Value);
                db.Person.Id.Value = id;
                db.Person.Delete();
                refresh();
            }
            else
            {
                MessageBox.Show(TextConst.NoRowSelected);
            }
        }
        void onDelAll(object sender, EventArgs e)
        {
            db.Person.DeleteAll();
            refresh();
        }
        private void InitData()
        {
            persons = new QueryPersonsByName(app, "");
            this.Text = TextConst.UserList;
            //db = new CompanyDb(app);
            //app.CreateApp(new DbHelper(db.ToString()), db);
            grid1.AutoGenerateColumns = false;
            DataGridViewTextBoxColumn col = null;
            col = new DataGridViewTextBoxColumn();//
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
    }
}
