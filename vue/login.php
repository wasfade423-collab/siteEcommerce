<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/sortie.css">
</head>
<body>
    <form action="" method="post" class="flex flex-col">
        <?php
            if(isset($echec)){
                echo "<div>".htmlspecialchars($echec)."</div>";
                unset($echec);
            }
        ?>
        <label for="nom">
            Nom d'utilisateur
        </label>
        <input type="text" name="nom" id="nom" class="border">
        <label for="pass">
            Mot de Passe
        </label>
        <input type="password" name="pass" id="pass" class="border">
        <input type="submit" value="Se connecter">
        <div style="text-align: center;">
            <a href="index.php" class="back-link">Retour au site</a>
        </div>
    </form>
</body>
</html>