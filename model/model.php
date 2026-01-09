<?php
    class model{
        public $database;
        public function __construct(){
            $this->database = new PDO('mysql:host=localhost;dbname=sitecommerce;charset=utf8', 'root','');
        }
        public function getArticles($categorie){
            $query= "SELECT * FROM produits WHERE status = :categorie";
            $stmt=$this->database->prepare($query);
            if($stmt->execute(['categorie'=>$categorie])){
                $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            return $articles;
        } 
        public function getArticle($id){
            $query = "SELECT * FROM produits WHERE id= :id";
            $stmt = $this->database->prepare($query);
            if($stmt->execute(['id'=>$id])){
                $article = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
                return $article;
            }
        }  
    }
?>