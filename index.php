<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <div class="sql_exampls">

      <h4>Exm-01. The MySQL SELECT Statement</h4>
      <p>SELECT * FROM table_name;</p>

      <h4>Exm-02. The following SQL statement selects the "CustomerName", "City", and "Country" columns from the "Customers" table</h4>
      <p>SELECT CustomerName, City, Country FROM Customers;</p>

      <h4>Exm-03. WHERE Syntax</h4>
      <p>SELECT column1, column2, ...<br>
        FROM table_name<br>
        WHERE condition;</p>

      <h4>Exm-04. The MySQL AND Syntax</h4>
      <p>SELECT column1, column2, ...<br>
        FROM table_name<br>
        WHERE condition1 AND condition2 AND condition3 ...;</p>

      <h4>Exm-05. The MySQL OR Syntax</h4>
      <p>SELECT column1, column2, ...<br>
        FROM table_name<br>
        WHERE condition1 OR condition2 OR condition3 ...;</p>

      <h4>Exm-06. The MySQL NOT Syntax</h4>
      <p>SELECT column1, column2, ...<br>
        FROM table_name<br>
        WHERE NOT condition;</p>

      <h4>Exm-07. AND Example</h4>
      <p>SELECT * FROM Customers<br>
        WHERE Country = 'Germany' AND City = 'Berlin';</p>

      <h4>Exm-08. OR Example</h4>
      <p>SELECT * FROM Customers<br>
        WHERE City = 'Berlin' OR City = 'Stuttgart';</p>

      <h4>Exm-09. NOT Example</h4>
      <p>SELECT * FROM Customers<br>
        WHERE NOT Country = 'Germany';</p>

      <h4>Exp-10. The MySQL ORDER BY Syntax</h4>
      <p>SELECT column1, column2, ...<br>
        FROM table_name<br>
        ORDER BY column1, column2, ... ASC|DESC;</p>

      <h4>Exp-11. ORDER BY Example</h4>
      <p>SELECT * FROM Customers<br>
        ORDER BY Country;</p>

      <h4>Exp-12. ORDER BY DESC Example</h4>
      <p>SELECT * FROM Customers<br>
        ORDER BY Country DESC;</p>

      <h4>Exp-13. ORDER BY Several Columns</h4>
      <P>SELECT * FROM Customers<br>
      ORDER BY Country ASC, CustomerName DESC;</P> 

      <h4>Exm-14. INSERT INTO</h4>
      <p>INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country)<br>
        VALUES ('Cardinal', 'Tom B. Erichsen', 'Skagen 21', 'Stavanger', '4006', 'Norway');</p>

      <h4>Exm-15. IS NULL Syntax</h4>
      <p>SELECT column_names<br>
        FROM table_name<br>
        WHERE column_name IS NULL;</p>

      <h4>Exm-16. IS NOT NULL Syntax</h4>
      <p>SELECT column_names<br>
        FROM table_name<br>
        WHERE column_name IS NOT NULL;</p>

      <h4>Exm-17. UPDATE Syntax</h4>
      <p>UPDATE table_name<br>
        SET column1 = value1, column2 = value2, ...<br>
        WHERE condition;</p>

      <h4>Exm-18. UPDATE Table</h4>
      <p>UPDATE Customers<br>
        SET ContactName = 'Alfred Schmidt', City = 'Frankfurt'<br>
        WHERE CustomerID = 1;</p>

      <h4>Exm-19. UPDATE Multiple Records</h4>
      <p>UPDATE Customers<br>
        SET PostalCode = 00000<br>
        WHERE Country = 'Mexico';</p>

      <h4>Exm-20. DELETE Syntax</h4>
      <p>DELETE FROM table_name WHERE condition;</p> 

      <h4>Exm-21. DELETE Syntax</h4>
      <p>DELETE FROM Customers WHERE CustomerName='Alfreds Futterkiste';</p>

      <h4>Exm-22. Delete All Records</h4>
      <p>DELETE FROM table_name;</p>

      <h4>Exm-23. The MySQL LIMIT Clause</h4>
      <p>SELECT column_name(s)<br>
        FROM table_name<br>
        WHERE condition<br>
        LIMIT number;</p>

      <h4>Exm-24. MySQL LIMIT</h4>
      <p>SELECT * FROM Customers<br>
        LIMIT 3;</p>

      <h4>Exm-25. ADD a WHERE CLAUSE</h4>
      <p>SELECT * FROM Customers<br>
        WHERE Country='Germany'<br>
        LIMIT 3;</p>

      <h4>Exm-26. MIN() Syntax</h4>
      <p>SELECT MIN(column_name)<br>
        FROM table_name<br>
        WHERE condition;</p>

      <h4>Exm-27.MIN()</h4>
      <p>SELECT MIN(Price) AS SmallestPrice<br>
        FROM Products;</p>

      <h4>Exm-28. MAX() Syntax</h4>
      <p>SELECT MAX(column_name)<br>
        FROM table_name<br>
        WHERE condition;</p>

      <h4>Exm-29.MAX()</h4>
      <p>SELECT MAX(Price) AS SmallestPrice<br>
        FROM Products;</p>

      <h4>Exm-30. MySQL COUNT() Syntax</h4>
      <p>SELECT COUNT(column_name)<br>
        FROM table_name<br>
        WHERE condition;</p>

      <h4>Exm-31. COUNT() </h4>
      <p>SELECT COUNT(ProductID)<br>
        FROM Products;</p>

      <h4>Exm-32. MySQL AVG() Syntax</h4>
      <p>SELECT AVG(column_name)<br>
        FROM table_name<br>
        WHERE condition;</p>

      <h4>Exm-33. AVG() </h4>
      <p>SELECT AVG(Price)<br>
        FROM Products;</p>

      <h4>Exm-34. MySQL SUM() Syntax</h4>
      <p>SELECT SUM(column_name)<br>
        FROM table_name<br>
        WHERE condition;</p>

      <h4>Exm-35. SUM() </h4>
      <p>SELECT SUM(Quantity)<br>
        FROM OrderDetails;</p>

      <h4>Exm-36. The MySQL LIKE Syntax </h4>
      <p>SELECT column1, column2, ...<br>
        FROM table_name<br>
        WHERE columnN LIKE pattern;</p>

      <h4>Exm-37. SQL LIKE </h4>
      <p>SELECT * FROM Customers<br>
        WHERE CustomerName LIKE 'a%';</p>

      <h4>Exm-38. SQL LIKE </h4>
      <p>SELECT * FROM Customers<br>
        WHERE CustomerName LIKE '%or%';</p>

      <h4>Exm-39. Using the % Wildcard</h4>
       <p>SELECT * FROM Customers<br>
        WHERE City LIKE 'ber%';</p> 

      <h4>Exm-40. Using the _ Wildcard</h4>
      <p>SELECT * FROM Customers<br>
         WHERE City LIKE 'L_n_on';</p>

      <h4>Exp-41. The MySQL IN Operator</h4>
      <p>SELECT column_name(s)<br>
        FROM table_name<br>
        WHERE column_name IN (SELECT STATEMENT);</p> 

      <h4>Exm-42. IN Syntax</h4>
      <p>SELECT * FROM Customers<br>
        WHERE Country IN ('Germany', 'France', 'UK');</p>

      <h4>Exm-43. BETWEEN Syntax</h4>
      <p>SELECT column_name(s)<br>
        FROM table_name<br>
        WHERE column_name BETWEEN value1 AND value2;</p>

      <h4>Exm-44. BETWEEN</h4>
      <p>SELECT * FROM Products<br>
        WHERE Price BETWEEN 10 AND 20;</p>

      <h4>Exm-45. NOT BETWEEN</h4>
      <p>SELECT * FROM Products<br>
        WHERE Price NOT BETWEEN 10 AND 20;</p>

      <h4>Exm-46. BETWEEN with IN</h4>
      <p>SELECT * FROM Products<br>
        WHERE Price BETWEEN 10 AND 20<br> 
        AND CategoryID NOT IN (1,2,3);</p>

      <h4>Exm-47. BETWEEN Text Values</h4>
      <p>SELECT * FROM Products<br>
        WHERE ProductName BETWEEN 'Carnarvon Tigers' AND 'Mozzarella di Giovanni'<br>
        ORDER BY ProductName;</p>

      <h4>Exm-48. NOT BETWEEN Text Values</h4>
      <p>SELECT * FROM Products<br>
        WHERE ProductName NOT BETWEEN 'Carnarvon Tigers' AND 'Mozzarella di Giovanni'<br>
        ORDER BY ProductName;</p>

      <h4>Exm-49. BETWEEN Date</h4>
      <p>SELECT * FROM Orders<br>
        WHERE OrderDate BETWEEN '1996-07-01' AND '1996-07-31';</p>

      <h4>Exm-50. The MySQL GROUP BY Syntax</h4>
      <p>SELECT column_name(s)<br>
        FROM table_name<br>
        WHERE condition<br>
        GROUP BY column_name(s)<br>
        ORDER BY column_name(s);</p>

      <h4>Exm-51. GROUP BY</h4>
      <p>SELECT COUNT(CustomerID), Country<br>
        FROM Customers<br>
        GROUP BY Country<br>
        ORDER BY COUNT(CustomerID) DESC;</p> 
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>