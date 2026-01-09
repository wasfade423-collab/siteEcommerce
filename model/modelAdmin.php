<?php
    class ModelAdmin{
        public $database;
        public function __construct(){
            $this->database = new PDO('mysql:host=localhost;dbname=sitecommerce;charset=utf8', 'root','');
        }
        public function connect($id){
            $query = "SELECT admin.nom, admin.pass FROM admin WHERE id= :id";
            $stmt = $this->database->prepare($query);
            if($stmt->execute(['id'=>$id])){
                $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
                return $resultat;
            }
        }
        public function getArticles($categorie){
            $query= "SELECT * FROM produits WHERE status = :categorie";
            $stmt=$this->database->prepare($query);
            if($stmt->execute(['categorie'=>$categorie])){
                $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            return $articles;
        }  
        

        public function update($id, $cartName, $prix, $status, $nbreyellow, $nbreboth, $nbrevide, $courteDescription){
            $query= "UPDATE produits SET produits.cartName =:cartName, produits.prix =:prix, produits.status =:status, produits.nbreyellow =:nbreyellow, produits.nbreboth =:nbreboth, produits.nbrevide =:nbrevide, produits.courteDescription =:courteDescription WHERE id =:id";
            $stmt = $this->database->prepare($query);
            if($stmt->execute(['id'=>$id, 'cartName'=>$cartName, 'prix'=>$prix, 'status'=>$status, 'nbreyellow'=>(int)$nbreyellow, 'nbreboth'=>(int)$nbreboth, 'nbrevide'=>(int)$nbrevide, 'courteDescription'=>$courteDescription])){
                return true;
            }else{
                return false;
            }
        }

        public function setArticle($cartName, $prix, $status, $nbreyellow, $nbreboth, $nbrevide, $courteDescription){
            $query= "INSERT INTO produits (produits.cartName, produits.prix, produits.status, produits.nbreyellow, produits.nbreboth, produits.nbrevide, produits.courteDescription) VALUES (:cartName, :prix, :status, :nbreyellow,:nbreboth, :nbrevide, :courteDescription)";
            $stmt = $this->database->prepare($query);
            if($stmt->execute(['cartName'=>$cartName, 'prix'=>$prix, 'status'=>$status, 'nbreyellow'=>(int)$nbreyellow, 'nbreboth'=>(int)$nbreboth, 'nbrevide'=>(int)$nbrevide, 'courteDescription'=>$courteDescription])){
                return true;
            }else{
                return false;
            }
        }
        public function getArticle($id){
            $query = "SELECT * FROM produits WHERE id= :id";
            $stmt = $this->database->prepare($query);
            if($stmt->execute(['id'=>$id])){
                return $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
            }
        }         
        public function dropArticle($id){
            $query = "DELETE FROM produits WHERE id =:id ";
            $stmt = $this->database->prepare($query);
            if($stmt->execute(['id'=>$id])){
                return true;
            }else{
                return false;
            }
        }  
    }
?>