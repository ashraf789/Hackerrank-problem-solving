/**
 * @author: syed ashraf ullah
 * date: 14.06.2020
 * problem: https://www.hackerrank.com/challenges/the-blunder/problem
 */
 select CEILING((avg(salary) - avg(replace(salary, '0','')))) from EMPLOYEES;