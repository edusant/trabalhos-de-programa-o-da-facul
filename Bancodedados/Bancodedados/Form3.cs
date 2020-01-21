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
    public partial class Form3 : Form
    {
        public Form3()
        {
            InitializeComponent();
        }

        private void button4_Click(object sender, EventArgs e)
        {
            controleProduto cp = new controleProduto();
            int i = Convert.ToInt32(id.Text);
            Produtos p = cp.buscaporId(i);
            if(p == null)
            {
                MessageBox.Show("Erro na busca! ");
            }
            else
            {
                textBox1.Text = p.getnome();
                textBox2.Text = Convert.ToString(p.getpreco());
            }
        }

        private void button1_Click(object sender, EventArgs e)
        {
            Produtos p = new Produtos();
            p.setId(Convert.ToInt32(id.Text));
            p.setnome(textBox1.Text);
            p.setpreco(Convert.ToDouble(textBox2.Text));

            controleProduto cp = new controleProduto();

            bool result = cp.insere(p);

            if (result)
            {
                MessageBox.Show("Produto cadastrado! ");
            }
            else
            {
                MessageBox.Show("Erro ao cadastrar produtos! ");
            }
        }

        private void button2_Click(object sender, EventArgs e)
        {
            Produtos p = new Produtos();
            p.setId(Convert.ToInt32(id.Text));
            p.setnome(textBox1.Text);
            try
            {
                controleProduto cp = new controleProduto();
                p.setpreco(Convert.ToDouble(textBox2.Text));
                bool result = cp.altera(p);

                if (result)
                {

                    MessageBox.Show("Produto alterado ");

                    id.Clear();
                    textBox1.Clear();
                    textBox2.Clear();
                    id.Focus();
                }
                else
                {
                    MessageBox.Show("Erro ao alterar produto ");
                }
            }
            catch(Exception ex)
            {
                MessageBox.Show(ex.Message);

                
            }
            

            
        }

        private void button3_Click(object sender, EventArgs e)
        {
            Produtos p = new Produtos();
            p.setId(Convert.ToInt32(id.Text));


            
            controleProduto cp = new controleProduto();

            bool result = cp.excluir(p);

            if (result)
            {
                MessageBox.Show("Dados excluidos! ");
            }
            else
            {
                MessageBox.Show("Erro ao excluir dados! ");
            }
            id.Clear();
            textBox1.Clear();
            textBox2.Clear();
            id.Focus();
        }
    }
}
