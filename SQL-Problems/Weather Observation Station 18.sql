/**
 * @author: syed ashraf ullah
 * date: 14.06.2020
 * problem: https://www.hackerrank.com/challenges/weather-observation-station-18/problem
 */
 SELECT ROUND(( (MAX(LAT_N)-MIN(LAT_N)) + (MAX(LONG_W)-MIN(LONG_W)) ) ,4) FROM STATION;