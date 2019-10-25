<?php
/**
 * ACCOUNTS CONTROLLER
 */

// Get the database connection file
require_once '../library/connections.php';
// Get the acme model for use as needed
require_once '../model/acme-model.php';
// Get the accounts model for use as needed
require_once '../model/accounts-model.php';

$categories = getCategories();
// var_dump($categories);
//     exit;

// Build a navigation bar using the $categories array
$navList = '<ul>';
$navList .= "<li><a href='/acme/index.php' title='View the Acme home page'>Home</a></li>";
foreach ($categories as $category) {
    $navList .= "<li><a href='/acme/index.php?action=".urlencode($category['categoryName'])."' title='View our $category[categoryName] product line'>$category[categoryName]</a></li>";
}
$navList .= '</ul>';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
    $action = filter_input(INPUT_GET, 'action');
    // if ($action == NULL){
    //     $action = 'Login';
    // }
}

switch ($action){
    case 'Login':
        include '../view/login.php';
        exit;
        break;
    case 'Registration':
        include '../view/registration.php';
        exit;
        break;
    case 'register':
        $clientFirstname = filter_input(INPUT_POST, 'clientFirstname');
        $clientLastname = filter_input(INPUT_POST, 'clientLastname');
        $clientEmail = filter_input(INPUT_POST, 'clientEmail');
        $clientPassword = filter_input(INPUT_POST, 'clientPassword');

        // Check for missing data
        if (empty($clientFirstname) || empty($clientLastname) || empty($clientEmail) || empty($clientPassword)) {
            $message = '<p>Please provide information for all empty fields.</p>';
            include '../view/registration.php';
            exit;
        }

        // Send the data to the model
        $regOutcome = regClient($clientFirstname, $clientLastname, $clientEmail, $clientPassword);

        // Check and report the result
        if ($regOutcome === 1) {
            $message = '<p>Thanks for registering, '.$clientFirstname.'.  Please use your email and password to login.</p>';
            include '../view/login.php';
            exit;
        } else {
            $message = '<p>Sorry '.$clientFirstname.', but the registration failed.  Please try again.</p>';
            include '../view/registration.php';
            exit;
        }
        break;
    default:

}


?>