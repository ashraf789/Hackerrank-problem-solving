import Foundation
/**
 * @author: syed ashraf ullah
 * date: 20/07/2019
 * problem: https://www.hackerrank.com/challenges/compare-the-triplets/submissions/code/117839918
 */

// Complete the compareTriplets function below.
func compareTriplets( a: [Int], b: [Int]) -> [Int] {

    var result:[Int] = [0,0]

    for i in 0..<a.count{
        if a[i] > b[i]{
            result[0] += 1
        }else if a[i] < b[i]{
            result[1] += 1
        }
    }
    return result
}

let stdout = ProcessInfo.processInfo.environment["OUTPUT_PATH"]!
FileManager.default.createFile(atPath: stdout, contents: nil, attributes: nil)
let fileHandle = FileHandle(forWritingAtPath: stdout)!

guard let aTemp = readLine()?.replacingOccurrences(of: "\\s+$", with: "", options: .regularExpression) else { fatalError("Bad input") }
let a: [Int] = aTemp.split(separator: " ").map {
    if let aItem = Int($0) {
        return aItem
    } else { fatalError("Bad input") }
}

guard a.count == 3 else { fatalError("Bad input") }

guard let bTemp = readLine()?.replacingOccurrences(of: "\\s+$", with: "", options: .regularExpression) else { fatalError("Bad input") }
let b: [Int] = bTemp.split(separator: " ").map {
    if let bItem = Int($0) {
        return bItem
    } else { fatalError("Bad input") }
}

guard b.count == 3 else { fatalError("Bad input") }

let result = compareTriplets(a: a, b: b)

fileHandle.write(result.map{ String($0) }.joined(separator: " ").data(using: .utf8)!)
fileHandle.write("\n".data(using: .utf8)!)
