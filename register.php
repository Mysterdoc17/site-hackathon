<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration page</title>
        <link rel="stylesheet" href="main.css" />
    </head>
    <body>
        <nav>
            <a href="index.php">Main page</a> |
            <a href="prizes.html">Prizes</a> |
            <a href="reglement.html">Rules</a> |
            <a href="register.php">Register</a>
        </nav>
        <h1>Registration:</h1>
        <form action="register.php" method="post">
            <p>
                <label for="firstname">Firstname:</label>
                <input type="text" name="firstname" id="firstname" />
            </p>
            <p>
                <label for="lastname">Lastname:</label>
                <input type="text" name="lastname" id="lastname" />
            </p>
            <p>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" />
            </p>
            <p>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" />
            </p>
            <p>
                <label for="password_confirm">Confirm password:</label>
                <input type="password" name="password_confirm" id="password_confirm" />
            </p>
            <p>
                <input type="submit" value="Register" />
            </p>
        </form>
        <?php
        if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_confirm'])) {
            // récupération des données du formulaire
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password_confirm = $_POST['password_confirm'];

            // si les mots de passe sont identiques, on rentre les données dans la base de données
            if ($password == $password_confirm) {
                // déclaration de la variable i comme compteur initialisé à 0
                $i = 0;
                // hashage du mot de passe
                $password = password_hash($password, PASSWORD_DEFAULT);

                // connexion à la base de données
                $db = new PDO('mysql:host=localhost; dbname=health_hackathon_db; charset=utf8', 'root', '');
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // insertion des données dans la base de données
                $query = $db->prepare("INSERT INTO users (firstname, lastname, email, password) VALUES (:firstname, :lastname, :email, :password)");
                $query->
                $query->bindParam(':firstname', $firstname);
                $query->bindParam(':lastname', $lastname);
                $query->bindParam(':email', $email);
                $query->bindParam(':password', $password);
                $query->execute();

                // affiche un message de confirmation
                echo "You have been registered!";
            }
            
            else {
                // affiche un message d'erreur
                echo "Passwords don't match!";
            }
        }
        ?>
    </body>
</html>