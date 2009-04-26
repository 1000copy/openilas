using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;
using Layout;

namespace csilas
{
    public partial class CalculatorForm : Form
    {
        public CalculatorForm()
        {
            Size = new Size(400, 650);
            Text = "Calculator";

            //This will be the top-level pane to which all other controls will be added 
            //and which also resizes as the Form is resized. 
            AreaPane controlPane = new ResizeablePane(this, ClientRectangle, new BorderLayout());

            TextBox myTextBox = new TextBox();
            myTextBox.Text = "0";
            //Notice that the control is added to the pane. ContainerBoxes will 
            //add all controls which are added to them to their boxed control automatically. 
            controlPane.Add(myTextBox, BorderLayout.Direction.North);

            ContainerBox pane = new ContainerBox(new Panel());
            pane.LayoutManager = new GridLayout(4, 10);
            for (int i = 1; i < 10; i++)
            {
                Button b = new Button();
                pane.Add(b);
            }
            Button zero = new Button();
            Button plus = new Button();
            Button minus = new Button();

            pane.Add(plus);
            pane.Add(zero);
            pane.Add(minus);
            Button clearB = new Button();
            clearB.Text = "Clear";
            Button clearC = new Button();
            clearB.Text = "ClearC";
            ContainerBox bottom = new ContainerBox(new Panel());
            bottom.LayoutManager = new FlowLayout();
            bottom.Add(clearB);
            bottom.Add(clearC);
            controlPane.Add(bottom, BorderLayout.Direction.South);
            controlPane.Add(pane, BorderLayout.Direction.Center);
        }


        private void CalculatorForm_Load(object sender, EventArgs e)
        {

        }

    }


    
}