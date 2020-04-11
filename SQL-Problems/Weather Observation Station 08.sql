/*
    Weather Observation Station 8
    Query the list of CITY names from STATION which have vowels (i.e., a, e, i, o, and u) 
    as both their first and last characters. Your result cannot contain duplicates.
*/


/* solution one */
/*
SELECT DISTINCT city FROM station 
WHERE 
    LEFT(city, 1) IN ('a','e','i','o','u')
AND 
    RIGHT(city, 1) IN ('a','e','i','o','u');
    
*/

/* solution two */
/*
SELECT DISTINCT city FROM station
WHERE 
    RIGHT(city,1) IN ('a','e','i','o','u')
AND 
    LEFT(city,1) IN ('a','e','i','o','u')
;
*/

/* solution three */

SELECT DISTINCT city FROM station
WHERE 
    city REGEXP '^[aeiou]'  
AND
    city REGEXP '[aeiou]$' ;
