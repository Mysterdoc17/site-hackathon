<!DOCTYPE html>
<html lang="fr-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil hackathon</title>
    <link rel="stylesheet" href="main.css" />
</head>
<body>
    <nav>
        <a href="index.">Main page</a> |
        <a href="prizes.html">Prizes</a> |
        <a href="reglement.html">Rules</a> |
        <a href="register.php">Register</a>
    </nav>
    <h1>Welcome to the Health Hackathon website!</h1>
    <p>
        <h2>Event's presentation :</h2>
    </p>
    <p>The event will be on May 13th, 14th and 15th.</p>
    
    <?php
    // importing the site.php file
    require("site.php");
    $new_location = "index.php";
    redirect_to($new_location);
    ?>
</body>
</html>