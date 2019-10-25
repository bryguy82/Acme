<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="../css/small.css">
    <link type="text/css" rel="stylesheet" href="../css/medium.css">
    <link type="text/css" rel="stylesheet" href="../css/large.css">

    <meta name="description" content="Acme template">
    <title>Template | Acme, Inc.</title>
</head>

<body>
    <header>
        <div id="acme_image">
            <img alt="ACME logo" src="../images/site/logo.gif">
        </div>
        <div id="my_account_box">
            <a href="#">
                <div>
                    <img alt="red folder image" src="../images/site/account.gif">
                </div>
                <div id="account">
                    <p>My Account</p>
                </div>
            </a>
        </div>
    </header>
    <nav>
        <?php echo $navList; ?>
    </nav>
    <main>
        <div class="hero_title">
            <h1>Content Title Here</h1>
        </div>
    </main>
    <footer>
        <div id="rights">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
        </div>
    </footer>
</body>

</html>