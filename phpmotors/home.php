<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Motors</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/phpmotors/css/home.css" media="screen">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:wght@300&family=Playfair+Display&display=swap" rel="stylesheet">

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/header.php'; ?>
    </header>

    <nav class="myMenu">
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/navigation.php'; ?>
    </nav>

    <main>
        <h2 class="heading-2">Welcome to PHP Motors!</h2>

        <section class="lastpart">
            <div class="first-section">
                <p id="title-1">DMC Delorean</p>
                <p id="paragraph-one">3 Cup holders<br>
                    Superman doors<br>
                    Fuzzy dice!</p>
            </div>
            <div class="delocar">
                <img class="delorean-car" src="../phpmotors/images/delorean.jpg" alt="Delorean car">
                <img class="own-today" src="/phpmotors/images/site/own_today.png" alt="Today owner">
            </div>

            <h2 class="h2-reviews">DMC Delorean Reviews</h2>
            <div class="reviews">
                <ul id="li-reviews">
                    <li>"So fast its almost like traveling in time." (4/5)</li>
                    <li>"Coolest ride on the road." (4/5)</li>
                    <li>"I'm feeling Marty McFly!." (5/5)</li>
                    <li>"The most futuristic ride of our day." (4.5/5)</li>
                    <li>"80's livin and I love it!." (5/5)</li>
                </ul>
            </div>
            <h2 class="upgrade">Delorean Upgrades</h2>

            <div class="container">
                <div class="pic-1">
                    <img src="/phpmotors/images/upgrades/flux-cap.png" alt="Flux Capacitor">
                    <p><a href="#">Flux Capacitor</a></p>
                </div>

                <div class="pic-2">
                    <img class="img-2" src="/phpmotors/images/upgrades/flame.jpg" alt="Flame Decals">
                    <p><a href="#">Flame Decals</a></p>
                </div>

                <div class="pic-3">
                    <img src="/phpmotors/images/upgrades/bumper_sticker.jpg" alt="Bumper Stickers">
                    <p><a href="#">Bumper Stickers</a></p>
                </div>

                <div class="pic-4">
                    <img class="img-4" src="/phpmotors/images/upgrades/hub-cap.jpg" alt="Hub Caps">
                    <p class="hub-4"><a href="#">Hub Caps</a></p>
                </div>
        </section>


    </main>

    <hr>


    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/footer.php'; ?>
    </footer>
</body>

</html>