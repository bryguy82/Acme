<!DOCTYPE html>
<html lang="en-us">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/head.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/head-accounts.php'; ?>
    <meta name="description" content="Acme registration">
    <title>Account Registration | Acme, Inc.</title>
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
            <h1>Acme Registration</h1>
            <h3>All fields are required</h3>
        </div>
        <div class="error_message">
            <!-- Display an error message if one exists -->
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
        </div>
        <form class="login" action="/acme/accounts/index.php" method="post">
            <fieldset>
                <label>
                    First name<span> *</span>
                    <input type="text" name="clientFirstname" placeholder="John" >
                </label>
                <label>
                    Last name<span> *</span>
                    <input type="text" name="clientLastname" placeholder="Smith" >
                </label>
                <label>
                    Email Address<span> *</span>
                    <input type="email" name="clientEmail" placeholder="example@email.com" >
                </label>
                <label>
                    Password<span> *</span>
                    <input type="password" name="clientPassword" title="Passwords must be 8 characters long and contain 1 letter, 1 number, and 1 special character" >
                </label>
                <div class="login_button">
                    <input type="submit" name="submit" value="Register">
                    <!-- Add the action key and value pair -->
                    <input type="hidden" name="action" value="register">
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