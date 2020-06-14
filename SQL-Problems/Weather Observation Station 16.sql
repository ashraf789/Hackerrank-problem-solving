/**
 * @author: syed ashraf ullah
 * date: 14.06.2020
 * problem: https://www.hackerrank.com/challenges/weather-observation-station-16/problem
 */
 SELECT ROUND(MIN(LAT_N), 4) from STATION where LAT_N > 38.7780;