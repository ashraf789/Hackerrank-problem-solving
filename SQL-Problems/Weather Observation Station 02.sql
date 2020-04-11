/*
Weather Observation Station 2
Query the following two values from the STATION table:

The sum of all values in LAT_N rounded to a scale of decimal places.
The sum of all values in LONG_W rounded to a scale of decimal places.
*/


SELECT ROUND(SUM(lat_n),2), ROUND(SUM(long_w),2) FROM station;