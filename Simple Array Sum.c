/**
 * @author: syed ashraf ullah
 * year: 2015
 * problem: https://www.hackerrank.com/challenges/simple-array-sum/submissions/code/14709608
 */
#include <cmath>
#include <cstdio>
#include <vector>
#include <iostream>
#include <algorithm>
using namespace std;

int main() {
    /* Enter your code here. Read input from STDIN. Print output to STDOUT */
    int t,sum=0,num;
    cin>>t;
    for(int i = 0; i < t; i++){
        cin>>num;
        sum+=num;
    }
    cout<<sum;
    return 0;
}
