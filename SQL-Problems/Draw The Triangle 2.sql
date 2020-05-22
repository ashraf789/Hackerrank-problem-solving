-- The repeat(str, count) function will repeat a string up to the count value
-- for example repeat('*', 4) -> this will print ****
-- The information_schema.tables has 50+ tables that means we can print 50+ line
-- Each line we will repeat a string up to the @n value and before start we will re assign the @n variable by @n+1 
 

SET @n := 0;
SELECT repeat('* ', @n := @n+1) FROM information_schema.tables limit 20;