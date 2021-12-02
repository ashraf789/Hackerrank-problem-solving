/**
https://www.hackerrank.com/challenges/contest-leaderboard/problem
score: 30
*/

SELECT 
    t1.hacker_id, t1.name, SUM(t1.score) AS total_score
FROM
    (SELECT 
        t2.hacker_id, t2.name, MAX(t1.score) AS score
    FROM
        Submissions t1
    JOIN Hackers t2 ON t1.hacker_id = t2.hacker_id
    GROUP BY t2.hacker_id , t2.name , t1.challenge_id) AS t1
GROUP BY t1.hacker_id , t1.name
HAVING total_score > 0
ORDER BY total_score DESC , hacker_id ASC
