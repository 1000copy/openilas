using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;


namespace OpenIlas
{
    public partial class BookEditForm : Form
    {
        private int id = 0;

        public int Id
        {
            get { return id; }
            set { id = value; }
        }
        public BookEditForm()
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

        TextBox edId = new TextBox();
        TextBox edName = new TextBox();
        Label lbId = new Label();
        Label lbName = new Label();
        TableLayoutPanel table = new TableLayoutPanel();
        FlowLayoutPanel btns = new FlowLayoutPanel();
        private void doLoad(object sender, EventArgs e)
        {
            Text = TextConst.BookEdit;
            btns.Dock = DockStyle.Bottom;
            table.Dock = DockStyle.Fill;
            table.CellBorderStyle = TableLayoutPanelCellBorderStyle.Single;
            btns.Parent = this;
            table.Parent = this;
            table.RowCount = 3;
            table.ColumnCount = 3;
            table.Height = 300;
            table.Size = new Size(200, 100);
            btns.Height = 40;
            btns.Controls.Add(new Button());
            btns.Controls.Add(new Button());
            btns.FlowDirection = FlowDirection.RightToLeft;

            table.Controls.Add(edId);
            table.Controls.Add(edName);
            table.Controls.Add(lbId);
            table.Controls.Add(lbName);
            table.SetCellPosition(edId,new TableLayoutPanelCellPosition(2,1));
            table.SetCellPosition(edName, new TableLayoutPanelCellPosition(2, 2));
            table.SetCellPosition(lbId, new TableLayoutPanelCellPosition(1, 1));
            table.SetCellPosition(lbName, new TableLayoutPanelCellPosition(1, 2));
            edId.Text = "edid";
            edName.Text = "edName";
            lbId.Text = "edid";
            lbName.Text = "edName";
            //lbId.Dock = DockStyle.Right;
            db.Book.ClearValues();
            Height = 400;
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
            //this.edId.DataBindings.Add("Text", db.Dept.Id, "Value");
            //this.edName.DataBindings.Add("Text", db.Dept.Name, "Value");            
        }
    }
}
