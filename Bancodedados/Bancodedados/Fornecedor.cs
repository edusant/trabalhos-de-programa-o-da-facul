using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;


namespace Bancodedados
{
    class Fornecedor
    {
        private int id;
        private string nome;
        private string fone;

        public int getid() { return id;}
        public string getnome() { return nome; }
        public string getfome() { return fone; }

        public void setid(int id) { this.id = id; }
        public void setnome(string nome) { this.nome = nome; }
        public void setfone(string fone) { this.fone = fone; }
    }
}
