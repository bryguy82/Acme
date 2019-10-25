<!DOCTYPE html>
<html lang="en-us">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/head.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/head-accounts.php'; ?>
    <meta name="description" content="Acme registration">
    <title>Add Product | Acme, Inc.</title>
</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/header-accounts.php'; ?>
    </header>
    <nav>
        <?php echo $navList; ?>
    </nav>
    <main>
        <div class="hero_title">
            <h1>Add Product</h1>
            <h3>Add a new product below.  All fields are required.</h3>
        </div>
        <div class="error_message">
            <!-- Display an error message if one exists -->
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
        </div>
        <form class="login" action="/acme/products/index.php" method="post">
            <fieldset>
                <!-- dynamic category dropdown -->
                <?php echo $catList; ?>
                <label>
                    Product Name<span> *</span>
                    <input type="text" name="invName" placeholder="Acme anvil" >
                </label>
                <label>
                    Description<span> *</span>
                    <input type="text" name="invDescription" placeholder="Used for catching roadrunners" >
                </label>
                <label>
                    Image Path<span> *</span>
                    <input type="text" name="invImage" placeholder="folder/image.png" >
                </label>
                <label>
                    Thumbnail Path<span> *</span>
                    <input type="text" name="invThumbnail" placeholder="folder/thumbnail.jpg" >
                </label>
                <label>
                    Price<span> *</span>
                    <input type="text" name="invPrice" placeholder="49.99" >
                </label>
                <label>
                    Stock Number<span> *</span>
                    <input type="text" name="invStock" placeholder="38" >
                </label>
                <label>
                    Shipping Size (area in inches)<span> *</span>
                    <input type="text" name="invSize" placeholder="140" >
                </label>
                <label>
                    Weight (Lbs.)<span> *</span>
                    <input type="text" name="invWeight" placeholder="6" >
                </label>
                <label>
                    City Location<span> *</span>
                    <input type="text" name="invLocation" placeholder="San Diego" >
                </label>
                <label>
                    Vendor Name<span> *</span>
                    <input type="text" name="invVendor" placeholder="Blacksmiths-R-Us" >
                </label>
                <label>
                    Material Type<span> *</span>
                    <input type="text" name="invStyle" placeholder="metal" >
                </label>
                <div class="login_button">
                    <input type="submit" name="submit" value="Add Product">
                    <!-- Add the action key and value pair -->
                    <input type="hidden" name="action" value="newProduct">
                </div>
            </fieldset>
        </form>
    </main>
    <footer>
        <div id="rights">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
        </div>
    </footer>
</body>

</html>