/**
 * @author: syed ashraf ullah
 * date: 22.05.2020
 * problem: https://www.hackerrank.com/challenges/earnings-of-employees/problem
 */
SELECT months*salary as earnings, count(*) FROM Employee group by earnings order by earnings desc limit 1;