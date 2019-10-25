<!DOCTYPE html>
<html lang="en-us">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/head.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/head-accounts.php'; ?>
    <meta name="description" content="Acme login">
    <title>Account Login | Acme, Inc.</title>
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
            <h1>Acme Login</h1>
        </div>
        <div class="error_message">
            <!-- Display an error message if one exists -->
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
        </div>
        <form class="login" action="#">
            <fieldset>
                <label>
                    Email Address<span> *</span>
                    <input type="email" name="email" placeholder="example@email.com" >
                </label>
                <label>
                    Password<span> *</span>
                    <input type="password" name="password" title="Passwords must be 8 characters long and contain 1 letter, 1 number, and 1 special character" >
                </label>
                <div class="login_button">
                    <input type="submit" value="login">
                </div>
            </fieldset>
        </form>
        <div class="register">
            <p>Not a member yet?</p>
            <div class="abutton">
                <a href="../accounts/?action=Registration">Create your account!</a>
            </div>
        </div>
    </main>
    <footer>
        <div id="rights">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
        </div>
    </footer>
</body>

</html>