/**
 * @author: syed ashraf ullah
 * date: 14.06.2020
 * problem: https://www.hackerrank.com/challenges/weather-observation-station-17/problem
 */
  SELECT ROUND(LONG_W, 4) from STATION where LAT_N > 38.7780 order by LAT_N ASC limit 1;