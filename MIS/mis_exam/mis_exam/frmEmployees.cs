using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using Model;
namespace mis_exam
{
    public partial class frmEmployees : Form
    {
        public frmEmployees()
        {
            InitializeComponent();
        }

        private void frmEmployees_Load(object sender, EventArgs e)
        {
            cmbEmpolyees.DataSource = EmployeeService.GetFandLName();
            cmbEmpolyees.DisplayMember = "FirstLastName";
   
            
        }

        private void cmbEmpolyees_SelectedIndexChanged(object sender, EventArgs e)
        {
            DisplayService emp = (DisplayService)cmbEmpolyees.SelectedItem;
            dgvEmpRes.DataSource = EmployeeService.OrderByEmp(emp.Employee);

        }

        
    }
}
