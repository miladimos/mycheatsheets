import 'dart:io';
import 'dart:async';
import 'dart:convert';

void main(List<String> args) async {
  // simpleStream(200000).listen((event) {
  //   print("$event");
  // });

  // Stream stream = simpleStream(30000);
  // await for (var i in stream) {
  //   File f = File('file.txt');
  //   IOSink sink = f.openWrite(mode: FileMode.append);
  //   sink.add(utf8.encode("$i\n"));
  //   await sink.flush();
  //   await sink.close();
  // }

  File f = File('file.txt');
  Stream<List<int>> fStream = f.openRead();
  fStream.transform(utf8.decoder).transform(LineSplitter()).listen((event) {
    print("$event");
  });
}

Stream<int> simpleStream(int x) async* {
  for (int i = 0; i <= x; i++) {
    yield i;
  }
}
