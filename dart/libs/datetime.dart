main() {
  // print(DateTime.now());
  var currentData = DateTime.now();

  print(currentData.year);
  print(currentData.weekday);
  print(currentData.month);
  print(currentData.day);
  print(currentData.hour);
  print(currentData.minute);
  print(currentData.second);

  var addDt = DateTime.now();
  print(addDt.add(Duration(days: 5, hours: 5, minutes: 30)));

  var anotherDt = DateTime.now().subtract(Duration(days: 10, hours: 10));
  print(addDt.isAfter(anotherDt)); // true

  var subDt = DateTime.now().subtract(Duration(days: 10, hours: 10));
  print(addDt.isBefore(subDt)); // false

  var diffDt = addDt.difference(subDt); // 249:59:59.999000
  print(diffDt.inSeconds);
  print(diffDt.inHours);
  print(diffDt.inMinutes);
  print(diffDt.inDays);

  print(addDt.isAtSameMomentAs(anotherDt)); // false
}
