using Microsoft.AspNetCore.Mvc;
using System.Text.Encodings.Web;

namespace MvcMovie.Controllers
{
    public class HelloWorldController : Controller
    {
        public IActionResult Index()
        {
            return View();
        }

        //public string Index(int i)
        //{
        //    return "This is my default action...";
        //}
        public string Welcome(string name, int numTimes)
        {
            return HtmlEncoder.Default.Encode($"Hello {name}, NumTimes is: {numTimes}");
            //return "This is the Welcome action method...";
        }
        //HTTP-endpoint
        //Data base context - используется как служба (сервис). Эта служба зарегестрирована в Programm.cs при прмощи WebApplication.CreateBuilder(args)
        
    }
}
