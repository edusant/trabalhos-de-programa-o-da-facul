using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Bancodedados
{
    public partial class Form2 : Form
    {
        public Form2()
        {
            InitializeComponent();
        }

        private void button4_Click(object sender, EventArgs e)
        {
            controleFornecedor cf = new controleFornecedor();
            int i = Convert.ToInt32(id_text.Text);
            Fornecedor f = cf.buscarporid(i);
            if(f == null)
            {
                MessageBox.Show("Dados não informados");

            }
            else
            {
                textBox1.Text = f.getnome();
                textBox2.Text = f.getfome();
            }
        }

        private void button1_Click(object sender, EventArgs e)
        {
            Fornecedor f = new Fornecedor();
            f.setid(Convert.ToInt32(id_text.Text));
            f.setnome(textBox1.Text);
            f.setfone(textBox2.Text);


            controleFornecedor cf = new controleFornecedor();

            bool result = cf.insere(f);


            if (result)
            {
                MessageBox.Show("Dados inseridos...");
            }
            else
            {
                MessageBox.Show("Erro na inserção");
            }

            id_text.Clear();
            textBox1.Clear();
            textBox2.Clear();
            id_text.Focus();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            Fornecedor f = new Fornecedor();
            f.setid(Convert.ToInt32(id_text.Text));
            f.setnome(textBox1.Text);
            f.setfone(textBox2.Text);


            controleFornecedor cf = new controleFornecedor();

            bool result = cf.altera(f);


            if (result)
            {
                MessageBox.Show("Dados inseridos...");
            }
            else
            {
                MessageBox.Show("Erro na inserção");
            }

            id_text.Clear();
            textBox1.Clear();
            textBox2.Clear();
            id_text.Focus();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            Fornecedor f = new Fornecedor();
            f.setid(Convert.ToInt32(id_text.Text));
            


            controleFornecedor cf = new controleFornecedor();

            bool result = cf.excluir(f);


            if (result)
            {
                MessageBox.Show("Dados Excluidos...");
            }
            else
            {
                MessageBox.Show("Erro na exclusão");
            }

            id_text.Clear();
            textBox1.Clear();
            textBox2.Clear();
            id_text.Focus();
        }
    }
}
