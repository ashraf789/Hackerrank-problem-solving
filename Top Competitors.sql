/**
Problem: https://www.hackerrank.com/challenges/full-score/problem
score: 30
*/


/* Solution 01 */
SELECT 
    t1.hacker_id, t2.name
FROM
    (SELECT 
        t1.hacker_id, COUNT(t1.challenge_id) AS total_full_score
    FROM
        submissions t1
    JOIN (SELECT 
        t1.*, t2.score AS diff_score
    FROM
        challenges t1
    JOIN difficulty t2 ON t1.difficulty_level = t2.difficulty_level) AS t2 ON t1.challenge_id = t2.challenge_id
    WHERE
        t1.score = t2.diff_score
    GROUP BY t1.hacker_id
    HAVING total_full_score > 1) AS t1
        JOIN
    Hackers t2 ON t1.hacker_id = t2.hacker_id
ORDER BY t1.total_full_score DESC , t1.hacker_id ASC;


/* Solution 02 */
SELECT 
    t4.hacker_id, t4.name
FROM
    submissions t1
        JOIN
    challenges t2 ON t1.challenge_id = t2.challenge_id
        JOIN
    difficulty t3 ON t2.difficulty_level = t3.difficulty_level
        JOIN
    hackers t4 ON t1.hacker_id = t4.hacker_id
WHERE
    t1.score = t3.score
GROUP BY t4.hacker_id , t4.name
HAVING COUNT(t1.hacker_id) > 1
ORDER BY COUNT(t1.hacker_id) DESC , t1.hacker_id ASC
