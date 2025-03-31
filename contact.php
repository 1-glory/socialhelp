<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="icon" href="../src/SH.jpg" type="image/jpeg">
    <title>Social Help</title>
</head>
<body>
    <nav>
        <div class="logo"><h1>Social Help</h1></div>
        <div >
            <ul class="header">
                <li> <a href="tel:+237 689 79 76 62" id="callLink">+237 689 79 76 62</a></li>
                <li ><a href="clientconnect.html">Connexion</a></li>
                <li><a href="clientI.html">Inscription</a></li>
                <li class="here"><a href="##">Contact</a></li>
                <li><a href="aide.html">Aide</a></li>
            </ul>
        </div>
    </nav>
    <main>
        <div class="info"></div>
        <form action="">
            <div class="titre"><p>Contacter Nous</p></div>
            <div class="form-div">
                
                <div class="names">
                    <input type="text" name="" id="" placeholder="Votre Nom" required>
                    <input type="text" name="" id="" placeholder="Votre Prénom" required>
                </div> 
                <input type="text" name="" placeholder="E-mail" id="" required>
                <select class="menu" name="menu" id="menu">
                    <optgroup>
                        <option value="##">Objet de la demande</option>
                        <option value="reclam">réclamation</option>
                        <option value="part">partenariat</option>
                        <option value="autre">autre</option>
                    </optgroup>
                </select>
                <div class="text">
                    <label for="text">Message</label>
                    <textarea type="text" name="text" id="text" rows="4" required></textarea>
                </div>
                <input type="submit" id="send" value="Envoyer">
                
            </div>
           
        </form>

    </main>
    <script src="../js/appel.js"></script>
</body>
</html>