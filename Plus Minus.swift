/**
 * @author: syed ashraf ullah
 * date: 07/2019
 * problem: https://www.hackerrank.com/challenges/plus-minus/problem
 */
 import Foundation

// Complete the plusMinus function below.
func plusMinus(arr: [Int]) -> Void {
    /*
        Plus = counter[0] 
        Minus = counter[1] 
        Zero = counter[2] 
    */
    var counter:[Int] = [0,0,0]
    let size:Int = arr.count

    for i in 0..<size{
        if arr[i] > 0 {
            counter[0] += 1
        }else if arr[i] < 0 {
            counter[1] += 1
        }else{
            counter[2] += 1 
        }
    }

    for i in 0...2{
        print(String(format: "%.6f",Double(counter[i])/Double(size)))
    }
}

guard let n = Int((readLine()?.trimmingCharacters(in: .whitespacesAndNewlines))!)
else { fatalError("Bad input") }

guard let arrTemp = readLine() else { fatalError("Bad input") }
let arr: [Int] = arrTemp.split(separator: " ").map {
    if let arrItem = Int($0.trimmingCharacters(in: .whitespacesAndNewlines)) {
        return arrItem
    } else { fatalError("Bad input") }
}

guard arr.count == n else { fatalError("Bad input") }

plusMinus(arr: arr)
