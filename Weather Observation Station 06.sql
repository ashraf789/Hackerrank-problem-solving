/*
	Weather Observation Station 6
	Query the list of CITY names starting with vowels (i.e., a, e, i, o, or u) from STATION. Your result cannot contain duplicates.
	
*/

/* solution one */

/*
select distinct city from station 
    where city LIKE 'a%'
    or city like 'e%'
    or city like 'i%'
    or city like 'o%'
    or city like 'u%';
    
*/

/* solution two */
/*
SELECT DISTINCT city FROM station
WHERE 
    LEFT(city,1) IN ('a','e','i','o','u');
*/

/* solution three */

SELECT DISTINCT city FROM station
WHERE 
    city REGEXP '^[aeiou]';
    
