using System.Net;
using System.Net.Sockets;



var hostName = Dns.GetHostName();


IPHostEntity hostIps = Dns.Resolve(hostName);
foreach(IPAddress ip in hostIps.AddressList) {
    Console.WriteLine(ip.ToString());
}



IPAddress[] addresses = Dns.GetHostAddressed(Dns.GetHostName());
foreach(IPAddress ip in addresses) {
    if(ip.AddressFamily == AddressFamily.InterNetwork) {
        Console.WriteLine(ip.ToString());
    }
}




IPAddress ip = IPAddress.Parse("192.168.1.10");
IPEndPoint ipNode = new IPEndPoint(ip, 5050);

Socket socket = new Socket(AddressFamily.InterNetwork, SocketType.Stream, ProtocolType.Tcp);




