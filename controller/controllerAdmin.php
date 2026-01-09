<?php
session_start();
include('../model/modelAdmin.php');
    $model = new ModelAdmin();

    //gère formulaire de connexion 
    if(isset($_GET['admin']) && $_GET['admin'] == "me"){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(isset($_POST['nom']) && isset($_POST['pass'])){
                $nom = $_POST['nom'];
                $pass = $_POST['pass'];
                if($nom != '' && $pass != ''){
                    $id = 1;
                    $nom = trim(strip_tags($nom));
                    $informations = $model->connect($id);
                    if($nom === $informations['nom'] && $pass === $informations['pass']){
                        $_SESSION['nouveau'] = $model->getArticles('nouveau');
                        $_SESSION['populaire'] = $model->getArticles('populaire');
                        $_SESSION['limité'] = $model->getArticles('limité');
                        header('Location: ../index.php?admin=me&dash=true');
                    }else{
                        $_SESSION['error_connect'] = "Nom d'utilisateur ou Mot de Passe incorrect.";
                        header('Location: ../index.php?admin=me');
                    }
                }
            }
        }
    }
    //gère le formulaire d'ajout
    if(isset($_GET['add']) && $_GET['add'] == "add"){
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
            if(isset($_POST['nbreyellow']) && !empty($_POST['nbreyellow'])){
                if($_POST['nbreyellow'] == 0){
                    $nbreyellow = 0;
                }else{
                    $nbreyellow = $_POST['nbreyellow'];
                }
            }
            if(isset($_POST['nbreboth']) && !empty($_POST['nbreboth'])){
                $produit['nbreboth'] = $nbreboth;
                if($_POST['nbreboth'] == 0){
                    $nbreboth = 0;
                }else{
                    $nbreboth = $_POST['nbreboth'];
                }
            }
            if(isset($_POST['nbrevide']) && !empty($_POST['nbrevide'])){
                if($_POST['nbrevide'] == 0){
                    $nbrevide = 0;
                }else{
                    $nbrevide = $_POST['nbrevide'];
                }
            }
            if(isset($_POST['description']) && !empty($_POST['description'])){
                $description = $_POST['description'];
            }
            if(isset($_FILES['cartImg'])){
                $img = $_FILES['cartImg']['name'];
                
                //echo $img;
            }
    
            //nous ajoutons un article
            $ajout =  $model->setArticle($nomP, $prix, $status, $nbreyellow, $nbreboth, $nbrevide, $description);
            if(isset($ajout)){
                if($ajout == true){
                    $_SESSION['message'] = "Ajout éffectué.";
                    header('Location: ../index.php?admin=me&dash=true');
                }elseif($ajout == false){
                    $_SESSION['message'] = "Ajout non éffectué.";
                    header('Location: ../index.php?admin=me&dash=true');
                }else{
                    $_SESSION['message'] = "Erreur seveur.";
                    header('Location: ../index.php?admin=me&dash=true');
                }
            }
        }
    }   
    
    //gère le formulaire de modification
    if(isset($_GET['id'])){
        $id =$_GET['id'];
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
                if(isset($_POST['nbreyellow']) && !empty($_POST['nbreyellow'])){
                    {
                        $nbreyellow = $_POST['nbreyellow'];
                    }
                }
                if(isset($_POST['nbreboth']) && !empty($_POST['nbreboth'])){
{
                        $nbreboth = $_POST['nbreboth'];
                    }
                }
                if(isset($_POST['nbrevide']) && !empty($_POST['nbrevide'])){
                    {
                        $nbrevide = $_POST['nbrevide'];
                    }
                }
                if(isset($_POST['description']) && !empty($_POST['description'])){
                    $description = $_POST['description'];
                }
                if(isset($_FILES['cartImg'])){
                    $img = $_FILES['cartImg']['name'];
                    
                    //echo $img;
                }
        
                //nous modifions un article
                
                $ajout =  $model->update($id, $nomP, $prix, $status, $nbreyellow, $nbreboth, $nbrevide, $description);
                if(isset($ajout)){
                    if($ajout == true){
                        $_SESSION['message'] = "Modification éffectuée.";
                        header('Location: ../index.php?admin=me&dash=true');
                    }elseif($ajout == false){
                        $_SESSION['message'] = "Modification non éffectuée.";
                        header('Location: ../index.php?admin=me&dash=true');
                    }else{
                        $_SESSION['message'] = "Erreur seveur.";
                        header('Location: ../index.php?admin=me&dash=true');
                    }
                }
            }
        header('Content-Type:application/json');
        $id = $_GET['id']; 
        $article = $model->getArticle($id);
        echo  json_encode($article);
    }
    
    //gère la suppression
    if(isset($_GET['drop'])){
        $toDrop = $_GET['drop'];
        $drop = $model->dropArticle($toDrop);
        if(isset($drop)){
            if($drop == true){
                $_SESSION['message'] = "Suppression éffectuée.";
                //require_once('../vue/dashbord.php');
                header('Location: ../index.php?admin=me&dash=true');
            }elseif($drop == false){
                $_SESSION['message'] = "Suppression non éffectuée.";
                header('Location: ../index.php?admin=me&dash=true');
            }else{
                $_SESSION['message'] = "Erreur seveur.";
                header('Location: ../index.php?admin=me&dash=true');
                }
            }
    }

?>