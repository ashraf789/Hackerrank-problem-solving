/*
    Weather Observation Station 11
    Query the list of CITY names from STATION that either do not start with vowels or do not end with vowels. Your result cannot contain duplicates.
*/

/* solution one */

/*
SELECT DISTINCT city FROM station
WHERE 
    LEFT(city, 1) NOT IN ('a','e','i','o','u') OR
    RIGHT(city, 1) NOT IN ('a','e','i','o','u');
        city REGEXP "^[^aeiou].*[^aeiou]$" OR

*/

/* solution two */

SELECT DISTINCT city FROM station
WHERE 
    city REGEXP "^[^aeiou]" OR
    city REGEXP "[^aeiou]$";
