﻿using System;
using System.Collections.Generic;
using System.Text;
using System.Data;
using System.Data.Common;
using System.Configuration;
using System.Security.Cryptography;
namespace openilas
{
    public class Encrypt
    {

        public static string EncodePassword(string originalPassword)
        {
            Byte[] originalBytes;
            Byte[] encodedBytes;
            MD5 md5;

            // Conver the original password to bytes; then create the hash
            md5 = new MD5CryptoServiceProvider();
            originalBytes = ASCIIEncoding.Default.GetBytes(originalPassword);
            encodedBytes = md5.ComputeHash(originalBytes);

            // Bytes to string
            return System.Text.RegularExpressions.Regex.Replace(BitConverter.ToString(encodedBytes), "-", "").ToLower();
        }

    }
    public class DbHelper
    {
        
        private static string dbProviderName = ConfigurationManager.AppSettings["DbHelperProvider"];
        private static string dbConnectionString = ConfigurationManager.AppSettings["DbHelperConnectionString"];

        static private DbConnection connection =null;
        public DbHelper()
        {
            if (connection ==null)
                connection = CreateConnection(DbHelper.dbConnectionString);
        }
        public DbHelper(string connectionString)
        {
            if (connection == null)
              connection = CreateConnection(connectionString);
        }
        public static DbConnection CreateConnection()
        {
            DbProviderFactory dbfactory = DbProviderFactories.GetFactory(DbHelper.dbProviderName);
            DbConnection dbconn = dbfactory.CreateConnection();
            dbconn.ConnectionString = DbHelper.dbConnectionString;
            return dbconn;
        }
        public static DbConnection CreateConnection(string connectionString)
        {
            DbProviderFactory dbfactory = DbProviderFactories.GetFactory(DbHelper.dbProviderName);
            DbConnection dbconn = dbfactory.CreateConnection();
            dbconn.ConnectionString = connectionString;
            return dbconn;
        }

        public DbCommand GetStoredProcCommond(string storedProcedure)
        {
            DbCommand dbCommand = connection.CreateCommand();
            dbCommand.CommandText = storedProcedure;
            dbCommand.CommandType = CommandType.StoredProcedure;
            return dbCommand;
        }
        public DbCommand GetSqlStringCommond(string sqlQuery)
        {
            DbCommand dbCommand = connection.CreateCommand();
            dbCommand.CommandText = sqlQuery;
            dbCommand.CommandType = CommandType.Text;
            return dbCommand;
        }

        #region 增加参数
        public void AddParameterCollection(DbCommand cmd, DbParameterCollection dbParameterCollection)
        {
            foreach (DbParameter dbParameter in dbParameterCollection)
            {
                cmd.Parameters.Add(dbParameter);
            }
        }
        public void AddOutParameter(DbCommand cmd, string parameterName, DbType dbType, int size)
        {
            DbParameter dbParameter = cmd.CreateParameter();
            dbParameter.DbType = dbType;
            dbParameter.ParameterName = parameterName;
            dbParameter.Size = size;
            dbParameter.Direction = ParameterDirection.Output;
            cmd.Parameters.Add(dbParameter);
        }
        public void AddInParameter(DbCommand cmd, string parameterName, DbType dbType, object value)
        {
            DbParameter dbParameter = cmd.CreateParameter();
            dbParameter.DbType = dbType;
            dbParameter.ParameterName = parameterName;
            dbParameter.Value = value;
            dbParameter.Direction = ParameterDirection.Input;
            cmd.Parameters.Add(dbParameter);
        }
        public void AddReturnParameter(DbCommand cmd, string parameterName, DbType dbType)
        {
            DbParameter dbParameter = cmd.CreateParameter();
            dbParameter.DbType = dbType;
            dbParameter.ParameterName = parameterName;
            dbParameter.Direction = ParameterDirection.ReturnValue;
            cmd.Parameters.Add(dbParameter);
        }
        public DbParameter GetParameter(DbCommand cmd, string parameterName)
        {
            return cmd.Parameters[parameterName];
        }

        #endregion

        #region 执行
        public DataSet ExecuteDataSet(DbCommand cmd)
        {
            DbProviderFactory dbfactory = DbProviderFactories.GetFactory(DbHelper.dbProviderName);
            DbDataAdapter dbDataAdapter = dbfactory.CreateDataAdapter();
            dbDataAdapter.SelectCommand = cmd;
            DataSet ds = new DataSet();
            dbDataAdapter.Fill(ds);
            return ds;
        }
        private DataTable Query(DbCommand cmd)
        {
            DbProviderFactory dbfactory = DbProviderFactories.GetFactory(DbHelper.dbProviderName);
            DbDataAdapter dbDataAdapter = dbfactory.CreateDataAdapter();
            dbDataAdapter.SelectCommand = cmd;
            DataSet ds = new DataSet();
            dbDataAdapter.Fill(ds);
            return ds.Tables[0];
        }
        public DataTable Query(string sql)
        {
            DbCommand cmd = GetSqlStringCommond(sql);
            return Query(cmd);
        }      
 

        public DataTable ExecuteDataTable(DbCommand cmd)
        {
            DbProviderFactory dbfactory = DbProviderFactories.GetFactory(DbHelper.dbProviderName);
            DbDataAdapter dbDataAdapter = dbfactory.CreateDataAdapter();
            dbDataAdapter.SelectCommand = cmd;
            DataTable dataTable = new DataTable();
            dbDataAdapter.Fill(dataTable);
            return dataTable;
        }

        public DbDataReader ExecuteReader(DbCommand cmd)
        {
            cmd.Connection.Open();
            DbDataReader reader = cmd.ExecuteReader(CommandBehavior.CloseConnection);
            return reader;
        }
        public int ExecuteNonQuery(DbCommand cmd)
        {
            cmd.Connection.Open();
            int ret = cmd.ExecuteNonQuery();
            cmd.Connection.Close();
            return ret;
        }

        public object ExecuteScalar(DbCommand cmd)
        {
            cmd.Connection.Open();
            object ret = cmd.ExecuteScalar();
            cmd.Connection.Close();
            return ret;
        }
        #endregion

        #region 执行事务
        public DataSet ExecuteDataSet(DbCommand cmd, Trans t)
        {
            cmd.Connection = t.DbConnection;
            cmd.Transaction = t.DbTrans;
            DbProviderFactory dbfactory = DbProviderFactories.GetFactory(DbHelper.dbProviderName);
            DbDataAdapter dbDataAdapter = dbfactory.CreateDataAdapter();
            dbDataAdapter.SelectCommand = cmd;
            DataSet ds = new DataSet();
            dbDataAdapter.Fill(ds);
            return ds;
        }

        public DataTable ExecuteDataTable(DbCommand cmd, Trans t)
        {
            cmd.Connection = t.DbConnection;
            cmd.Transaction = t.DbTrans;
            DbProviderFactory dbfactory = DbProviderFactories.GetFactory(DbHelper.dbProviderName);
            DbDataAdapter dbDataAdapter = dbfactory.CreateDataAdapter();
            dbDataAdapter.SelectCommand = cmd;
            DataTable dataTable = new DataTable();
            dbDataAdapter.Fill(dataTable);
            return dataTable;
        }

        public DbDataReader ExecuteReader(DbCommand cmd, Trans t)
        {
            cmd.Connection.Close();
            cmd.Connection = t.DbConnection;
            cmd.Transaction = t.DbTrans;
            DbDataReader reader = cmd.ExecuteReader();
            DataTable dt = new DataTable();
            return reader;
        }
        private int ExecuteNonQuery(DbCommand cmd, Trans t)
        {
            cmd.Connection.Close();
            cmd.Connection = t.DbConnection;
            cmd.Transaction = t.DbTrans;
            int ret = cmd.ExecuteNonQuery();
            return ret;
        }

        private object ExecuteScalar(DbCommand cmd, Trans t)
        {
            cmd.Connection.Close();
            cmd.Connection = t.DbConnection;
            cmd.Transaction = t.DbTrans;
            object ret = cmd.ExecuteScalar();
            return ret;
        }
        #endregion

        public int Exec(string sql)
        {
            DbCommand cmd = GetSqlStringCommond(sql);
            return ExecuteNonQuery(cmd);
        }

        internal void Insert(string tablename ,DataRow row)
        {
            string sql = "insert into {0} ({1})values({2})";
            string fields = "";
            string values = "";
            //List<string> clist = new List<string>();
            //List<string> vlist = new List<string>();
            foreach (DataColumn col in row.Table.Columns)
            {
                //clist.Add(col.ColumnName);
                //vlist.Add(row[col.ColumnName]);
                fields += col.ColumnName+",";
                values += "'"+row[col.ColumnName]+"',";
            }
            if (fields != "")
            {
                char[] chars = {','};
                fields = fields.TrimEnd(chars);
                values = values.TrimEnd(chars);
            }
            sql = string.Format(sql,tablename,fields,values);
            Exec(sql);
        }
    }

    public class Trans : IDisposable
    {
        private DbConnection conn;
        private DbTransaction dbTrans;
        public DbConnection DbConnection
        {
            get { return this.conn; }
        }
        public DbTransaction DbTrans
        {
            get { return this.dbTrans; }
        }

        public Trans()
        {
            conn = DbHelper.CreateConnection();
            conn.Open();
            dbTrans = conn.BeginTransaction();
        }
        public Trans(string connectionString)
        {
            conn = DbHelper.CreateConnection(connectionString);
            conn.Open();
            dbTrans = conn.BeginTransaction();
        }
        public void Commit()
        {
            dbTrans.Commit();
            this.Colse();
        }

        public void RollBack()
        {
            dbTrans.Rollback();
            this.Colse();
        }

        public void Dispose()
        {
            this.Colse();
        }

        public void Colse()
        {
            if (conn.State == System.Data.ConnectionState.Open)
            {
                conn.Close();
            }
        }
    }
}
