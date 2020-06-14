/**
 * @author: syed ashraf ullah
 * date: 14.06.2020
 * problem: https://www.hackerrank.com/challenges/the-report/problem
 */
SELECT IF(grade < 8, null, name), GRADE, MARKS FROM STUDENTS, GRADES WHERE marks between min_mark and max_mark order by grade desc, name asc;