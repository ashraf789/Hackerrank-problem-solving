/**
 * @author: syed ashraf ullah
 * year: 2015
 * problem: https://www.hackerrank.com/challenges/a-very-big-sum/submissions/code/14709690
 */
#include <cmath>
#include <cstdio>
#include <vector>
#include <iostream>
#include <algorithm>
using namespace std;


int main() {
    /* Enter your code here. Read input from STDIN. Print output to STDOUT */  
    long long int sum=0,num;
    int t;
    cin>>t;
    for(int i = 0; i < t; i++){
        
        cin>>num;
        sum+=num;
    }
    cout<<sum;
    return 0;
}
