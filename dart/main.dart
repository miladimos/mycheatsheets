import 'dart:io';
import 'dart:collection';

void main() {
  print("Hello World!");

printDelayedString("Test");
  // var list1  = [1, 20, 12, 30];
  // print(list1.length);
  // print(list1[list1.length - 1]); // 30

  // print(DateTime.now());

  // print("Enter your name: ");
  // String? name = stdin.readLineSync();

  // String url = 'https://dart.dev/guides/libraries';
  // var uri = Uri.parse(url);
  // print(uri.scheme);
  // print(uri.host);
  // print(uri.path);

  // stdout.writeln("Enter name: ");
  // String? name = stdin.readLineSync();

  // int a = 10;
  // int b = 0;

  // try {
  //   print(a ~/ b);
  // } on IntegerDivisionByZeroException catch (e) {
  //   print(e.toString());

  //   print("zero");
  // }

  
}

void printJadvalZarb() {
  for (int i = 1; i < 10; i++) {
    for (int j = 1; j < 10; j++) {
      int number = i*j;
      stdout.writeln(number.toString().padLeft(2));
      if(j == 9){
        stdout.write('\n');
      } else {
        stdout.write(', ');
      }
    }
  }
}

Future<void> printDelayedString(String str) async {
  await Future.delayed(Duration(seconds: 4));
  stdout.writeln(str);
}

Future<void> printDelayedString2(String str) {
  return Future.delayed(Duration(seconds: 2)).then((value) => stdout.writeln(str));
}
