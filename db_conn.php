<?php
function connect(){
    $servername="localhost";
    $DBuser = "root";
    $DBpassword = "";
    $DBname = "ecommerce";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return null; // Ajoutez cette ligne pour renvoyer null en cas d'échec de la connexion
    }
    return $conn;
}
return connect(); // Ajoutez cette ligne pour retourner la connexion à la base de données
?>