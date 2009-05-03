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
            table.RowStyles.Add(new RowStyle(SizeType.Absolute, 30));
            table.RowStyles.Add(new RowStyle(SizeType.Absolute, 30));       
            table.RowCount = 2;
            table.Height = 60;// 必须和30+30相等；如果高度大于所有行的总高度，最后一行的高度就会放大
            table.ColumnCount = 2;
            
            table.CellBorderStyle = TableLayoutPanelCellBorderStyle.Single;           
            table.Controls.Add(edId);
            table.Controls.Add(edName);
            table.Controls.Add(lbId);
            table.Controls.Add(lbName);
            table.SetCellPosition(edId,new TableLayoutPanelCellPosition(1,1));
            table.SetCellPosition(edName, new TableLayoutPanelCellPosition(1, 0));
            table.SetCellPosition(lbId, new TableLayoutPanelCellPosition(0, 0));
            table.SetCellPosition(lbName, new TableLayoutPanelCellPosition(0, 1));
            edId.Text = "edid";
            edName.Text = "edName";
            lbId.Text = "edid";
            lbName.Text = "edName";
            lbId.TextAlign = ContentAlignment.MiddleRight;
            lbName.TextAlign = ContentAlignment.MiddleRight;
            lbId.Anchor = AnchorStyles.Right;
            lbName.Anchor = AnchorStyles.Right;
            edId.Anchor = AnchorStyles.Left;
            edName.Anchor = AnchorStyles.Left;
            
            btns.Height = 30;
            btns.Controls.Add(new Button());
            btns.Controls.Add(new Button());
            btns.FlowDirection = FlowDirection.RightToLeft;

            btns.Dock = DockStyle.Top;
            table.Dock = DockStyle.Top;
            btns.Parent = this;
            table.Parent = this;
           
            
            db.Book.ClearValues();
            Height = 150;
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
