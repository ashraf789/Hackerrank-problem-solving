/**
 * @author: syed ashraf ullah
 * date: 07/2019
 * problem: https://www.hackerrank.com/challenges/staircase/problem
 */
import Foundation

func staircase(n: Int) -> Void {
    for i in 0..<n{
        
        let space = n-i-1
        for _ in 0..<space{
            print("", terminator: " ")
        }
        for _ in space..<(n){
            print("", terminator: "#")
        }    
        print()
    }
}

guard let n = Int((readLine()?.trimmingCharacters(in: .whitespacesAndNewlines))!)
else { fatalError("Bad input") }

staircase(n: n)
