<?php 
session_start();
$id=$_POST['idc'];
$nom=$_POST['nom'];
$description=$_POST['description'];
include "functions.php";
$conn = connect();

$req="UPDATE categorie SET nom='$nom', description='$description' WHERE id='$id'";
$res=$conn->query($req);
if($res){
    header('location:categories.php?modif=ok');
}
?>