/*
    Type of Triangle
    Write a query identifying the type of each record in the TRIANGLES table using 
    its three side lengths. Output one of the following statements for each record in the table:

    Equilateral: It's a triangle with 

    sides of equal length.
    Isosceles: It's a triangle with
    sides of equal length.
    Scalene: It's a triangle with
    sides of differing lengths.
    Not A Triangle: The given values of A, B, and C don't form a triangle.
    

*/

/*
    Sample input: https://s3.amazonaws.com/hr-challenge-images/12887/1443815827-cbfc1ca12b-2.png
    Sample output: 
    Isosceles
    Equilateral
    Scalene
    Not A Triangle
*/

SELECT CASE WHEN A+B > C AND A+C > B AND B+C > A 
THEN 
    CASE 
        WHEN A=B AND B=C THEN 'Equilateral'
        WHEN A != B AND A != C AND B != C THEN 'Scalene' 
        WHEN A = B OR A = C THEN 'Isosceles'
    END
ELSE 'Not A Triangle' END 
FROM  TRIANGLES;