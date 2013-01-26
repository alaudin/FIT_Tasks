namespace mis_exam
{
    partial class frmEmployees
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
            this.dgvEmpRes = new System.Windows.Forms.DataGridView();
            this.cmbEmpolyees = new System.Windows.Forms.ComboBox();
            ((System.ComponentModel.ISupportInitialize)(this.dgvEmpRes)).BeginInit();
            this.SuspendLayout();
            // 
            // dgvEmpRes
            // 
            this.dgvEmpRes.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dgvEmpRes.Location = new System.Drawing.Point(12, 58);
            this.dgvEmpRes.Name = "dgvEmpRes";
            this.dgvEmpRes.Size = new System.Drawing.Size(956, 441);
            this.dgvEmpRes.TabIndex = 0;
            // 
            // cmbEmpolyees
            // 
            this.cmbEmpolyees.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList;
            this.cmbEmpolyees.FormattingEnabled = true;
            this.cmbEmpolyees.Location = new System.Drawing.Point(336, 22);
            this.cmbEmpolyees.Name = "cmbEmpolyees";
            this.cmbEmpolyees.Size = new System.Drawing.Size(251, 21);
            this.cmbEmpolyees.TabIndex = 1;
            this.cmbEmpolyees.SelectedIndexChanged += new System.EventHandler(this.cmbEmpolyees_SelectedIndexChanged);
            // 
            // frmEmployees
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(980, 511);
            this.Controls.Add(this.cmbEmpolyees);
            this.Controls.Add(this.dgvEmpRes);
            this.Name = "frmEmployees";
            this.Text = "Employees";
            this.Load += new System.EventHandler(this.frmEmployees_Load);
            ((System.ComponentModel.ISupportInitialize)(this.dgvEmpRes)).EndInit();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.DataGridView dgvEmpRes;
        private System.Windows.Forms.ComboBox cmbEmpolyees;
    }
}