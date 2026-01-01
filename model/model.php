<?php
    class model{
        public $database;
        public function __construct(){
            $this->database = new PDO('mysql:host=localhost;dbname=sitecommerce;charset=utf8', 'root','');
        }
        public function getArticles(){
            $query= "SELECT * FROM produits";
            $stmt=$this->database->prepare($query);
            if($stmt->execute()){
                $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            return $articles;
        }  
    }
?>