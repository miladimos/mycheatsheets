using System;

namespace CSharp
{
    public class CSharpConsole
    {
        public static void Main(string[] args)
        {
            // Console.WriteLine("Hello World");


            // Variables
            int num1 = 10;
            float num2 = 12.5f;
            string str = "Hello String";
            string name;
            char c = 'c';
            bool flag = true;

            // str = num1.ToString();

            Console.WriteLine("Number 1: {0}, Number 2: {1}", num1, num2);

            // num1 = Convert.toInt32(num2);
            // num2 = Convert.toSingle(); toFloat

            // name = Console.ReadLine();
            // c = char.Parse(Console.ReadKey()); // Convert.toChar()
            // c = char.toUpper(c);


            // Arrays
            int[] nums = new int[3];
            nums[0] = 12;
            nums[1] = 22;
            nums[2] = 42;

            int[] nums2 = new int[] {1, 4, 6, 12, 41, 34, 14};
            Console.WriteLine("Length Of numbs2 : {0}", nums2.Length);

            string[,] langs;
            langs = new string[,] { {"C#", "VB"}, {"PHP", "C"} };

            const float PI = 3.1415f;

            decimal dec = 21312313M;


            int? nullNumber = null;
            Console.WriteLine(nullNumber??0);











            Console.Readkey();
        }
    }
}