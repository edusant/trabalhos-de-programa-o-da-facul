using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MySql.Data.MySqlClient;

namespace Bancodedados
{
    class controleProduto
    {
        public Produtos buscaporId(int id)
        {
            MySqlConnection con = new conectaMySQL().getConexao();
            MySqlCommand cmd = new MySqlCommand();
            cmd.CommandText = "select * from produtos where id = @id";
            cmd.Parameters.AddWithValue("@id", id);
            cmd.Connection = con;
            MySqlDataReader reader = cmd.ExecuteReader();

            if (reader.Read())
            {
                Produtos p = new Produtos();
                p.setId(reader.GetInt32(0));
                p.setnome(reader.GetString(1));
                p.setpreco(Convert.ToDouble(reader.GetString(2)));
                return p;
            }
            else
            {

                return null;
            }
        }

        public bool insere(Produtos p)
        {
            MySqlConnection con = new conectaMySQL().getConexao();
            MySqlCommand cmd = new MySqlCommand();
            cmd.CommandText = "insert into produtos(id, nome, precoVenda) values(@id, @nome, @preco)";
            cmd.Parameters.AddWithValue("@id", p.getId());
            cmd.Parameters.AddWithValue("@nome", p.getnome());
            cmd.Parameters.AddWithValue("@preco", p.getpreco());
            cmd.Connection = con;
            int cnt = cmd.ExecuteNonQuery();
            return (cnt > 0);
        }


        public bool altera(Produtos p)
        {
            MySqlConnection con = new conectaMySQL().getConexao();
            MySqlCommand cmd = new MySqlCommand();
            cmd.CommandText = "update produtos set nome = @nome, precoVenda = @preco where id = @id";
            cmd.Parameters.AddWithValue("@id", p.getId());
            cmd.Parameters.AddWithValue("@nome", p.getnome());
            cmd.Parameters.AddWithValue("@preco", p.getpreco());
            cmd.Connection = con;
            int cnt = cmd.ExecuteNonQuery();
            return (cnt > 0);

        }

        public bool excluir(Produtos p)
        {
            MySqlConnection con = new conectaMySQL().getConexao();
            MySqlCommand cmd = new MySqlCommand();
            cmd.CommandText = "delete from produtos where id = @id";
            cmd.Parameters.AddWithValue("@id", p.getId());
            cmd.Connection = con;
            int cnt = cmd.ExecuteNonQuery();
            return (cnt > 0);
        }
    }
}
