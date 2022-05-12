 //practical explanation of variable scope
 #include<iostream>
 using namespace std;
 int glo=5;
 void sum()
 {
     int a ;
     cout<<glo;
 }
 int main()
{
    int glo =9;
    glo=78;
    int a=14,b=123;
    cout<<glo;
    return 0;
}