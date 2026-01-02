<?php

    header('Content-Type:application/json');
    include('../model/model.php');

            $model = new Model();
            if(!empty($_GET)){
                if($_GET['categorie'] != ''){
                    $categorie = $_GET['categorie'];
                    $articles = $model->getArticles($categorie);
                    echo(json_encode($articles));
                    //var_dump($articles);
                }    
            }else{
                $_GET['categorie'] = "nouveau";
                $categorie = $_GET['categorie'];
                $articles = $model->getArticles($categorie);
                echo(json_encode($articles));
                //var_dump($articles);               
            }


?>