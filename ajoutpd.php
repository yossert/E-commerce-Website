<?php
//session_start(); ved21
//1 recuperation des donnés de la formule
$nom=$_POST['nom'];
$description=$_POST['description'];
$prix=$_POST['prix'];

$categorie=$_POST['categorie'];
//upload image
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    $image=$_FILES["image"]["name"];

} else {
    echo "Sorry, there was an error uploading your file.";
  }

//2 la chaine de connection
include "functions.php";
$conn=connect();

try{
    //3 creation de la requette d'execution
    $req="INSERT INTO produit (nom,description,prix,image,categorie) Values ('$nom','$description','$prix','$image','$categorie')";
    //4 excecution de requette
     $resultat=$conn->query($req);
    if($resultat){
        header('location:produit.php?ajout=ok');} 
} catch(PDOException $e) {
    if( $e->getcode()==23000){
        header('location:produit.php?erreur=duplicate');
        
    }
    }
