<?php
/**
 * PRODUCTS MODEL
 * Contains a function for inserting a new category to the categories table.
 * Contains a function for inserting a new product to the inventory table.
 */
function insertCategory($categoryName){
    // Create a connection object from the acme connection function
    $db = acmeConnect(); 

    // $sqlSelect = 'SELECT categoryName FROM categories WHERE categoryName == :categoryName';
    
    // $sqlStmt = $db->prepare($sqlSelect);
    // $sqlStmt->bindValue(':categoryName', $categoryName, PDO::PARAM_STR);
    // $sqlStmt->execute();

    // $name = $sqlStmt->fetchAll();
    // $sqlStmt->closeCursor();
    // if ($name == null){

    

        // The SQL statement to be used with the database 
        $sql = 'INSERT INTO categories (categoryName) VALUES (:categoryName)'; 
        // The next line creates the prepared statement using the acme connection      
        $stmt = $db->prepare($sql);
        // Set bind values
        $stmt->bindValue(':categoryName', $categoryName, PDO::PARAM_STR);
        // The next line runs the prepared statement 
        $stmt->execute(); 
        // The next line gets the data from the database and 
        // stores it as an array in the $categories variable 
        // $categories = $stmt->fetchAll();
        // The next line closes the interaction with the database 
        $stmt->closeCursor(); 
        // The next line sends the array of data back to where the function 
        // was called (this should be the controller) 
    // }
    return 1;
}

function insertProduct($newProduct){
        // Create a connection object from the acme connection function
        $db = acmeConnect(); 
        // The SQL statement to be used with the database 
        $sql = 
            'INSERT INTO inventory (
                categoryId, invName, invDescription, invImage, invThumbnail, invPrice, 
                invStock, invSize, invWeight, invLocation, invVendor, invStyle) 
             VALUES ( 
                :categoryId, :invName, :invDescription, :invImage, :invThumbnail, :invPrice, 
                :invStock, :invSize, :invWeight, :invLocation, :invVendor, :invStyle)';
        // The next line creates the prepared statement using the acme connection      
        $stmt = $db->prepare($sql);
        // Set bind values
        $stmt->bindValue(':categoryId', $newProduct["categoryId"], PDO::PARAM_INT);
        $stmt->bindValue(':invName', $newProduct["invName"], PDO::PARAM_STR);
        $stmt->bindValue(':invDescription', $newProduct["invDescription"], PDO::PARAM_STR);
        $stmt->bindValue(':invImage', $newProduct["invImage"], PDO::PARAM_STR);
        $stmt->bindValue(':invThumbnail', $newProduct["invThumbnail"], PDO::PARAM_STR);
        $stmt->bindValue(':invPrice', $newProduct["invPrice"], PDO::PARAM_INT);
        $stmt->bindValue(':invStock', $newProduct["invStock"], PDO::PARAM_INT);
        $stmt->bindValue(':invSize', $newProduct["invSize"], PDO::PARAM_INT);
        $stmt->bindValue(':invWeight', $newProduct["invWeight"], PDO::PARAM_INT);
        $stmt->bindValue(':invLocation', $newProduct["invLocation"], PDO::PARAM_STR);
        $stmt->bindValue(':invVendor', $newProduct["invVendor"], PDO::PARAM_STR);
        $stmt->bindValue(':invStyle', $newProduct["invStyle"], PDO::PARAM_STR);

        // The next line runs the prepared statement 
        $stmt->execute(); 
        // The next line gets the data from the database and 
        // stores it as an array in the $categories variable 
        // $categories = $stmt->fetchAll();
        // The next line closes the interaction with the database 
        $stmt->closeCursor(); 
        // The next line sends the array of data back to where the function 
        // was called (this should be the controller) 
        return 1;
}
?>