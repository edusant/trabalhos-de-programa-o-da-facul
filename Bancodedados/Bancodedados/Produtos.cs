using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Bancodedados
{
    class Produtos
    {
        private int id;
        private string nome;
        private double preco;

        
        public int getId() { return id; }
        public double getpreco() { return preco; }
        public string getnome() { return nome; }


        public void setId(int id) { this.id = id; }
        public void setnome(string nome) { this.nome = nome; }
        public void setpreco(double preco) { this.preco = preco; }
    }
}
