<?php

    header('Content-Type:application/json');
    include('../model/model.php');

            $model = new Model();
            if(!empty($_GET)){
                if(isset($_GET['categorie']) && $_GET['categorie'] != ''){
                    $categorie = $_GET['categorie'];
                    $articles = $model->getArticles($categorie);
                    echo(json_encode($articles));
                    //var_dump($articles);
                }
                 
                if(isset($_GET['id']) && $_GET['id'] != ''){
                    $id = $_GET['id'];
                    $article = $model->getArticle($id);
                    echo json_encode($article);
                }
            }else{
                $_GET['categorie'] = "nouveau";
                $categorie = $_GET['categorie'];
                $articles = $model->getArticles($categorie);
                echo(json_encode($articles));
                //var_dump($articles);               
            }


?>