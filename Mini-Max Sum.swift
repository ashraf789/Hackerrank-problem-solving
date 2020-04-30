/**
 * @author: syed ashraf ullah
 * date: 07/2019
 * problem: https://www.hackerrank.com/challenges/mini-max-sum/problem
 */
 import Foundation

// Complete the miniMaxSum function below.
func miniMaxSum(arr: [Int]) -> Void {
    var min:Int = arr[0]
    var max:Int = arr[0]

    var maxPosition = 0
    var minPosition = 0

    for i in 1..<arr.count{
        
        if min > arr[i] {
            min = arr[i]
            minPosition = i
        }
        if max < arr[i] {
            max = arr[i]
            maxPosition = i
        }
    }

    var maxSum = 0
    var minSum = 0
    for i in 0..<arr.count{
        
        if i != minPosition  {
            minSum += arr[i] 
        }

        if i != maxPosition  {
            maxSum += arr[i] 
        }
    }

    print("\(maxSum) \(minSum)")
}

guard let arrTemp = readLine() else { fatalError("Bad input") }
let arr: [Int] = arrTemp.split(separator: " ").map {
    if let arrItem = Int($0.trimmingCharacters(in: .whitespacesAndNewlines)) {
        return arrItem
    } else { fatalError("Bad input") }
}

guard arr.count == 5 else { fatalError("Bad input") }

miniMaxSum(arr: arr)
