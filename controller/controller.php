<?php
    header('Content-Type:application/json');
    include('../model/model.php');

        $model = new Model();


        if(empty($_GET)){
            $articles = $model->getArticles();
            echo(json_encode($articles));
        }

?>