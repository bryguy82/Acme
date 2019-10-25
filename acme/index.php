<?php
/**
 * ACME CONTROLLER
 */

// Get the database connection file
require_once 'library/connections.php';
// Get the acme model for use as needed
require_once 'model/acme-model.php';

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
    if ($action == NULL){
        $action = 'Home';
    }
}

switch ($action){
    case 'Home':
        include 'view/home.php';
        break;
    case 'Cannon':
        include 'view/home.php';
        break;
    case 'Explosive':
        include 'view/home.php';
        break;
    case 'Misc':
        include 'view/home.php';
        break;
    case 'Rocket':
        include 'view/home.php';
        break;
    case 'Trap':
        include 'view/home.php';
        break;
    default:
        // include 'acme/view/home.php';
}


?>