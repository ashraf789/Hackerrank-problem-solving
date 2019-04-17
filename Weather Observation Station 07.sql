/*
	Weather Observation Station 7
	Query the list of CITY names ending with vowels (a, e, i, o, u) from STATION. Your result cannot contain duplicates.
	
*/


/* solution one */
/*
SELECT DISTINCT city FROM station
    WHERE city LIKE '%a'
    OR city LIKE '%e'
    OR city LIKE '%i'
    OR city LIKE '%o'
    OR city LIKE '%u';
*/


/* solution two */
/*
SELECT DISTINCT city FROM station
WHERE 
    RIGHT(city,1) IN ('a','e','i','o','u');
*/

/* solution three */

SELECT DISTINCT city FROM station
WHERE 
    city REGEXP '[aeiou]$';
