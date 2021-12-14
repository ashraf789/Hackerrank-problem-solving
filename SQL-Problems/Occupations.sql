/**
 * @author: syed ashraf ullah
 * date: 14.10.2021
 * problem: https://www.hackerrank.com/challenges/occupations/problem
 */

select 
max(case when occupation = 'Doctor' then name end) doctor,
max(case when occupation = 'Professor' then name end) professor,
max(case when occupation = 'Singer' then name end) singer,
max(case when occupation = 'Actor' then name end) actor

from (select *, row_number() over(partition by occupation order by name) rowNo from OCCUPATIONS ) t1
group by t1.rowNo
