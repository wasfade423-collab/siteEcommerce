<?php
    if(empty($_GET)){
        include('vue/home.php');
    }else{
        if(isset($_GET['id']) && $_GET['id'] != ''){
            include('vue/vue1article.php');
        }
        if(isset($_GET['admin']) && $_GET['admin'] == "me" && isset($_GET['dash']) && $_GET['dash'] == "true" && isset($_GET['update'])){
            $toupdate = $_GET['update'];
            include('vue/update.php');
        } 
        elseif(isset($_GET['admin']) && $_GET['admin'] == "me" && isset($_GET['dash']) && $_GET['dash'] == "true" && isset($_GET['drop'])){
            echo $_GET['drop'];
        }        
        elseif(isset($_GET['admin']) && $_GET['admin'] == "me" && isset($_GET['dash']) && $_GET['dash'] == "true" && isset($_GET['add']) && $_GET['add'] =="add"){
            include('vue/add.php');
        }
        elseif(isset($_GET['admin']) && $_GET['admin'] == "me" && isset($_GET['dash']) && $_GET['dash'] == "true"){
            $articles['nouveau'] = $_SESSION['nouveau'];
            $articles['populaire'] = $_SESSION['populaire'];
            $articles['limité'] = $_SESSION['limité'];
            include('vue/dashbord.php');
        }
        elseif(isset($_GET['admin']) && $_GET['admin'] == "me"){
            include('vue/login.php');
        }
    }
?>