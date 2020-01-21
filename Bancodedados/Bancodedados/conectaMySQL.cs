using System;
using System.Collections.Generic;


using System.Windows.Forms;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MySql.Data.MySqlClient;




namespace Bancodedados
{
    class conectaMySQL
    {
        public MySqlConnection getConexao()
        {
            try
            {
                string conString = "server=localhost;user=root;database=Banco2018;port=3306;password=''";
                MySqlConnection connection = new MySqlConnection(conString);
                connection.Open();
                return connection;
            }
            catch(Exception ex)
            {
                MessageBox.Show(ex.Message);
                return null;
            }
            
        }
      
    }
}
