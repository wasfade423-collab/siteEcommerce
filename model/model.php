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
        
        

        
        
        
        
        
        
        
        
        
        
        
        
        
        
       
       
       
       
        //admin
        public function connect(){
            $id = 1;
            $query = "SELECT admin.nom, admin.pass FROM admin WHERE id =:id";
            $stmt = $this->database->prepare($query);
            if($stmt->execute(['id'=>$id])){
                return $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
            }else{
                return "Erreur serveur";
            }
        }
        
        public function setArticle($cartName, $prix, $status, $nbreyellow, $nbreboth, $nbrevide, $courteDescription, $lescouleurs, $cartImg){
            $query = "INSERT INTO produits (produits.cartName, produits.prix, produits.status, produits.nbreyellow, produits.nbreboth, produits.nbrevide, produits.courteDescription, produits.lescouleurs, produits.cartImg) VALUES (:cartName, :prix, :status, :nbreyellow, :nbreboth, :nbrevide, :courteDescription, :lescouleurs, :cartImg)";
            $stmt = $this->database->prepare($query);
            if($stmt->execute(['cartName'=>$cartName, 'prix'=>$prix, 'status'=>$status, 'nbreyellow'=>(int)$nbreyellow, 'nbreboth'=>(int)$nbreboth, 'nbrevide'=>(int)$nbrevide, 'courteDescription'=>$courteDescription, 'lescouleurs'=>json_encode($lescouleurs), 'cartImg'=>$cartImg])){
                return true;
            }
            else{
                return false;
            }
        } 
        public function deleteArticle($id){
            $query = "DELETE FROM produits WHERE id =:id";
            $stmt = $this->database->prepare($query);
            if($stmt->execute(['id'=>$id])){
                return true;
            }else{
                return false;
            }
        }    
        public function update($id, $cartName, $prix, $status, $nbreyellow, $nbreboth, $nbrevide, $courteDescription, $lescouleurs, $cartImg){
            $query = "UPDATE produits SET produits.cartName =:cartName, produits.prix =:prix, produits.status =:status, produits.nbreyellow =:nbreyellow,  produits.nbreboth =:nbreboth, produits.nbrevide =:nbrevide, produits.courteDescription =:courteDescription, produits.lescouleurs =:lescouleurs, produits.cartImg =:cartImg WHERE id=:id";
            $stmt = $this->database->prepare($query);
            if($stmt->execute(['id'=>$id, 'cartName'=>$cartName, 'prix'=>$prix, 'status'=>$status, 'nbreyellow'=>(int)$nbreyellow, 'nbreboth'=>(int)$nbreboth, 'nbrevide'=>(int)$nbrevide, 'courteDescription'=>$courteDescription, 'lescouleurs'=>json_encode($lescouleurs), 'cartImg'=>$cartImg])){
                return true;
            }
            else{
                return false;
            }
        } 
        public function getVisitor(){
            $query = "SELECT visit FROM admin";
            $stmt = $this->database->prepare($query);
            if($stmt->execute()){
                return $stmt->fetchColumn();
            }
        }
        public function setVisitor($visit){
            $query = "UPDATE admin SET admin.visit =:visit";
            $stmt = $this->database->prepare($query);
            if($stmt->execute(['visit'=>$visit])){
                return true;
            }
        }
    }
?>