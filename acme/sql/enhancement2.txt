
INSERT INTO clients
(
    clientFirstname,
    clientLastname,
    clientEmail,
    clientPassword,
    comments
)
VALUES
(
    'Tony',
    'Stark',
    'tony@starkent.com',
    'Iam1ronM@n',
    'I am the real Ironman'
)

UPDATE clients
SET clientLevel = 3
WHERE clientFirstname = 'Tony'
  AND clientLastname = 'Stark'
  AND clientLevel = 1;

UPDATE inventory
SET invName = REPLACE(invName, 'Nylon Rope', 'Climbing rope'), 
    invDescription =  REPLACE(invDescription, 'nylon rope', 'climbing rope');

SELECT invName, categoryName
FROM inventory i
INNER JOIN categories c
ON c.categoryId = i.categoryId
WHERE i.categoryId = 3;

SELECT * FROM inventory;

DELETE FROM inventory
WHERE invName = 'Koenigsegg CCX Car';
