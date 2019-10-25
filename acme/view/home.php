<!DOCTYPE html>
<html lang="en-us">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/head.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/head-acme.php'; ?>
    <meta name="description" content="Acme home page">
    <title>Home | Acme, Inc.</title>
</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/header.php'; ?>
    </header>
    <nav>
        <?php echo $navList; ?>
        <!-- <ul>
            <li><a href='/acme/index.php' title='View the Acme home page'>Home</a></li>
            <li><a href='/acme/index.php?action=Cannon' title='View our Cannon product line'>Cannon</a></li>
            <li><a href='/acme/index.php?action=Explosive' title='View our Explosive product line'>Explosive</a></li>
            <li><a href='/acme/index.php?action=Misc' title='View our Misc product line'>Misc</a></li>
            <li><a href='/acme/index.php?action=Rocket' title='View our Rocket product line'>Rocket</a></li>
            <li><a href='/acme/index.php?action=Trap' title='View our Trap product line'>Trap</a></li>
        </ul> -->
        <!-- <ul>
            <li>
                <a class="selected" href="#">Home</a>
            </li>
            <li>
                <a href="#">Cannon</a>
            </li>
            <li>
                <a href="#">Explosive</a>
            </li>
            <li>
                <a href="#">Misc</a>
            </li>
            <li>
                <a href="#">Rocket</a>
            </li>
            <li>
                <a href="#">Trap</a>
            </li>
        </ul> -->
    </nav>
    <main>
        <div class="hero_title">
            <h1>Welcome to Acme!</h1>
        </div>
        <div class="hero">
            <div class="hero_img">
                <img src="images/site/rocketfeature.jpg" alt="Mr. Coyote on a rocket over the desert">
            </div>
            <div class="hero_text">
                <ul>
                    <li>
                        <h2>Acme Rocket</h2>
                    </li>
                    <li>Quick lighting fuse</li>
                    <li>NHTSA approved seat belts</li>
                    <li>Mobile launch stand included</li>
                    <li><a href="/acme/cart/"><img id="actionbtn" alt="Add to cart button" src="images/site/iwantit.gif"></a></li>
                </ul>
            </div>
        </div>
        <article>
            <div class="reviews">
                <div>
                    <h2>Acme Rocket Reviews</h2>
                </div>
                <div>
                    <ul>
                        <li>"I don't know how I ever caught roadrunners before this." (4/5)</li>
                        <li>"That thing was fast!" (4/5)</li>
                        <li>"Talk about fast delivery." (5/5)</li>
                        <li>"I didn't even have to pull the meat apart." (4.5/5)</li>
                        <li>"I'm on my thirtieth one. I love these things!" (5/5)</li>
                    </ul>
                </div>
            </div>
        </article>
        <aside>
            <div class="recipes">
                <div>
                    <h2>Featured Recipies</h2>
                </div>
                <ul>
                    <li>
                        <picture><img src="images/recipes/bbqsand.jpg" alt="Roadrunner barbeque sandwich"></picture>
                        <a href="#">Pulled Roadrunner BBQ</a>
                    </li>
                    <li>
                        <picture><img src="images/recipes/potpie.jpg" alt="Making a roadrunner pot pie"></picture>
                        <a href="#">Roadrunner Pot Pie</a>
                    </li>
                    <li>
                        <picture><img src="images/recipes/soup.jpg" alt="Creamy roadrunner soup"></picture>
                        <a href="#">Roadrunner Soup</a>
                    </li>
                    <li>
                        <picture><img src="images/recipes/taco.jpg" alt="Soft roadrunner taco"></picture>
                        <a href="#">Roadrunner Tacos</a>
                    </li>
                </ul>
            </div>
        </aside>
    </main>
    <footer>
        <div id="rights">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
        </div>
    </footer>
</body>

</html>