<?php
/**
 * ACCOUNTS MODEL
 */

 // Insert site visitor data to the database
function regClient($clientFirstname, $clientLastname, $clientEmail, $clientPassword) {

    // Set the connection up
    $db = acmeConnect();
    // Build the insert statement into a variable
    $sql = 'INSERT INTO clients (clientFirstname, clientLastname, clientEmail, clientPassword) 
            VALUES (:firstname, :lastname, :email, :password)';
    // Prepare statement using the db connection
    $stmt = $db->prepare($sql);

    // Variable setters
    $stmt->bindValue(':firstname', $clientFirstname, PDO::PARAM_STR);
    $stmt->bindValue(':lastname', $clientLastname, PDO::PARAM_STR);
    $stmt->bindValue(':email', $clientEmail, PDO::PARAM_STR);
    $stmt->bindValue(':password', $clientPassword, PDO::PARAM_STR);

    // Perform the insert with the data
    $stmt->execute();

    // Verify success with a row-changed count
    $rowsChanged = $stmt->rowCount();
    // Close the connection
    $stmt->closeCursor();
    // Return the info that verifies success
    return $rowsChanged;
}

?>