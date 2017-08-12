using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Movie
{
    class Program
    {
        static void Main(string[] args)
        {
            string film = "Rocky Balboa (2006)";
            int time = 101;
            Console.WriteLine("Without integer arguement");
            movie(film, time);
   
        }

        public static void movie(string movie, int time = 90)
        {
            Console.WriteLine("The movie is called: {0}", movie);
            Console.WriteLine("The running time is: {0} minutes", time);
        }


    }
}
