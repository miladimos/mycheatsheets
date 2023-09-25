import 'dart:async';

class Numbers {
  int data = 1;

  StreamController streamController = StreamController();

  Stream get stream => streamController.stream;

  Numbers() {
    Timer.periodic(Duration(seconds: 2), (timer) {
      streamController.sink.add(data);
      data++;
    });
  }
}

startStream() {
  Numbers().stream.map((event) => "event: $event").listen((event) {
    print(event);
  });
}
