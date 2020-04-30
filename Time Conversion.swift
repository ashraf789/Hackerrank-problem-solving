/**
 * @author: syed ashraf ullah
 * date: 07/2019
 * problem: https://www.hackerrank.com/challenges/time-conversion/problem
 */
import Foundation

func timeConversion(s: String) -> String {
      let subString = s.components(separatedBy: ":")

      var hour:Int! = Int(subString[0])
      let mint:Int! = Int(subString[1])
    var second:Int! = 0

    let last = subString[2]
    var type:String = ""


    if last.hasSuffix("PM") {
      type = "PM"
    }else{
      type = "AM"
    }

    second = Int(last.components(separatedBy: type)[0])

    if type == "PM" && hour < 12{
      hour = hour + 12
    }else if type == "AM" && hour == 12 {
      // when mid night AM example 12am means 00
      hour = 0
    }

      return (String(format: "%02d", hour) + String(format: ":%02d", mint) + String(format: ":%02d", second))  
}


let fileName = ProcessInfo.processInfo.environment["OUTPUT_PATH"]!
FileManager.default.createFile(atPath: fileName, contents: nil, attributes: nil)
let fileHandle = FileHandle(forWritingAtPath: fileName)!

guard let s = readLine() else { fatalError("Bad input") }

let result = timeConversion(s: s)

fileHandle.write(result.data(using: .utf8)!)
fileHandle.write("\n".data(using: .utf8)!)
