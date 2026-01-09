
<?php
    if(isset($_SESSION['message'])){
        echo "<div>".htmlspecialchars($_SESSION['message'])."</div>";
        unset($_SESSION['message']);
    }
                    // usort($articles, function ($a, $b) {
                    //     return $b['id'] <=> $a['id'];
                    // });
    foreach($articles as $categorie){
        foreach($categorie as $article){
            var_dump($article);
            echo "<button><a href = 'index.php?admin=me&dash=true&update=".$article['id']."'>Update</a></button><br>";
            echo "<button><a href = '../controller/controllerAdmin.php?drop=".$article['id']."'>Delete</a></button><br>";
        }
    }
    echo "<button><a href = 'index.php?admin=me&dash=true&add=add'>Add article</a></button><br>";
?>