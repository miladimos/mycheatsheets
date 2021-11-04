  import 'dart:io';

void main() async {
  var server = await createServer();
  await handleRequest(server);
  print("server ...");
}

Future<HttpServer> createServer() async {
  final address = InternetAddress.loopbackIPv4;
  const port = 8000;
  return await HttpServer.bind(address, port);
}

Future<void> handleRequest(HttpServer server) async {
  await for(HttpRequest request in server) {
    request.response.write("Hello");
    await request.response.close();
  }
}
