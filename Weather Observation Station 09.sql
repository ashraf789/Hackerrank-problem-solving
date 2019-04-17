/*
    Weather Observation Station 9
    Query the list of CITY names from STATION that do not start with vowels. 
    Your result cannot contain duplicates.
*/

/* solution one */

/*
SELECT DISTINCT city FROM station 
WHERE 
    left(city,1) NOT IN ('a','e','i','o','u');
*/

/* solution two */
SELECT DISTINCT city FROM station
WHERE 
    city REGEXP '^[^aeiou]';