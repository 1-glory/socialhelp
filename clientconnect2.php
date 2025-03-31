<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/clientconnect.css">
    <link rel="icon" href="../src/SH.jpg" type="image/jpeg">
    <title>Social Help</title>
</head>
<body>
    <nav>
        <div class="logo"><h1>Social Help</h1></div>
        <div >
            <ul class="header">
                <li><a href="tel:+237 689 79 76 62" id="callLink">+237 689 79 76 62</a></li>
                <li class="here"><a href="##">Connexion</a></li>
                <li><a href="clientI.php">Inscription</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="aide.php">Aide</a></li>
            </ul>
        </div>
    </nav>
    <main>
        <div class="info"></div>
        <form action="">
            <div class="titre"><p>Se Connecter</p></div>
            <div class="form-div">
                <input type="text" name="" placeholder="E-mail" id="" required>
                <input type="password" placeholder="Mot de passe" required>
                <input type="submit" id="connect" value="Se connecter">
                <a href="clientforgotpw.php">Mot de passe oublie ?</a>
    
            </div>
           
        </form>
        <div class="compte">Vous etes pas membre ? &nbsp;<a href="clientI.php"> Creer un compte</a></div>

    </main>
    <script src="../js/appel.js"></script>
</body>
</html>