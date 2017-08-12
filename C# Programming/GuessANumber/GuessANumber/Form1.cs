using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace GuessANumber
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();

            Random random = new Random();
            int number = random.Next(1, 6);
            labelHint.Text = "hover over for a hint";
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void labelHint_Click(object sender, EventArgs e)
        {
            labelHint.Text = "The number is odd";
        }

        private void labelHint_MouseEnter(object sender, EventArgs e)
        {
            labelHint.Text = "The number is odd";
        }

        private void labelHint_MouseLeave(object sender, EventArgs e)
        {
            labelHint.Text = "Hover over for a hint";
        }

        private void button1_Click(object sender, EventArgs e)
        {
            radioButton1.Enabled = false;
            radioButton2.Enabled = false;
            radioButton3.Enabled = false;
            radioButton4.Enabled = false;
            radioButton5.Enabled = false;
            if (UserSelectedRandomButton() == true)
            {
              
            }
           

        }

        private bool UserSelectedRandomButton()
        {
            Random random = new Random();
            int number = random.Next(1, 6);
            if (radioButton1.Checked == true)
                return (number == 1);
            if (radioButton2.Checked == true)
                return (number == 2);
            if (radioButton3.Checked == true)
                return (number == 3);
            if (radioButton4.Checked == true)
                return (number == 4);
            if (radioButton5.Checked == true)
                return (number == 5);
            return false;
        }

       

        private void radioButton1_CheckedChanged(object sender, EventArgs e)
        {
            labelHint.Text = "The number isn't clsoe.";
        }

        private void radioButton2_CheckedChanged(object sender, EventArgs e)
        {
            labelHint.Text = "The number is odd";

        }

        private void radioButton3_CheckedChanged(object sender, EventArgs e)
        {
            labelHint.Text = "The number is correct!";
        }

        private void radioButton4_CheckedChanged(object sender, EventArgs e)
        {
            labelHint.Text = "The number is odd";
        }

        private void radioButton5_CheckedChanged(object sender, EventArgs e)
        {
            labelHint.Text = "The number is too large";
        }

        private void button2_Click(object sender, EventArgs e)
        {
            radioButton1.Enabled = true;
            radioButton2.Enabled = true;
            radioButton3.Enabled = true;
            radioButton4.Enabled = true;
            radioButton5.Enabled = true;

            radioButton1.Checked = false;
            radioButton2.Checked = false;
            radioButton3.Checked = false;
            radioButton4.Checked = false;
            radioButton5.Checked = false;
        }
    }

  
}
