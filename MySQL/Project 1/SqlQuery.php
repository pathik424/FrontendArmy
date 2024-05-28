<?php 

/* 

1. Select query :

     SELECT * FROM teacher; 
     SELECT tname,temail FROM teacher;
    
2. DISTINCT query :

     SELECT DISTINCT taddress FROM teacher;        // DISTINCT Means Duplicate entry e table ni show nai kare
     SELECT COUNT(DISTINCT taddress) FROM teacher; // same entry je hase ema ena count apse

3. Where with column name :     
     SELECT * FROM teacher WHERE id = 1                 // id thi filter karyu
     SELECT * FROM `teacher` WHERE taddress = "Pakwan"; // adrress thi filter karyu

4. Where with and/or/not :    
    
     AND = SELECT * FROM `teacher` WHERE taddress = "Pakwan" AND tname = "vikesh"; // and condition thi filter apyu banne condtion same entry ma link thati hase to data filter thase 
     OR  = SELECT * FROM `teacher` WHERE taddress = "Pakwan" OR tname = "vikesh";  // or thi game te 2 condition fullfill thavi jaoi e
     NOT = SELECT * FROM `teacher` WHERE NOT taddress = "Pakwan";                  // NOT means ke pakwan address sivay na badha batavse
    
     Combining AND, OR and NOT
     AND/OR  =  SELECT * FROM teacher WHERE taddress = 'Ghatlodia' AND (tname = 'hina' OR tname = 'chirag');
     NOT/NOT =  SELECT * FROM teacher WHERE NOT tname = 'hema' AND NOT taddress = 'Ghatloadia';               // hema ane ghatlodia sivay na batavse

5. ORDER BY query :

     SELECT * FROM teacher ORDER BY tid;
     SELECT * FROM teacher ORDER BY tid DESC;
     SELECT * FROM teacher ORDER BY tid ASC;
     SELECT * FROM teacher ORDER BY taddress,tmobile;            // both column ne order by id lagse but je first hase ena ma apply thase order
     SELECT * FROM teacher ORDER BY tmobile ASC, taddress DESC; // both column ne order by id lagse but je first hase ena ma apply thase order

6. INSERT INTO Query :

     INSERT INTO teacher (tname,temail,tmobile,taddress) VALUES ('vidhi','vidhi424@gmail.com',9998113003,'kanij')

7. Test for NULL :
    
     SELECT * FROM teacher WHERE taddress IS NUL;
     SELECT taddress,tname,temail FROM teacher WHERE taddress IS NULL;       // null value hase enu filter thase
     SELECT taddress,tname,temail FROM teacher WHERE taddress IS  NOT NULL; // null value jema nai hoy e batavse

8. Update Query :

     UPDATE teacher SET tname = "virat" WHERE tid = 1;                                                                            // id thi update
     UPDATE teacher SET tname = "MSDHONI", temail = "mahi07@gmail.com", tmobile = 9999999999, taddress = "ranchi" WHERE tid = 1; // id thi multiple column update
     UPDATE teacher SET tname = "MahendraSingh Dhoni" WHERE taddress = "ranchi";                                                 // address column thi update karyu

9. Delete Query : 

     DELETE FROM teacher WHERE tname = "vidhi" // ama table ma je data ma tname = "vidhi" e row delete thase
     DELETE FROM teacher                      // ama akhu table delete thase

10. SET LIMIT Query:

     SELECT * FROM teacher WHERE taddress = "Pakwan" LIMIT 3; // 3 j row show thase
     SELECT * FROM teacher LIMIT 3 OFFSET 3;                 // offset limit 3 row show thase but offset thi 4th number ni id thi  bakino data show thase

11. MIN/MAX/COUNT/AVG/SUM : 


     Minimum Value(MIN)       = SELECT MIN(tid) AS SmallestID FROM teacher; // tid = column name che SmallestID Temporary result ave enu name
     Maxmimum Value(MAX)      = SELECT MAX(tid) AS LaregestID FROM teacher; // tid = column name che SmallestID Temporary result ave enu name
     Counting Raws (COUNT)    = SELECT COUNT(tid)FROM teacher;              // Ketli row add che database ma counting karva thay data
     Avg Total Numbers (AVG)  = SELECT AVG(tid) FROM teacher;               // avg nikadse
     Total Numbers (SUM)      = SELECT SUM(tid) FROM teacher;               // avg nikadse

12. LIKE Query :
      
      SELECT * FROM teacher WHERE tname LIKE 'v%';      // Finds any values that start with "v"
      SELECT * FROM teacher WHERE tname LIKE 'a%';      // Finds any values that end with "a"
      SELECT * FROM teacher WHERE tname LIKE '%vi%';    // Finds any values that have "vi" in any position
      SELECT * FROM teacher WHERE tname LIKE '_i%';     // customers with a CustomerName that have "i" in the second position
      SELECT * FROM teacher WHERE tname LIKE 'v__%';    // CustomerName that starts with "v" and are at least 3 characters in length
      SELECT * FROM teacher WHERE tname LIKE 'v%h';     // selects all customers with a ContactName that starts with "v" and ends with "h"
      SELECT * FROM teacher WHERE tname NOT LIKE 'a%';  // selects all customers with a CustomerName that does NOT start with "a"
      SELECT * FROM teacher WHERE tname LIKE 'v_k_s_';  //  selects all customers with a City starting with "L", followed by any character, followed by "n", followed by any character, followed by "on"

13. IN Query :

     SELECT * FROM teacher WHERE taddress IN ('Ghatlodia','Pakwan');  // selects all customers that are located in "Germany", "France" or "UK":
     SELECT * FROM teacher WHERE taddress NOT IN ('Ghatlodia','Pakwan');  // selects all customers that are NOT located in "Germany", "France" or "UK":

14. Between :

    SELECT * FROM teacher WHERE tid BETWEEN 2 AND 4   
    SELECT * FROM teacher WHERE tid NOT BETWEEN 2 AND 4
    SELECT * FROM teacher WHERE tsalary BETWEEN 25000 AND 70000 AND tid NOT IN (3); // between tid not in
    
15. MySQL Alises :

     SELECT tname AS teacher_name FROM teacher;  // Aliases are used to give a table, or a column in a table, a temporary name.Aliases are often used to make column names more readable.An alias only exists for the duration of that query.An alias is created with the AS keyword.
     
     
16. Join Table :

     SELECT student.sid, teacher.tname, student.semail FROM student INNER JOIN teacher ON student.sid=teacher.tid;

     ***  Inner Join :(Je similar Data Hase e Batavse)

     SELECT post.title,post.description,post.category,post_date,post.author,category.category_name FROM post INNER JOIN category ON post.post_id = category.category_id
     
     SELECT post.post_id,category.category_name FROM post INNER JOIN category ON post.category = category.category_id; 
     
     *** left Join : (banne match karse but left means post na badho data avse)
     
     SELECT post.title,post.description,post.category,post_date,post.author,category.category_name FROM post LEFT JOIN category ON post.post_id = category.category_id
     
     SELECT post.post_id,category.category_name FROM category LEFT JOIN post ON post.category = category.category_id; 
     
     *** Right Join : (banne match karse but Right means category na badho data avse)
     
     SELECT post.post_id,category.category_name FROM category RIGHT JOIN post ON post.category = category.category_id; 
     
     *** Cross Join : (First Table no data match karse all time)

     SELECT * FROM post CROSS JOIN category


17. Group BY : (Counting Karse Ketli Post Che specified Category ni)

     SELECT category.category_name,COUNT(category) FROM post INNER JOIN category ON post.category = category.category_id GROUP BY category;
     
 
     
18. HAVING : (Counting > 3 table hase to show thase)

     SELECT category.category_name,COUNT(category) FROM post INNER JOIN category ON post.category = category.category_id GROUP BY category HAVING COUNT(post.category) > 2;

19. Exist (E check Karse ke ena related ketli post che )

     SELECT category_name FROM category WHERE EXISTS (SELECT post_id FROM post WHERE category_name IN ('Bollywood') );

20. Case :

                 SELECT category_id, post,
            CASE
                 WHEN post > 0 THEN 'The quantity is greater than 3'
                 WHEN post = 3 THEN 'The quantity is 3'
                 ELSE 'The quantity is under 30'
           END AS QuantityText
           FROM category;


21. Primary Key / Foreign Key :

1st Table /// Primary + Foreign Key:::

CREATE TABLE students
( id INT NOT NULL UNIQUE AUTO_INCREMENT,
name VARCHAR(100) not null,
email VARCHAR(100) not null,
city_id  int null,
PRIMARY KEY(id), 
Foreign KEY (city_id) REFERENCES city(cid))

2nd Table /// Primary Key

               CREATE TABLE city
               ( cid INT PRIMARY KEY AUTO_INCREMENT,
               city_name VARCHAR(50) not null 
               )
               
               
                LEFT JOIN For Testing :

                SELECT students.name,students.email,city.city_name FROM students LEFT JOIN city ON students.id = city.cid
 
   
 22. Check Option (single Column ma koi condition check karvase jo sachi hase to j value e column ma add thase) :
      
       Create Table test(
         TID INT PRIMARY KEY AUTO_INCREMENT,
         NAME VARCHAR(50),
         AGE VARCHAR(50) CHECK(AGE > 18)        
         )

 23. Default Option (A single colum ma value set karse Default By automatic jyare add karisu tyare e j value avse)
 
        Create Table test1(
         TID INT PRIMARY KEY AUTO_INCREMENT,
         NAME VARCHAR(50),
         AGE VARCHAR(50) DEFAULT 18        
         )  

24. String Functions :

      1. UPPER/UCASE (Badha Word Capital Thai Jase)
          
           SELECT id,UPPER(name) AS NAME ,email FROM students 
           SELECT id,UCASE(name) AS NAME ,email FROM students 
           
      2. Character Lengh (Characters ma ketla word che e count karse)       
           
           SELECT id,name,CHARACTER_LENGTH(name) AS Characters FROM students 
           SELECT id,name,LENGTH(name) AS Characters FROM students 

      3. CONCAT (Concat Be Column ne ek j column ma show karse)
      
           SELECT id, CONCAT(name,"-", email) AS NAME FROM students
           SELECT CONCAT("Pathik","Nil","Nirav","Yash") AS NAME; // badha j string a colum ane 1 row ma j ai jase
           SELECT CONCAT_WS(" - ","Pathik","Nil","Nirav","Yash") AS NAME; // badha ni vachche - Avi Jase
           SELECT LTRIM(" Pathik   ")AS NAME;
           SELECT RTRIM(" Pathik   ")AS NAME;
           SELECT POSITION("a" IN "Pathik")AS NAME; answer 2 bcause a pathik ma 2nd ave che
           SELECT INSTR("Yahoo Baba Baba", "Baba")AS NAME; answer 7 bcause a Baba ma 2nd ave che
           SELECT LOCATE("B","Yahoo Baba Baba")AS NAME; answer 7 bcause a Baba ma 2nd ave che

 
   
                
                
   
   
   
   
    SELECT * FROM Customers WHERE Country='Mexico'; //  Where Condition
    SELECT * FROM Products ORDER BY Price; // Order by
    SELECT * FROM Customers WHERE Country = 'Spain' AND CustomerName LIKE 'G%'; // First Letter 
    SELECT * FROM Customers WHERE Country = 'Spain' AND CustomerName LIKE '%G'; // Last Letter
    SELECT * FROM Customers WHERE Country = 'Germany' OR Country = 'Spain'; // or Condition
    SELECT * FROM Customers WHERE NOT Country = 'Spain'; // Not Conidtion
    SELECT CustomerName, ContactName, Address FROM Customers WHERE Address IS NULL; // Null Value
    SELECT * FROM Customers ORDER BY CustomerName DESC FETCH FIRST 3 ROWS ONLY; // top 3 rows malse
    SELECT * FROM post WHERE category = "Sports" LIMIT 2 /// Limit Set

2. INSERT query :

   ----Single Value Add:
   INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country)
   VALUES ('Cardinal', 'Tom B. Erichsen', 'Skagen 21', 'Stavanger', '4006', 'Norway');

   ----Multiple Value Add:
   INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country)
   VALUES
   ('Cardinal', 'Tom B. Erichsen', 'Skagen 21', 'Stavanger', '4006', 'Norway'),
   ('Greasy Burger', 'Per Olsen', 'Gateveien 15', 'Sandnes', '4306', 'Norway'),
   ('Tasty Tee', 'Finn Egan', 'Streetroad 19B', 'Liverpool', 'L1 0AA', 'UK');

3. Update Query :

    UPDATE Customers SET ContactName = 'Alfred Schmidt', City= 'Frankfurt' WHERE CustomerID = 1;

4. Delete Query :

    DELETE FROM Customers WHERE CustomerName='Alfreds Futterkiste';

     INSERT INTO student (sname,semail,smobile,saddress)
   VALUES
   ('pathik', 'pathik424@gmail.com', '9999999999', 'Navavadaj'),
    ('nirav', 'nirav424@gmail.com', '8999999999', 'Navavadaj'),
     ('yash', 'yash424@gmail.com', '7999999999', 'Pakwan'),
      ('nil', 'nil424@gmail.com', '6999999999', 'Pakwan'),
       ('jp', 'jp424@gmail.com', '5999999999', 'Ghatlodia')



)


    

*/


 ?>


