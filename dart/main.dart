import 'dart:io';
import 'dart:collection';

main() {
  print("Hello World!");

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

  int a = 10;
  int b = 0;

  try{
   print(a ~/ b);
  }
  on IntegerDivisionByZeroException   catch(e) {
    print(e.toString());
  
    print("zero");
  }


}
