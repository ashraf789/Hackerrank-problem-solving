/**
 * @author: syed ashraf ullah
 * date: 14.06.2020
 * problem: https://www.hackerrank.com/challenges/african-cities/problem
 */
SELECT CITY.name FROM CITY LEFT JOIN COUNTRY ON CITY.COUNTRYCODE = COUNTRY.CODE WHERE CONTINENT = 'Africa';