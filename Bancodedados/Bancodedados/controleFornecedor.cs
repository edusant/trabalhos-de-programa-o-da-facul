using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MySql.Data.MySqlClient;

namespace Bancodedados
{
    class controleFornecedor
    {
        public Fornecedor buscarporid(int id)
        {
            MySqlConnection con = new conectaMySQL().getConexao();
            MySqlCommand cmd = new MySqlCommand();
            cmd.CommandText = "select * from fornecedores where id = @id";
            cmd.Parameters.AddWithValue("@id", id);
            cmd.Connection = con;
            MySqlDataReader reader = cmd.ExecuteReader();

            if (reader.Read())
            {
                Fornecedor f = new Fornecedor();
                f.setid(reader.GetInt32(0));
                f.setnome(reader.GetString(1));
                f.setfone(reader.GetString(2));
                return f;
            }
            else
            {

                return null;
            }
        }


        public bool insere(Fornecedor f)
        {
            MySqlConnection con = new conectaMySQL().getConexao();
            MySqlCommand cmd = new MySqlCommand();
            cmd.CommandText = "insert into fornecedores(id, nome, fone) values(@id, @nome, @fone)";
            cmd.Parameters.AddWithValue("@id", f.getid());
            cmd.Parameters.AddWithValue("@nome", f.getnome());
            cmd.Parameters.AddWithValue("@fone", f.getfome());
            cmd.Connection = con;
            int cnt = cmd.ExecuteNonQuery();
            return (cnt > 0);
        }
        public bool altera(Fornecedor f)
        {
            MySqlConnection con = new conectaMySQL().getConexao();
            MySqlCommand cmd = new MySqlCommand();
            cmd.CommandText = "update fornecedores set nome = @nome, fone = @fone where id = @id";
            cmd.Parameters.AddWithValue("@id", f.getid());
            cmd.Parameters.AddWithValue("@nome", f.getnome());
            cmd.Parameters.AddWithValue("@fone", f.getfome());
            cmd.Connection = con;
            int cnt = cmd.ExecuteNonQuery();
            return (cnt > 0);

        }
        public bool excluir(Fornecedor f)
        {
            MySqlConnection con = new conectaMySQL().getConexao();
            MySqlCommand cmd = new MySqlCommand();
            cmd.CommandText = "delete from fornecedores where id = @id";
            cmd.Parameters.AddWithValue("@id", f.getid());
            cmd.Connection = con;
            int cnt = cmd.ExecuteNonQuery();
            return (cnt > 0);
        }
    }
}
