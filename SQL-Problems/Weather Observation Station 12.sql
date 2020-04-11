/*
	Weather Observation Station 12
	Query the list of CITY names from STATION that do not start with vowels and do not end with vowels. Your result cannot contain duplicates.
	
*/

/* solutio none */

/*
SELECT DISTINCT city FROM station
WHERE 
    left(city,1) NOT IN ('a','e','i','o','u')
AND 
    right(city,1) NOT IN ('a','e','i','o','u');
*/


/* solution two */
SELECT DISTINCT city FROM station
WHERE 
    city REGEXP "^[^aeiou]" and
    city REGEXP "[^aeiou]$";
