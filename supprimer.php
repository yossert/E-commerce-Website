<?php 
$idcategorie = $_GET['idc'];
include "functions.php";
$conn=connect();
$req="DELETE FROM categorie WHERE id ='$idcategorie'";
$resultat=$conn->query($req);
if($resultat){
    header('location:categories.php?delete=ok');
}
?>