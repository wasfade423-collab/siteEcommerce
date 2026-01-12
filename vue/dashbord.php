
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_SESSION['message'])){
        echo "<input type=\"hidden\" id=\"message\" value=\"".htmlspecialchars($_SESSION['message'])."\">";
        unset($_SESSION['message']);
    }
                    // usort($articles, function ($a, $b) {
                    //     return $b['id'] <=> $a['id'];
                    // });
                    // reste à faire la fonction qui selectionne chaque couleur est biaisé dans update.php
    foreach($articles as $categorie){
        foreach($categorie as $article){
            var_dump($article);
            echo "<button><a href = 'index.php?admin=me&update=".$article['id']."'>Update</a></button><br>";
            echo "<button><a href = '?admin=me&drop=".$article['id']."'>Delete</a></button><br>";
        }
    }
    echo "<button><a href = 'index.php?admin=me&add=add'>Add article</a></button><br>";
?>
  <script>
    alert(document.querySelector('input').value);
  </script>  
</body>
</html>