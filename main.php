SELECT FirstName, LastName, Line1, City, State, ZipCode

FROM Customers INNER JOIN Addresses

ON Customers.CustomerID=Addresses.CustomerID

WHERE Customers.emailAddress='allan.sherwood@yahoo.com';
