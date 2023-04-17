using System;

Type t = typeof(int);
t.GetMethods();

Type t2 = "String".GetType();
t2.Name // String
t2.FullName // System.String

