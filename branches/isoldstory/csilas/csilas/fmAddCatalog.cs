using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;
using Layout;
using System.Collections;

namespace csilas
{

    public partial class fmAddCatalog : Form
    {
        private BindingSource dbBindSource =  new BindingSource();
        private DataTable table = null;
        private string id = null;
        private DBHelper db = null;
        private Dictionary<string, TextBox> textboxs = new Dictionary<string,TextBox> ();
        private Dictionary<string, ComboBox> comboboxs = new Dictionary<string, ComboBox>(); 
        
        private Panel p = new Panel();
        private Panel p1 = new Panel();
        private ContainerBox pane = null;
        private ContainerBox pane1 = null;
        public fmAddCatalog()
        {
            InitializeComponent();
            this.Size = new Size(500, 450);
            pane = new ContainerBox(p);
            
            AreaPane controlPane = new ResizeablePane(this, ClientRectangle, new BorderLayout());

            TextBox myTextBox = new TextBox();
            myTextBox.Text = "0";
            
            
            pane.LayoutManager = new FlowLayout();

            
            AddTextBox("title", "������",400);
            AddTextBox("f1", "������",400);
            AddTextBox("f2", "�ֲ���", 250);
            AddTextBox("f3", "�ֲ��", "");
            AddTextBox("f4", "��Ҫ������", "");
            AddTextBox("f5", "��Ҫ������", "");
            AddTextBox("f6", "���", "");
            AddTextBox("f7", "ISBN", "");
            AddTextBox("f8", "װ֡", "");
            AddTextBox("f9", "����", "");
            AddTextBox("f10", "������",400);
            AddTextBox("f11", "�����", "");
            AddTextBox("f12", "������", "");
            AddTextBox("f13", "������", "");
            AddTextBox("f14", "ҳ��", "");
            AddTextBox("f15", "ͼ", "");
            AddTextBox("f16", "�ߴ�", "");
            AddTextBox("f17", "����", "");
            AddTextBox("f18", "��¼��", "");
            AddTextBox("f19", "����", "");
            AddTextBox("f20", "�����", "");
            AddTextBox("f21", "���ߣ��ִΣ���", "");
            AddTextBox("f22", "���ں�", "");
            AddTextBox("f23", "�����", "");
            AddTextBox("f24", "�ż�����", "");
            AddTextBox("f25", "��ע��", "");




            Button save = new Button();
            save.Text = "����";
            Button exit = new Button();
            exit.Text = "�˳�";
            ContainerBox bottom = new ContainerBox(new Panel());
            bottom.LayoutManager = new FlowLayout();
            bottom.Add(save);
            bottom.Add(exit);
            controlPane.Add(myTextBox, BorderLayout.Direction.North);
            controlPane.Add(bottom, BorderLayout.Direction.South);
            controlPane.Add(pane, BorderLayout.Direction.Center);
            controlPane.Add(pane, BorderLayout.Direction.Center);
            save.Click += new EventHandler(save_Click);
            exit.Click += new EventHandler(exit_Click);
            
            //

        }
        private void AddDateEdit(string name, string label)
        {
            AddDateEdit(name,label,name);
        }
        private void AddDateEdit(string name, string label,string bindingfield)
        {
            Label lbl = new Label();
            lbl.Text = label;
            lbl.Width = 50;
            pane.Add(lbl);
            DateTimePicker control = new DateTimePicker();
            control.Name = name;
            pane.Add(control);
            if (bindingfield != "")
             control.DataBindings.Add("Value", dbBindSource, bindingfield);
            //textboxs.Add(name, control);
        }
        private void AddTextBox(string name, string label,int len)
        {
            AddTextBox(name, label, "",len);   
        }
        private void AddTextBox(string name, string label)
        {
            AddTextBox(name, label, name);
        }
        private void AddTextBox(string name, string label, string bindingfield)
        {
            AddTextBox(name, label, bindingfield, 0);
        }
        private void AddTextBox(string name, string label, string bindingfield,int width )
        {
            Label lbl = new Label();
            lbl.Text = label;
            lbl.Width = 50;
            pane.Add(lbl);
            TextBox control = new TextBox();
            control.Name = name;
            if (width != 0)
                control.Width = width;
            pane.Add(control);
            if (bindingfield != "")
                control.DataBindings.Add("Text", dbBindSource, bindingfield);
            textboxs.Add(name, control);
        }
        private void AddCombobox(string name, string label, string bindingfield,object[] list)
        {
            Label lbl = new Label();
            lbl.Text = label;
            pane.Add(lbl);
            ComboBox control = new ComboBox();
            control.Name = name;
            control.Items.AddRange(list);
            pane.Add(control);
            if (bindingfield != "")
                control.DataBindings.Add("Text", dbBindSource, bindingfield);
            comboboxs.Add(name, control);
        }
        private void fmAddUser_Load(object sender, EventArgs e)
        {   
            //textboxs["name"].MaxLength = 6;

        }
        private void  InitDb()
        {
            db = new DBHelper();
            table = db.query("select * from ctlgcnmc where maindb_key='" + id + "'");
            if (id == "0")
            {
                
                table.Rows.Add(table.NewRow());
                string[] text_fields = new string[]
                {"title"};
                string[] num_fields = new string[]
                {
                   };
                string[] date_fields = new string[]
                {
                   };
                foreach (string field in text_fields)
                {
                    table.Rows[0][field] = "";
                }
                foreach (string field in date_fields)
                {
                    table.Rows[0][field] = DateTime.Now;
                }
            }
            dbBindSource.DataSource = table;

        }

        private void save_Click(object sender, EventArgs e)
        {
            DataRow row = table.Rows[0];
         /*   string[] fields = new string[]
                {"name","sex","dept_code","dept_name","reader_lvl",
                    "issue_date","regist_tag","reg_date","bn_limit","email","notes"};
            Hashtable ht = new Hashtable();
            foreach (string fieldname in fields)
            {
                ht.Add(fieldname, row[fieldname].ToString());
            }
            if (id == "0")
            {
                ht.Add("reader_id",row["reader_id"].ToString());
                db.add("reader", ht);
            }else{
                string cond = " where reader_id='" + id + "'";
                db.update("reader", ht, cond);
            };*/
        }
        private void exit_Click(object sender, EventArgs e)
        {
            foreach (DataRow row in table.Rows)
            {
                //MessageBox.Show((string)row[""]);
            }
            /*
            DataRow row = table.Rows[0];
            if (row.RowState!= DataRowState.Modified)
            {
                this.Close();
            }
            else
            {
                MessageBox.Show("�Ѿ������޸ģ��뱣������˳���");
            }*/
            this.Close();
        }

        internal static void ShowAdd(string id)
        {
            fmAddCatalog fm = new fmAddCatalog();
            fm.id = id;
            fm.InitDb();
            fm.ShowDialog();
            //ChartDataSource chart = null;
        }


      
    }

}