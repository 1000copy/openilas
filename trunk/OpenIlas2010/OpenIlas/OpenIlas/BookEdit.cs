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
        Book book = null;
        CompanyDb db = CompanyApp.Instance().CompanyDb;
        private void ok_Click(object sender, EventArgs e)
        {
            try
            {
                if (id != 0)
                    db.Book.Update();
                else
                    db.Book.Insert();
                this.DialogResult = DialogResult.OK;
            
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.Message);
            }
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
            table.SetCellPosition(edId,new TableLayoutPanelCellPosition(1,0));
            table.SetCellPosition(edName, new TableLayoutPanelCellPosition(1, 1));
            table.SetCellPosition(lbId, new TableLayoutPanelCellPosition(0, 0));
            table.SetCellPosition(lbName, new TableLayoutPanelCellPosition(0, 1));
            lbId.Text = TextConst.UserCode;
            lbName.Text = TextConst.Name;
            lbId.TextAlign = ContentAlignment.MiddleRight;
            lbName.TextAlign = ContentAlignment.MiddleRight;
            lbId.Anchor = AnchorStyles.Right;
            lbName.Anchor = AnchorStyles.Right;
            edId.Anchor = AnchorStyles.Left;
            edName.Anchor = AnchorStyles.Left;
            
            btns.Height = 30;
            Button btnOk = new Button();
            btnOk.Click +=new EventHandler(ok_Click);
            
            btnOk.Text = TextConst.Ok;
            Button btnCancel = new Button();
            btnCancel.Text = TextConst.Cancel;
            btnCancel.Click += new EventHandler(cancel_Click);
            btns.Controls.Add(btnCancel);
            btns.Controls.Add(btnOk);
            btns.FlowDirection = FlowDirection.RightToLeft;

            btns.Dock = DockStyle.Top;
            table.Dock = DockStyle.Top;
            btns.Parent = this;
            table.Parent = this;
           
            Height = 150;
            db.Book.ClearValues();
            if (this.id != 0)            
            {
                QueryBooksById q = new QueryBooksById(CompanyApp.Instance(), id);
                q.DoQuery();
                if (q.Count > 0)
                {
                    book = q.First();
                    db.Book.Id.Value = book.Id.Value;
                    db.Book.Name.Value = book.Name.Value;                    
                }
            }
            this.edId.DataBindings.Clear();
            this.edName.DataBindings.Clear();
     
            this.edId.DataBindings.Add("Text", db.Book.Id, "Value");
            this.edName.DataBindings.Add("Text", db.Book.Name, "Value");  
             
        }
    }
}
