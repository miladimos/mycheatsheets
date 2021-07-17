#include <iostream>

using namespace std;

class SampleClass {
    private: 
        int x;
    public:
        SampleClass() {
            cout<< "constructor";
        }

        SampleClass(int a) {
            x = a;
        }
        ~SampleClass() {
            cout<< "destructor";
        }

        int f() {
            x=2;
            cout<<x;
        }

        void f2();
    protected:
};   

void SampleClass::f2(){
    cout<< "f2";
}

int main()
{
    SampleClass sc;
    sc.f();
    return 0;
}