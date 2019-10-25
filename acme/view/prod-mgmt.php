<!DOCTYPE html>
<html lang="en-us">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/head.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/head-accounts.php'; ?>
    <meta name="description" content="Acme registration">
    <title>Product Management | Acme, Inc.</title>
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
            <h1>Product Management</h1>
            <h3>Welcome to the product management page.  Please choose an option below:</h3>
        </div>
        <div class="error_message"-->
            <!-- Display an error message if one exists -->
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
        </div>
        <div>
            <ul>
                <li><a href="../products/?action=newCat">Add a New Category</a></li>
                <li><a href="../products/?action=newProd">Add a new Product</a></li>
            </ul>
        </div>
    </main>
    <footer>
        <div id="rights">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
        </div>
    </footer>
</body>

</html>