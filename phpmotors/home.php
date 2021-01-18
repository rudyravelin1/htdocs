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
    <h2>Welcome to PHP Motors!</h2>
        <section class="first-section">
            <h2 id="title-1">DMC Delorean</h2>
            <p id="paragraph-one">3 Cup holders<br>
            Superman doors<br>
            Fuzzy dice!</p>

            <img class="delorean-car" src="../phpmotors/images/delorean.jpg" alt="Delorean car">
            <img class="own-today" src="/phpmotors/images/site/own_today.png" alt="Today owner">
        </section>

        <section>
            <h2>DMC Delorean Reviews</h2>
            <ol>
                <li>."So fast its almost like traveling in time." (4/5)</li>
                <li>."Coolest ride on the road." (4/5)</li>
                <li>."I'm feeling Marty McFly!." (5/5)</li>
                <li>."The most futuristic ride of our day." (4.5/5)</li>
                <li>."80's livin and I love it!." (5/5)</li>
            </ol>
        </section>
        <section>
            <h2>Delorean Upgrades</h2>
            <img src="/phpmotors/images/upgrades/flux-cap.png" alt="Flux Capacitor">
            <p><a href="#">Flux Capacitor</a></p>

            <img src="/phpmotors/images/upgrades/flame.jpg" alt="Flame Decals">
            <p><a href="#">Flame Decals</a></p>

            <img src="/phpmotors/images/upgrades/bumper_sticker.jpg" alt="Bumper Stickers">
            <p><a href="#">Bumper Stickers</a></p>

            <img src="/phpmotors/images/upgrades/hub-cap.jpg" alt="Hub Caps">
            <p><a href="#">Hub Caps</a></p>

        </section>
    </main>

    <hr>  


    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/footer.php'; ?>
    </footer>
</body>

</html>