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

    public partial class fmAddUser : Form
    {
        private BindingSource dbBindSource =  new BindingSource();
        private DataTable table = null;
        private string id = null;
        private DBHelper db = null;
        private Dictionary<string, TextBox> textboxs = new Dictionary<string,TextBox> ();
        private Dictionary<string, ComboBox> comboboxs = new Dictionary<string, ComboBox>(); 
        
        private Panel p = new Panel();
        private ContainerBox pane = null;
        public fmAddUser()
        {
            InitializeComponent();

            pane = new ContainerBox(p);
            // layout test
            AreaPane controlPane = new ResizeablePane(this, ClientRectangle, new BorderLayout());

            TextBox myTextBox = new TextBox();
            myTextBox.Text = "0";
            
            
            pane.LayoutManager = new GridLayout(4,10);

            AddTextBox("reader_id", "证号", "reader_id");
            AddTextBox("name", "姓名", "name");  
            AddCombobox("sex", "性别","sex", new object[] { "男", "女" });
            AddTextBox("dept_code", "单位代码");
            AddTextBox("dept_name", "单位"); 
            AddTextBox("reader_lvl", "读者级别");
            AddDateEdit("issue_date", "发证日期");
            AddTextBox("regist_tag", "状态");
            AddTextBox("expiredate", "挂失注销日期");
            AddTextBox("reg_date", "失效期");
            AddTextBox("bn_limit", "借书权");
            AddTextBox("bn_check", "已经借阅数 ");
            AddTextBox("ovdt_num", "过期书数");
            AddTextBox("total_fine", "罚款累计");
            AddTextBox("fine_fee", "未交罚款");
            AddTextBox("password", "密码");
            AddTextBox("email", "电子邮件");
            AddTextBox("notes", "备注");
            Button save = new Button();
            save.Text = "保存";
            Button exit = new Button();
            exit.Text = "退出";
            ContainerBox bottom = new ContainerBox(new Panel());
            bottom.LayoutManager = new FlowLayout();
            bottom.Add(save);
            bottom.Add(exit);
            controlPane.Add(myTextBox, BorderLayout.Direction.North);
            controlPane.Add(bottom, BorderLayout.Direction.South);
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
            pane.Add(lbl);
            DateTimePicker control = new DateTimePicker();
            control.Name = name;
            pane.Add(control);
            control.DataBindings.Add("Value", dbBindSource, bindingfield);
            //textboxs.Add(name, control);
        }
        private void AddTextBox(string name, string label)
        {
            AddTextBox(name, label, name);
        }
        private void AddTextBox(string name, string label, string bindingfield)
        {
            Label lbl = new Label();
            lbl.Text = label;
            pane.Add(lbl);
            TextBox control = new TextBox();
            control.Name = name;
            pane.Add(control);
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
            control.DataBindings.Add("Text", dbBindSource, bindingfield);
            comboboxs.Add(name, control);
        }
        private void fmAddUser_Load(object sender, EventArgs e)
        {   
            textboxs["name"].MaxLength = 6;
            textboxs["bn_check"].Enabled = false;
            textboxs["ovdt_num"].Enabled = false;
            textboxs["total_fine"].Enabled = false;
            textboxs["fine_fee"].Enabled = false;
            textboxs["password"].Enabled = false;
        }
        private void  InitDb()
        {
            db = new DBHelper();
            table = db.query("select * from reader where reader_id='" + id + "'");
            if (id == "0")
            {
                // newrow 后还有自己加入rows，真他妈的蠢
                table.Rows.Add(table.NewRow());
                string[] text_fields = new string[]
                {"reader_id","name","sex","dept_code","dept_name","reader_lvl",
                    "regist_tag","email","notes"};
                string[] num_fields = new string[]
                {
                   "bn_limit"};
                string[] date_fields = new string[]
                {
                    "issue_date"};
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
        public static void ShowAddUser(string id){
            fmAddUser fm = new fmAddUser ();
            fm.id = id;
            fm.InitDb();
            fm.ShowDialog();
        }

        private void save_Click(object sender, EventArgs e)
        {
            DataRow row = table.Rows[0];
            string[] fields = new string[]
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
            };
        }
        private void exit_Click(object sender, EventArgs e)
        {
            DataRow row = table.Rows[0];
            if (row.RowState!= DataRowState.Modified)
            {
                this.Close();
            }
            else
            {
                MessageBox.Show("已经存在修改，请保存后在退出！");
            }
        }
    }
    internal class Binds
    {
        public string cname = null;
        public string clabel = null;
        public string ctype = null;
        public string cupdatable = null;
        public string cfieldname = null;
    }
}