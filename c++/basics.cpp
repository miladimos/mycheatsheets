#include <iostream>
#include <climits>
#include <cstdlib>
#include <cstring>

using namespace std;

int multiple(int); // prototype

void swap(int &, int &);

int strlength(const char *);
void strconcat(char *, const char *);

#define min(x, y) (x < y ? x : y) // macro

template <class T>
T maximum(T x, T y)
{
    T max;
    if (x > y)
        max = x;
    else
        max = y;
    return max;
}

int main()
{
    // cout<<"Hello"<<endl<<"World";
    // cerr << "\nError";

    // int a;
    // cin>>a;
    // cout<<a *2;
    // cout<<sizeof(a);
    // cout<<INT_MAX; // climits header

    // char c; // -128...127
    // unsigned char c; // 0...255
    // c = 'a'; // a: 97 A: 65

    // int a;
    // a++ first assign and increment
    // ++a first increment and assing

    // << double data
    // >> Halve data

    // cout.width(5);
    // cout.fill('*');
    // cout.setf(ios::left); // ios::right
    // cout<<'a';

    // char ch;
    // int x;
    // for(ch='a'; ch<='z'; ch++)
    // {
    //     x=ch;
    //     cout<<ch<<"="<<x<<endl;
    // }

    // cout<<min(4,5);

    // int x = 2;
    // int y = 3;
    // swap(x, y);
    // cout<<"x="<<x<<endl;
    // cout<<"y="<<y<<endl;

    // int a[3];
    // a[0]=1;
    // a[1]=2;
    // a[2]=3;
    // int sum = 0;
    // for(int i=0; i<3; i++) {
    //     cout<<a[i]<<endl;
    //     sum =  sum+a[i];
    // }
    // cout<<"Sum: "<<sum;

    // int a[3]={1,2,3};

    // int a=4;
    // int *pa;
    // pa=&a;
    // cout<<*pa<<endl; // 4
    // cout<<sizeof(pa)<<endl; // 8 byte

    // int a=3;
    // const int *pa=&a;
    // *pa=2;   // Error
    // pa = &b; // Ok

    // int b=3;
    // int * const pb=&b;
    // *pb=2;    // Ok
    //  pb = &c; // Error

    // int c=3;
    // const int * const pc=&c;
    // *pc=2;    // Error
    //  pc = &d; // Error

    // pointer to pointer

    // pp -> p -> a
    // int a=10;
    // int *p=&a;
    // int **pp=&p;
    // cout<<*p<<endl; // 10
    // cout<<**pp<<endl; // 10
    // cout<<p<<endl; // 0x7ffd9cdbf504
    // cout<<*pp<<endl; // 0x7ffd9cdbf504

    // char s[10];
    // cin.get(s, 10);
    // cout<<s;

    // char ch;
    // while(cin.get(ch))
    // {
    //     if(ch='a')
    //         cin.putback('b');
    //     cout<< ch;
    // }

    // char ch;
    // while(cin.get(ch))
    // {
    //     cout<< ch;

    //     while(cin.peek()=='b')
    //         cin.ignore(1, 'b');

    //     if(ch='.')
    //         break;
    // }

    // char s1[] = "10";
    // cout<< atoi(s1);

    // char s2[] = "1.5";
    // cout<< atof(s2);

    // char ch;
    // while(cin.get(ch))
    // {
    //     if(islower(ch))
    //         cout<<char(toupper(ch));
    //     else
    //         cout<<ch;
    // }

    // char ch;
    // int ca = 0, cd = 0, can= 0;
    // while(cin.get(ch))
    // {
    //     if(isalpha(ch))
    //         ++ca;
    //     if(isdigit(ch))
    //         ++cd;
    //     if(isalnum(ch))
    //         ++can;
    //     if(c=='.')
    //      break;
    // }
    // cout<<"ca="<<ca<<endl;
    // cout<<"cd="<<cd<<endl;
    // cout<<"can="<<can<<endl;

    // char s1[]="ali";
    // char s2[]="reza";
    // char s3[]="abcdeabjg";
    // strcpy(s1, s2); // efgh
    // strncpy(s1, s2, 2); // efcd

    // strcat(s1,s2);
    // strncat(s1,s2, 2);

    // cout<<strcmp(s1, s2); // s1==s2 : 0, s1<s2 = -1, s1>s2: +1
    // cout<<strncmp(s1, s2, 2); // s1==s2 : 0, s1<s2 = -1, s1>s2: +1

    // cout<<strchr(s1, 'l'); // li
    // cout<<strrchr(s3, 'b'); // bjg
    // cout<<strstr(s1, "al"); // ali
    // cout<<strtok(s3, "e"); // abcd

    // char s[] = "this is string in c";
    // char *p;
    // p = strtok(s, " ");
    // int c=0;
    // do{
    //     ++c;
    //     cout<<p<<endl;
    //     p=strtok(nullptr, " ");
    // }while(p != nullptr);

    // cout<<"\n number tokens: "<<c;

    // char sn[] = "123adb523";
    // char *p;
    // long int x;
    // x=strtol(sn, &p, 10);
    // cout<<x<<endl; // 123
    // cout<<p; // adb523

    // const char *s1 = "abcdef";
    // const char *s2 = "dbdhg";
    // cout << strspn(s1, s2); // 2
    // cout << strcspn(s1, s2); // 01

    // char s[] = "abcde";
    // char s1[] = "efg";
    // cout<<static_cast<char *> (memset(s, 'g', 3)); // gggde
    // memcpy(s, s1, 1);
    // cout<<s1;

    // cout<< static_cast<char *> (memmove(s, &s[1], 2)); //bccde

    // cout<<strlength(s);

    // string s("Hello");
    // string s1;
    // cout<<s.at(2); // l
    // cout<<s.length();
    // cout<<s.find('e');
    // cout<<s.replace(1,3, "gg"); // Hggo
    // s1.assign(s);
    // s1.append(s);
    // cout<<s1;
    // cout<<s.substr(2, 2); // ll
    // s.erase(3,2);
    // cout<<s; // Hel

    // int k;
    // k = s.find("e");
    // s.replace(k+1, 0, "dd");
    // cout<<s; // Heddllo

    // string s("this is str ");
    // int p;
    // p = s.find(" ");
    // while(p!=-1)
    // {
    //     s.replace(p,1, ".");
    //     p = s.find(" ");
    // }
    // cout<< s;

    // char s[] = "abcdef";
    // int k =2;
    // // cin >>k;
    // strcpy(&s[k], &s[k+1]); // abdef
    // cout<<s;

    // char *ars[3]={"apple", "orange", "banana"};

    // enum Color
    // {
    //     RED,
    //     GREEN,
    //     BLUE
    // };
    // enum sign
    // {
    //     neg = -1,
    //     zero = 0,
    //     pos = 1
    // };

    // typedef enum
    // {
    //     a,
    //     b,
    //     c
    // } x;
    // x v1, v2;
    // v1 = a;
    // cout << v1;

    // struct point {
    //     int x;
    //     int y;
    // };

    // point p = {10, 10};


    // struct students{
    //     char name[20];
    //     int grades[2];
    // } s[2];

    // strcpy(s[0].name, "ali");
    // strcpy(s[1].name, "john");

    // struct Time {
    //     int h,m,s;
    // };
    // Time t1,t2;
    // t1.h=7;
    // t1.m=0;
    // t1.s=0;
    // Time *p; // pointer to struct
    // p = &t1;
    // cout<<p->h<<endl;
    // cout<<(*p).h;

    // struct s {
    //     double a;
    //     void f(int x) {a=x;}
    //     int  g(void) {int y; y=a*a; return (y);}
    // } m;
    // m.f(4);
    // cout<<m.g(); //16

    // struct a{
    //     long c;
    //     union d{
    //         int e;
    //         char f;
    //     } u;
    // }s;
    // s.c=100;
    // s.u.e=65;
    // cout<<s.u.f; // A


    // getchar();
}

int multiple(int x)
{
    return x * 2;
}

void swap(int &a, int &b)
{
    int temp;
    temp = a;
    a = b;
    b = temp;
}

int strlength(const char *s)
{
    int c = 0;
    for (; *s != '\0'; s++)
        c++;
    return c;
}

void strcopy(char *a, const char *b)
{
    for (; (*a = *b) != '\0'; a++, b++)
        ;
}

void strcopy2(char *a, const char *b)
{
    int i = 0;
    for (; (a[i] = b[i]) != '\0'; i++)
        ;
}

void strconcat(char *a, const char *b)
{
    while (*a != '\0')
        ++a;

    for (; *a = *b; a++, b++)
        ;
}
