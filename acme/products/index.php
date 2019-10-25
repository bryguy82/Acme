<?php
/**
 * ACCOUNTS CONTROLLER
 */

// Get the database connection file
require_once '../library/connections.php';
// Get the acme model for use as needed
require_once '../model/acme-model.php';
// Get the accounts model for use as needed
require_once '../model/products-model.php';

$categories = getCategories();
// var_dump($categories);
//     exit;

// Build a navigation bar using the $categories array
$navList = '<ul>';
$navList .= "<li><a href='/acme/index.php' title='View the Acme home page'>Home</a></li>";
foreach ($categories as $category) {
    // echo $category["categoryId"];
    // echo $category["categoryName"];
    $navList .= "<li><a href='/acme/index.php?action=".urlencode($category['categoryName'])."' title='View our $category[categoryName] product line'>$category[categoryName]</a></li>";
}
$navList .= '</ul>';

// echo $navList;

// Build the Dictionary and drop-down for the categories usind the id
$categoryDict = array_column($categories, "categoryName", "categoryId");
$catList = "<select name='categoryId'>";
foreach ($categoryDict as $key => $value) {
    $catList .= "<option value=$key>$value</option>";
}
$catList .= "</select>";

// echo $catList;

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
    $action = filter_input(INPUT_GET, 'action');
    // if ($action == NULL){
    //     $action = 'Login';
    // }
}

switch ($action){
    case 'newCat':
        include '../view/new-cat.php';
        exit;
        break;
    case 'newProd':
        include '../view/new-prod.php';
        exit;
        break;
    case 'newCategory':
        $categoryName = filter_input(INPUT_POST, 'categoryName');

        // Check for missing data
        if (empty($categoryName)) {
            $message = "<p>Provide a name for the new category.</p>";
            include "../view/new-cat.php";
            exit;
        }

        // Insert the new category
        $result = insertCategory($categoryName);

        // Category success will show in the nav
        if ($result === 1) {
            // $action == NULL;
            include '../view/prod-mgmt.php';
            exit;
        }

        // exit;
        break;
    case 'newProduct':
        $categoryId = filter_input(INPUT_POST, 'categoryId');
        $invName = filter_input(INPUT_POST, 'invName');
        $invDescription = filter_input(INPUT_POST, 'invDescription');
        $invImage = filter_input(INPUT_POST, 'invImage');
        $invThumbnail = filter_input(INPUT_POST, 'invThumbnail');
        $invPrice = filter_input(INPUT_POST, 'invPrice');
        $invStock = filter_input(INPUT_POST, 'invStock');
        $invSize = filter_input(INPUT_POST, 'invSize');
        $invWeight = filter_input(INPUT_POST, 'invWeight');
        $invLocation = filter_input(INPUT_POST, 'invLocation');
        $invVendor = filter_input(INPUT_POST, 'invVendor');
        $invStyle = filter_input(INPUT_POST, 'invStyle');

        // Check for missing data
        if (empty($categoryId) || empty($invName) || empty($invDescription) || empty($invImage) 
         || empty($invThumbnail) || empty($invPrice) || empty($invStock) || empty($invSize) 
         || empty($invWeight) || empty($invLocation) || empty($invVendor) || empty($invStyle)) {
            $message = "<p>Please fill in all of the fields.</p>";
            include "../view/new-prod.php";
            exit;
        }

        $productDetails = array("categoryId" => $categoryId, "invName" => $invName, 
        "invDescription" => $invDescription, "invImage" => $invImage, "invThumbnail" => $invThumbnail, 
        "invPrice" => $invPrice, "invStock" => $invStock, "invSize" => $invSize, 
        "invWeight" => $invWeight, "invLocation" => $invLocation, "invVendor" => $invVendor, 
        "invStyle" => $invStyle);
        
        //  Send the data to the model/database
        $result = insertProduct($productDetails);

        // Check for success
        if ($result === 1) {
            $message = "<p>Congratulations, $invName was successfully added.</p>";
            include "../view/new-prod.php";
            exit;
        } else {
            $message = '<p>Sorry, adding '.$invName.' failed.  Please try again.</p>';
            include '../view/new-prod.php"';
            exit;
        }
        break;
    default:
        include '../view/prod-mgmt.php';
}


?>