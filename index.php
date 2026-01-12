<?php
session_start();
//     class Visiteur{
//         private $nbreVisite;
//         public function __construct($visite=0){
//             $this->nbreVisite = $visite;
//         }
//         public function increment(){
//             if(@$_SESSION['oui'] !== "oui"){
//                 $this->nbreVisite++;
//                 $_SESSION['oui'] = "oui";
//             }
//             return $this->nbreVisite;
//         }
//     }
//     $visiteur = new Visiteur;
//     echo $visiteur->increment();
    include_once('controller/controller.php');
?>