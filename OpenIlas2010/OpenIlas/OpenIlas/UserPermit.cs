using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;

namespace openilas
{
    public partial class UserPermit : Form
    {
        public UserPermit()
        {
            InitializeComponent();
        }
        private string _gid;
        public DataTable table = null;
        public string gid
        {
            get { return _gid; }
            set { _gid = value; }
        }
        private void UserPermit_Load(object sender, EventArgs e)
        {
            //aqui_flag,cata_flag,coll_flag,circ_flag,seri_flag,bibl_flag,rdrm_flag,
            // refr_flag 不知道，好像没有使用
            // 采访,编目,典藏,流通,期刊,书目,
            //table = db.Query(string.Format("select * from usercode where gid='{0}'", gid));
            aqui_flag.DataBindings.Add("checked", table, "aqui_flag");
            cata_flag.DataBindings.Add("checked", table, "cata_flag");
            coll_flag.DataBindings.Add("checked", table, "coll_flag");
            circ_flag.DataBindings.Add("checked", table, "circ_flag");
            seri_flag.DataBindings.Add("checked", table, "seri_flag");
            bibl_flag.DataBindings.Add("checked", table, "bibl_flag");
            rdrm_flag.DataBindings.Add("checked", table, "rdrm_flag");

        }

        private void ok_Click(object sender, EventArgs e)
        {
            this.DialogResult = DialogResult.OK;
        }

        private void cancel_Click(object sender, EventArgs e)
        {
            this.DialogResult = DialogResult.Cancel;
        }
    }
}
