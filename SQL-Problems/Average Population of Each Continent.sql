/**
 * @author: syed ashraf ullah
 * date: 14.06.2020
 * problem: https://www.hackerrank.com/challenges/average-population-of-each-continent/problem
 */
 SELECT COUNTRY.Continent, FLOOR(AVG(CITY.Population)) FROM CITY JOIN COUNTRY ON CITY.COUNTRYCODE = COUNTRY.CODE group by COUNTRY.Continent;