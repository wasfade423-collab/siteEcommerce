<?php
    include('model/model.php');

    $model = new Model();
class Compteur{
    public function increment($act){
        if(@$_SESSION['oui'] !== 'oui'){
            $act++;
            $_SESSION['oui'] = 'oui';
        }
        return $act;
    }
}
    if(!empty($_GET)){
        //a ce niveau on a affiche tout les contenus
        if(isset($_GET['categorie']) && $_GET['categorie'] != ''){
            $categorie = $_GET['categorie'];
            $articles = $model->getArticles($categorie);
            header('Content-Type:application/json');
            echo(json_encode($articles));
                    // var_dump($articles);
        }      
        if(isset($_GET['id']) && $_GET['id'] != ''){
            include('vue/vue1article.php');
        }
        if(isset($_GET['see']) && $_GET['see'] != ''){
            $id = $_GET['see'];
            $article = $model->getArticle($id);
            header('Content-Type:application/json');
            echo json_encode($article);
        } 
        
        




        //Admin
                if(isset($_GET['info']) && $_GET['info'] != ''){
                    $toupdate = $_GET['info'];
                    $article = $model->getArticle($toupdate);
                    header('Content-Type:application/json');
                    echo json_encode($article);
                } 
        //modification
        if(isset($_GET['admin']) && $_GET['admin'] == "me" && isset($_GET['update'])){
            $toupdate = $_GET['update'];
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                if(isset($_POST['nomP']) && !empty($_POST['nomP'])){
                    $nomP = strip_tags($_POST['nomP']);
                }
                if(isset($_POST['prix']) && !empty($_POST['prix'])){
                    $prix = strip_tags($_POST['prix']);
                }
                if(isset($_POST['status']) && !empty($_POST['status'])){
                    $status = strip_tags($_POST['status']);
                }
                if(isset($_POST['nbreyellow'])){
                        $nbreyellow = $_POST['nbreyellow'];
                }
                if(isset($_POST['nbreboth'])){
                        $nbreboth = $_POST['nbreboth'];
                }
                if(isset($_POST['nbrevide'])){
                        $nbrevide = $_POST['nbrevide'];
                }
                if(isset($_POST['description']) && !empty($_POST['description'])){
                    $description = strip_tags($_POST['description']);
                }
                if(isset($_POST['couleurs']) && !empty($_POST['couleurs'])){
                    $couleurs = $_POST['couleurs'];
                }            
                if(isset($_FILES['cartImg'])){
                    $imageName = $_FILES['cartImg']['name'];
                    // Traitement de l'image
                    $extension = pathinfo($imageName)['extension'];
                    if($extension === "jpeg" || $extension === "jpg" || $extension === "png"){
                        $img = basename($imageName);
                        $target = "imagesuploade/" . basename($imageName);
                        move_uploaded_file($_FILES['cartImg']['tmp_name'], $target);
                    }
                }
        
                //nous ajoutons un article
                $ajout =  $model->update($toupdate, $nomP, $prix, $status, (int)$nbreyellow, (int)$nbreboth, (int)$nbrevide, $description, $couleurs, $img);
                if(isset($ajout)){
                    if($ajout == true){
                        $_SESSION['message'] = "Modification réussie.";
                    }elseif($ajout == false){
                        $_SESSION['message'] = "Modification non éffectué.";
                    }
                    $articles['nouveau'] = $model->getArticles('nouveau');
                    $articles['populaire'] = $model->getArticles('populaire');
                    $articles['limité'] = $model->getArticles('limité');                        
                    header('Location: ../index.php?admin=me&dash=dash');
                }                
            }else{
                if(!isset($_SESSION['admin']) || $_SESSION['admin'] != "true"){
                    header('Location: index.php?admin=me');
                }else{
                    include('vue/update.php');
                }
            }
            
        }        
        //suppression
        elseif(isset($_GET['admin']) && $_GET['admin'] == "me" && isset($_GET['drop'])){
            $toDrop = $_GET['drop'];
            $drop = $model->deleteArticle($toDrop);
            if(isset($drop)){
                if($drop === true){
                    $_SESSION['message'] = "Suppression réussie.";
                }else{
                    $_SESSION['message'] = "Suppression non réussie.";
                }
                $articles['nouveau'] = $model->getArticles('nouveau');
                $articles['populaire'] = $model->getArticles('populaire');
                $articles['limité'] = $model->getArticles('limité');
                header('Location: ../index.php?admin=me&dash=dash');
            } 
        }
        //ajout
        elseif(isset($_GET['admin']) && $_GET['admin'] == "me" && isset($_GET['add']) && $_GET['add'] === "add"){
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                if(isset($_POST['nomP']) && !empty($_POST['nomP'])){
                    $nomP = strip_tags($_POST['nomP']);
                }
                if(isset($_POST['prix']) && !empty($_POST['prix'])){
                    $prix = strip_tags($_POST['prix']);
                }
                if(isset($_POST['status']) && !empty($_POST['status'])){
                    $status = strip_tags($_POST['status']);
                }
                if(isset($_POST['nbreyellow'])){
                        $nbreyellow = $_POST['nbreyellow'];
                }
                if(isset($_POST['nbreboth'])){
                        $nbreboth = $_POST['nbreboth'];
                }
                if(isset($_POST['nbrevide'])){
                        $nbrevide = $_POST['nbrevide'];
                }
                if(isset($_POST['description']) && !empty($_POST['description'])){
                    $description = strip_tags($_POST['description']);
                }
                if(isset($_POST['couleurs']) && !empty($_POST['couleurs'])){
                    $couleurs = $_POST['couleurs'];
                }            
                if(isset($_FILES['cartImg'])){
                    // Traitement de l'image
                    $imageName = $_FILES['cartImg']['name'];
                    $extension = pathinfo($imageName)['extension'];
                    if($extension === "jpeg" || $extension === "jpg" || $extension === "png"){
                        $img = basename($imageName);
                        $target = "imagesuploade/" . basename($imageName);
                        move_uploaded_file($_FILES['cartImg']['tmp_name'], $target);
                    }
                }
        
                //nous ajoutons un article
                $ajout =  $model->setArticle($nomP, $prix, $status, (int)$nbreyellow, (int)$nbreboth, (int)$nbrevide, $description, $couleurs, $img);
                if(isset($ajout)){
                    if($ajout == true){
                        $_SESSION['message'] = "Ajout éffectué.";
                    }elseif($ajout == false){
                        $_SESSION['message'] = "Ajout non éffectué.";
                    }
                    $articles['nouveau'] = $model->getArticles('nouveau');
                    $articles['populaire'] = $model->getArticles('populaire');
                    $articles['limité'] = $model->getArticles('limité');                        
                    header('Location: ../index.php?admin=me&dash=dash');
                }             
            }else{
                if(!isset($_SESSION['admin']) || $_SESSION['admin'] != "true"){
                    header('Location: index.php?admin=me');
                }else{
                    include('vue/add.php');
                }
            }
        }
        //dashbord
        elseif(isset($_GET['admin']) && $_GET['admin'] == "me" && isset($_GET['dash']) && $_GET['dash'] == "dash"){
            if(!isset($_SESSION['admin']) || $_SESSION['admin'] != "true"){
                header('Location: index.php?admin=me');
            }else{
                $cpt = $model->getVisitor();
                $articles['nouveau'] = $model->getArticles('nouveau');
                $articles['populaire'] = $model->getArticles('populaire');
                $articles['limité'] = $model->getArticles('limité');
                include('vue/dashbord.php');
            }
        }        
        //login
        elseif(isset($_GET['admin']) && $_GET['admin'] == "me"){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                if(isset($_POST['nom']) && $_POST['nom'] !="" && isset($_POST['pass']) && $_POST['pass'] !=""){
                    $nom = strip_tags($_POST['nom']);
                    $pass = strip_tags($_POST['pass']);
                    $informations = $model->connect();
                    if($nom === $informations['nom'] && $pass === $informations['pass']){
                        $_SESSION['admin'] = "true";
                        echo $cpt = $model->getVisitor();
                        $articles['nouveau'] = $model->getArticles('nouveau');
                        $articles['populaire'] = $model->getArticles('populaire');
                        $articles['limité'] = $model->getArticles('limité');
                        include('vue/dashbord.php');
                    }else{
                        $echec = "Identifiants ou mot de Pass <b>incorrects</b>.";
                        include('vue/login.php');
                    }
                }else{
                    $echec = "Vous devez <b>remplir</b> les champs."; 
                    include('vue/login.php');
                }
            }else{
                include('vue/login.php');
            }
        }
    }else{  
        $act = $model->getVisitor();
        $cpt = new Compteur();  
        $cptvisit = $cpt->increment((int)$act);
        $model->setVisitor($cptvisit);
        include('vue/home.php');
    }


?>