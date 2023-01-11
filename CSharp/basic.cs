public static class MyExtension
{
    public static string toRial(this int value)
    {
        return value.ToString(value+" rial.");
    }

    public static string toShamsi(this DateTime value)
    {
        PersianCalender pc = new PersianCalender();
        return pc.GetYear(value) + "/" + pc.GetMonth(value).ToString("00") + "/" + pc.GetDayOfMonth(value).ToString("00");
    }


    // DateTime.Now.toShamsi();
    
}



T Sum<T>(T[] values) where T : INumber<T>
{
    T result = T.Zero;
    foreach(var T value in values) {
        result += value;
    }
    return result;
}

T Avg<T>(T[] values) where T : INumber<T>
{
    var sum = Sum(values);
    var count = T.Zero;
    for(int i = 0; i < values.Length; i++)
    {
        count += T.One;
    }
    return sum/count;
}


var avg = 10.2;
string JsonExample = $$"""
    {
        Total: {{ avg }} ,
        Name: "Ali"
    }
""";


var byte[] utf8Sample = System.Text.Encoding.UTF8.GetBytes("ABC");
var byte[] utf8Sample2 = "ABC"u8;


// delegates are pointer to methods


delegate void dl1(int a, int b);

static void sum(int n1, int n2)
{
    //
}

static void minus(int n1, int n2)
{
    //
}


dl1 d = new dl1(sum);
d += minus;
d();


delegate int deleTest(int a);

deleTest d1 = delegate(int a) {return a + a};

deleTest d2 = (a) => a+a;



delegate TResult deleGe<T1, T2, TResult>(T1 a, T2 b);

deleGe<int, double, double> d1 = delegate(int a, double b) {return a / b};
d1(10, 3.15);

// pre default delegates
Func<int, double, double> mFun = (x,y) => x / y; // Func must have return value

Action<string> mAct = x => Console.WriteLine(x); // Action have not return value

Predicate<int> myPre = x => x==5; // Predicate have one input and return type is bool














