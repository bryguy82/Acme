<!DOCTYPE html>
<html lang="en-us">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/head.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/head-accounts.php'; ?>
    <meta name="description" content="Acme registration">
    <title>Add Category | Acme, Inc.</title>
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
            <h1>Add Category</h1>
            <h3>Add a new category of products below.</h3>
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
                <label>
                    New Category Name<span> *</span>
                    <input type="text" name="categoryName">
                </label>
                <div class="login_button">
                    <input type="submit" name="submit" value="Add Category">
                    <!-- Add the action key and value pair -->
                    <input type="hidden" name="action" value="newCategory">
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