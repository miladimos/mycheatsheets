import 'dart:convert';
import 'dart:io';

void main() async
{
  String name = stdin.readLineSync();
  name.isEmpty ? stderr.writeln('Name Empty') : stdout.writeln("Hello ${name}");

  // var dir =  Directory('test').createSync();
  // var dir2 = await Directory('test').createTemp();
  
  // var systemTemp  = Directory.systemTemp;
  // await for(var entity in systemTemp.list(recursive: true, followLinks: false)) {
  //   print(entity.path);  
  // }

  // File('test.txt').readAsString().then((String content)  {
  //   print(content);
  // });

  // final file = File('test.txt');
  // Stream<String> lines = file.openRead()
  // .transform(utf8.decoder)// Decode bytes to UTF-8.
  // .transform(LineSplitter()); // Convert stream to individual lines. 

  // await for (var line in lines) {
  //   print('$line: ${line.length}');
  // }

  // final file = await File('file.txt').writeAsString('this is content');

  // var file = File('file.txt');
  // var sink = file.openWrite();
  // sink.write('Last Accessed: ${file.lastAccessedSync()}');
  // sink.close();


}

Future<void> createDescriptions(Iterable<String> objects) async {
  for (final object in objects) {
    try {
      var file = File('$object.txt');
      if (await file.exists()) {
        var modified = await file.lastModified();
        print(
            'File for $object already exists. It was modified on $modified.');
        continue;
      }
      await file.create();
      await file.writeAsString('Start describing $object in this file.');
    } on IOException catch (e) {
      print('Cannot create description for $object: $e');
    }
  }
}