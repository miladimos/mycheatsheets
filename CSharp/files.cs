using System;
using System.IO;

namespace Files
{
    class Program
    {
        static void Main(string[] args)
        {
            FileStream fs = new FileStream("filename.txt", FileMode.Create, FileAccess.Write);
            StreamWrite sw = new StreamWrite(fs);
            sw.WriteLine("First line");
            sw.Close();
            fs.Close();

            StreamReader sr = new StreamReader(fs);
            string c = sr.ReadLine();
            sr.Close();




            string text = "Hello from C#";
            File.WriteAllText("filename.txt", text);
            string content = File.ReadAllText("filename.txt");

        }
    }
}