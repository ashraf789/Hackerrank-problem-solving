/**
 * @author: syed ashraf ullah
 * date: 14.06.2020
 * problem: https://www.hackerrank.com/challenges/asian-population/problem
 */
SELECT SUM(CITY.population) FROM CITY LEFT JOIN COUNTRY ON CITY.COUNTRYCODE = COUNTRY.CODE WHERE CONTINENT = 'ASIA';