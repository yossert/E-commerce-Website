<?php
//session_start(); ved21
//1 recuperation des donnés de la formule
$nom=$_POST['nom'];
$description=$_POST['description'];
//2 la chaine de connection
include "functions.php";
$conn=connect();

try{
    //3 creation de la requette d'execution
    $req="INSERT INTO categorie (nom,description) Values ('$nom','$description')";
    //4 excecution de requette
     $resultat=$conn->query($req);
    if($resultat){
        header('location:categories.php?ajout=ok');} 
} catch(PDOException $e) {
    if( $e->getcode()==23000){
        header('location:categories.php?erreur=duplicate');
        
    }
    }



?>