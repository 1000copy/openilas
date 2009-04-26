using System;
using System.Collections.Generic;
using System.Text;
using System.Data;
using System.Data.SqlClient;
using System.Windows.Forms;
using System.Collections;

namespace csilas
{
    class DBHelper
    {
        private static string strCon = "Data Source=localhost;Initial Catalog=openilas;Integrated Security=True";
        private SqlDataAdapter dataAdapter = null;
        private SqlCommandBuilder commandBuilder = null;

        private static SqlConnection conn = null;
        public DBHelper()
        {
            if (conn == null)
            {
                conn = new SqlConnection(strCon);
                conn.Open();
            }
        }

        public  DataTable query(string strSQL)
        {
            dataAdapter = new SqlDataAdapter(strSQL, conn);
           
            commandBuilder = new SqlCommandBuilder(dataAdapter);
            DataTable table = new DataTable();
            dataAdapter.Fill(table);
            return table;            
        }
        public BindingSource query_datasource(string strSQL)
        {
            dataAdapter = new SqlDataAdapter(strSQL, conn);

            commandBuilder = new SqlCommandBuilder(dataAdapter);
            DataTable table = new DataTable();
            dataAdapter.Fill(table);
            BindingSource bs = new BindingSource();
            bs.DataSource = table;
            return bs;
        }
        internal int exec(string sql)
        {
            SqlCommand cmd = new SqlCommand(sql, conn);
            return cmd.ExecuteNonQuery();
        }
        internal void update(DataTable table)
        {
            dataAdapter.Update(table);
        }

        internal void update(string tablename ,System.Collections.Hashtable ht, string cond)
        {
            string setexp = "";
            int i = 0;
            foreach (string k in ht.Keys)
            {
                string v = (string)ht[k];
                setexp += k+"='"+v+"'";
                if(i != ht.Count -1 )
                    setexp += ",";
                i++;
            }
            string sql = "update "+tablename + " set " + setexp + " "+cond;
            MessageBox.Show(sql);
            exec(sql);
        }

        internal void add(string tablename, Hashtable ht)
        {
            string fields = "";
            string values = "";
            int i = 0;
            foreach (string k in ht.Keys)
            {
                string v = (string)ht[k];
                fields += k ;
                if (i != ht.Count - 1)
                    fields += ",";
                values += "'" + v + "'";
                if (i != ht.Count - 1)
                    values += ",";
                i++;
            }
            string sql = "insert into " + tablename + " ($fields) values($values)";
            sql = sql.Replace("$fields", fields);
            sql = sql.Replace("$values", values);
            MessageBox.Show(sql);
            exec(sql);
        }
    }
}
