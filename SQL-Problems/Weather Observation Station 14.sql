/**
 * @author: syed ashraf ullah
 * date: 14.06.2020
 * problem: https://www.hackerrank.com/challenges/weather-observation-station-14/problem
 */
  SELECT ROUND(MAX(LAT_N), 4) from STATION where LAT_N < 137.2345;