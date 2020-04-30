import java.io.*;
import java.util.*;
import java.text.*;
import java.math.*;
import java.util.regex.*;
/**
 * @author: syed ashraf ullah
 * date: 30/04/2020
 * problem: https://www.hackerrank.com/challenges/smart-number/problem
 */
public class Solution {
    public static boolean isSmartNumber(int num) {
        int val = (int) Math.sqrt(num);    
        if(val * val == num)
            return true;
        return false;
    }
    
    public static void main(String[] args) {
        int test_cases;
        Scanner in = new Scanner(System.in);
        test_cases = in.nextInt();
        int num;
        for(int i = 0; i < test_cases; i++){
            num = in.nextInt();
            boolean ans = isSmartNumber(num);
            if(ans){
                System.out.println("YES");
            }
            else System.out.println("NO");
        }
    }
}



