/**
 * @author: syed ashraf ullah
 * date: 20.05.2020
 * problem: https://www.hackerrank.com/challenges/placements/problem
 */
SELECT 
    students.name
FROM
    students
        LEFT JOIN
    friends ON students.id = friends.id
WHERE
    (SELECT 
            salary
        FROM
            packages
        WHERE
            id = friends.id) < (SELECT 
            salary
        FROM
            packages
        WHERE
            id = friends.friend_id)
ORDER BY (SELECT 
        salary
    FROM
        packages
    WHERE
        id = friends.friend_id) ASC;