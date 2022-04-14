<?php
// page pour l'enregistrement des participants
$_POST['name'] = "";
$_POST['email'] = "";
$_POST['phone'] = "";

?>
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
            <a href="contest.html">The contest</a> |
            <a href="workshop.html">Workshop</a>
        </nav>
        <h1>Welcome to the Health Hackathon website!</h1>
        <p><h2>Registration:</h2></p>

        <form action="./php/new.php" method="post">
                    <table>
                        <tr>
                            <td>
                                Name : 
                            </td>
                            <td>
                                <input type="text">
                            </td>
                            <td>
                                First name :
                            </td>
                            <td>
                                <input type="text">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                email : 
                            </td>
                            <td>
                                <input type="email">
                            </td>
                            <td>
                                Phone number :
                            </td>
                            <td>
                                <input type="text">
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                                <input type="submit" value="Registration">
                            </td>
                        </tr>
                    </table>
                </form>
        
    </body>
</html>