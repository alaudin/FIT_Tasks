using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Model;
namespace Model
{
    public class EmployeeService
    {
        public static List<Employees> GetAllEmployees()
        {
            return (from e in DMclass.dc.Employees
                    select e).ToList();
        }

        public static List<Orders> OrderByEmp(Employees empl)
        {
            return (from o in DMclass.dc.Orders
                    where empl.EmployeeID == o.EmployeeID
                    select o).ToList();
        }

        public static List<DisplayService> GetFandLName()
        {
            return (from e in DMclass.dc.Employees
                    select new DisplayService { Employee = e,FirstLastName=e.LastName+" "+e.FirstName}).ToList();
        }




    

    }
}
