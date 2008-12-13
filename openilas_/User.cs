using System;
using System.Collections.Generic;
using System.Text;

namespace mdisample
{
    //[PASSWORD],[REG_DATE],[TOTAL_PAGE],[UNIT],[USER],[USER_CODE],[MAINDB_KEY],
    //[AQUI_FLAG],[CATA_FLAG],[COLL_FLAG],[CIRC_FLAG],[SERI_FLAG],[BIBL_FLAG],[RDRM_FLAG],[REFR_FLAG],[SUB_FUNC]
    public class User
    {
        private string _user;

        public string user
        {
            get { return _user; }
            set { _user = value; }
        }
        private string _unit;

        public string unit
        {
            get { return _unit; }
            set { _unit = value; }
        }
        private string _user_code;

        public string user_code
        {
            get { return _user_code; }
            set { _user_code = value; }
        }
        private bool _aqui_flag;
        public bool aqui_flag
        {
            get { return _aqui_flag; }
            set { _aqui_flag = value; }
        }
        private bool _cata_flag;
        public bool cata_flag
        {
            get { return _cata_flag; }
            set { _cata_flag = value; }
        }

        private bool _coll_flag;
        public bool coll_flag
        {
            get { return _coll_flag; }
            set { _coll_flag = value; }
        }
        private bool _circ_flag;
        public bool circ_flag
        {
            get { return _circ_flag; }
            set { _circ_flag = value; }
        }
        private bool _seri_flag;
        public bool seri_flag
        {
            get { return _seri_flag; }
            set { _seri_flag = value; }
        }
        private bool _bibl_flag;
        public bool bibl_flag
        {
            get { return _bibl_flag; }
            set { _bibl_flag = value; }
        }
        private bool _rdrm_flag;
        public bool rdrm_flag
        {
            get { return _rdrm_flag; }
            set { _rdrm_flag = value; }
        }
       private bool _refr_flag;
        public bool refr_flag
        {
            get { return _refr_flag; }
            set { _refr_flag = value; }
        }
        public User()
        {
            this._aqui_flag = false;
            this._bibl_flag = false;
            this._cata_flag = false;
            this._circ_flag = false;
            this._coll_flag = false;
            this._rdrm_flag = false;
            this._refr_flag = false;
            this._seri_flag = false;
        }
    }
}
