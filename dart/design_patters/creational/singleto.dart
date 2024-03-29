class Singleton
{

  static Singleton? _instance;

  Singleton._(); // private constructor

  static Singleton getInstance() {
    if(_instance == null) {
      _instance = Singleton._();
    }

    return _instance!;
  }
}
