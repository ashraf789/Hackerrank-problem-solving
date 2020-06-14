/**
 * @author: syed ashraf ullah
 * date: 14.06.2020
 * problem: https://www.hackerrank.com/challenges/weather-observation-station-13/problem
 */
 SELECT ROUND(SUM(LAT_N), 4) from STATION where LAT_N > 38.7880 and LAT_N < 137.2345;