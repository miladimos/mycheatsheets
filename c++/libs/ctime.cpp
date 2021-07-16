#include <iostream>
#include <ctime>

using namespace std;

int main()
{

    time_t now = time(0);
    cout << now<<endl; // 1626223009
    char* dt = ctime(&now); 
    cout << dt; // Wed Jul 14 05:06:49 2021

    tm *ltm = localtime(&now);
    cout << "Year "<< ltm->tm_mday;

}