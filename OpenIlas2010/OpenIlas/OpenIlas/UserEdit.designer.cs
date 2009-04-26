namespace OpenIlas
{
    partial class UserEditForm
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.cancel = new System.Windows.Forms.Button();
            this.ok = new System.Windows.Forms.Button();
            this.label3 = new System.Windows.Forms.Label();
            this.edName = new System.Windows.Forms.TextBox();
            this.label1 = new System.Windows.Forms.Label();
            this.edId = new System.Windows.Forms.TextBox();
            this.label4 = new System.Windows.Forms.Label();
            this.cbDeptId = new System.Windows.Forms.ComboBox();
            this.SuspendLayout();
            // 
            // cancel
            // 
            this.cancel.Location = new System.Drawing.Point(197, 155);
            this.cancel.Name = "cancel";
            this.cancel.Size = new System.Drawing.Size(75, 23);
            this.cancel.TabIndex = 15;
            this.cancel.Text = "cancel";
            this.cancel.UseVisualStyleBackColor = true;
            this.cancel.Click += new System.EventHandler(this.cancel_Click);
            // 
            // ok
            // 
            this.ok.Location = new System.Drawing.Point(106, 155);
            this.ok.Name = "ok";
            this.ok.Size = new System.Drawing.Size(75, 23);
            this.ok.TabIndex = 14;
            this.ok.Text = "ok";
            this.ok.UseVisualStyleBackColor = true;
            this.ok.Click += new System.EventHandler(this.ok_Click);
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Location = new System.Drawing.Point(71, 69);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(29, 12);
            this.label3.TabIndex = 13;
            this.label3.Text = "name";
            // 
            // edName
            // 
            this.edName.Location = new System.Drawing.Point(106, 69);
            this.edName.Name = "edName";
            this.edName.Size = new System.Drawing.Size(134, 21);
            this.edName.TabIndex = 12;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(77, 29);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(17, 12);
            this.label1.TabIndex = 9;
            this.label1.Text = "id";
            // 
            // edId
            // 
            this.edId.Location = new System.Drawing.Point(106, 29);
            this.edId.Name = "edId";
            this.edId.Size = new System.Drawing.Size(134, 21);
            this.edId.TabIndex = 8;
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Location = new System.Drawing.Point(35, 108);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(59, 12);
            this.label4.TabIndex = 21;
            this.label4.Text = "dept name";
            // 
            // cbDeptId
            // 
            this.cbDeptId.FormattingEnabled = true;
            this.cbDeptId.Location = new System.Drawing.Point(106, 108);
            this.cbDeptId.Name = "cbDeptId";
            this.cbDeptId.Size = new System.Drawing.Size(134, 20);
            this.cbDeptId.TabIndex = 22;
            // 
            // UserEditForm
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 12F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(319, 187);
            this.Controls.Add(this.cbDeptId);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.cancel);
            this.Controls.Add(this.ok);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.edName);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.edId);
            this.Name = "UserEditForm";
            this.Text = "User Add";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button cancel;
        private System.Windows.Forms.Button ok;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.TextBox edName;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.TextBox edId;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.ComboBox cbDeptId;
    }
}