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
    public partial class Depts : Form
    {
        public Depts()
        {
            InitializeComponent();
        }
        static CompanyApp app = CompanyApp.Instance();
        static CompanyDb db = app.CompanyDb;
        DeptList deptList = null;
        DataGridView grid1 = null;

        private void refresh()
        {
            deptList = new DeptList(app);
            deptList.DoQuery();
            grid1.DataSource = deptList;
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
            // FIX: 文本常量化
            // FIX: 按钮创建函数化
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
                DeptEditForm editForm = new DeptEditForm();
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
            DeptEditForm editForm = new DeptEditForm();
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
                db.Dept.Id.Value = id;
                db.Dept.Delete();
                refresh();
            }
            else
            {
                MessageBox.Show(TextConst.NoRowSelected);
            }
        }
        void onDelAll(object sender, EventArgs e)
        {
            db.Dept.DeleteAll();
            refresh();
        }
        private void InitData()
        {
            this.Text = TextConst.DeptList;
            
            //app.CreateApp(new DbHelper(db.ToString()), db);
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
            
            grid1.AllowUserToAddRows = false;
            grid1.AllowUserToDeleteRows = false;
            refresh();
        }

        private void exit_Click(object sender, EventArgs e)
        {
            this.Close();
        }
    }
    public delegate void ButtonEvent(object sender, EventArgs e);
    public class ButtonHelper
    {        
        public static void CreateButton(FlowLayoutPanel panel, string text, ButtonEvent btnEvent)
        {
            Button btn = new Button();
            btn.Text = text;
            btn.Parent = panel;
            btn.Click += new EventHandler(btnEvent);
        }
    }
}
