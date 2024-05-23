<?php 

/* 

1. Select query :

    SELECT * FROM Customers; 
    SELECT CustomerName, City FROM Customers; 
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


    

*/
 ?>
