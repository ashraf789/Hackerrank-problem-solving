/**
 * @author: syed ashraf ullah
 * date: 07/2019
 * problem: https://www.hackerrank.com/challenges/birthday-cake-candles/problem
 */
import Foundation

// Complete the birthdayCakeCandles function below.
func birthdayCakeCandles(ar: [Int]) -> Int {
    var maxHeight:Int = ar[0]
    var count:Int = 1

    for i in 1..<ar.count{
        if maxHeight < ar[i]{
            maxHeight = ar[i]
            count = 1
        }else if  maxHeight == ar[i]{
            count += 1
        }
    }
    return count
}
let stdout = ProcessInfo.processInfo.environment["OUTPUT_PATH"]!
FileManager.default.createFile(atPath: stdout, contents: nil, attributes: nil)
let fileHandle = FileHandle(forWritingAtPath: stdout)!

guard let arCount = Int((readLine()?.trimmingCharacters(in: .whitespacesAndNewlines))!)
else { fatalError("Bad input") }

guard let arTemp = readLine() else { fatalError("Bad input") }
let ar: [Int] = arTemp.split(separator: " ").map {
    if let arItem = Int($0.trimmingCharacters(in: .whitespacesAndNewlines)) {
        return arItem
    } else { fatalError("Bad input") }
}

guard ar.count == arCount else { fatalError("Bad input") }

let result = birthdayCakeCandles(ar: ar)

fileHandle.write(String(result).data(using: .utf8)!)
fileHandle.write("\n".data(using: .utf8)!)
