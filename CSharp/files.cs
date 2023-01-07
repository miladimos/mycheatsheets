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

            string content = File.ReadAllText('path');


            FileInfo file = new FileInfo(@"test.txt");
            Console.WriteLine("Full File Name: " + file.FullName);
            Console.WriteLine("File Name: " + file.Name);
            Console.WriteLine("CreationTime: " + file.CreationTime);
            Console.WriteLine("DirectoryName: " + file.DirectoryName);
            Console.WriteLine("Extension: " + file.Extension);
            Console.WriteLine("LastAccessTime: " + file.LastAccessTime);
            Console.WriteLine("LastWriteTime: " + file.LastWriteTime);


            // file.CopyTo(@"E:\test.txt", true);
            // file.MoveTo(@"E:\test.txt");


            DirectoryInfo directory = new DirectoryInfo(@"E:\Files");
            foreach (var item in directory.GetDirectories())
            {
                Console.WriteLine("Directory {0}", item.Name);
                foreach (var itemFile in item.GetFiles())
                {
                    Console.WriteLine("---File: {0}", item.Name);
                }
            }


            DriveInfo[] drivers = DriveInfo.GetDrives();
            foreach (var driver in drivers)
            {
                Console.WriteLine("Drive name: {0}", driver.Name);
            }

            Console.WriteLine("Ext: {0}", Path.GetExtension("Path.txt"));




            Console.WriteLine(Environment.CurrentDirectory);
            Console.WriteLine(Environment.UserName);
            Console.WriteLine(Environment.Is64BitOperatingSystem);
            Console.WriteLine(Environment.SystemDirectory);
            Console.WriteLine(Environment.NewLine);
            Console.WriteLine(Environment.OSVersion);

            Console.WriteLine(Environment.GetFolderPath(Environment.SpecialFolder.Desktop));
            Console.WriteLine(Environment.Version.ToString());


            string path = "";
            StringBuilder sb = new StringBuilder();

            foreach (var name in Directory.EnumerateFiles(path, "*.txt"))
            {
                using (StreamReader sr = new StreamReader(name))
                {

                    sb.AppendLine(name);
                    sb.AppendLine(sr.ReadToEnd());
                    sb.AppendLine("------------------");
                }
            }

            using (StreamWriter sw = new StreamWriter(path))
            {
                sw.Write(sb.ToString());
            }



            FileSystemWatcher fileSystemWatcher= new FileSystemWatcher(@"E:\");

            fileSystemWatcher.Created += new FileSystemEventHandler(FileSystemWatcher_Created);

            fileSystemWatcher.IncludeSubdirectories= true;
            fileSystemWatcher.EnableRaisingEvents= true;


        private static void FileSystemWatcher_Created(object sender, FileSystemEventArgs e)
        {
            Console.WriteLine("Type: {0}", e.ChangeType);
            Console.WriteLine("Name: {0}", e.Name);
        }

        }
        
    }
}