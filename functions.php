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
        }
        return $conn;
}
function getAllCategories(){
    $conn=connect();
$requette="SELECT * FROM categories";
$resultat=$conn->query($requette);
$categories=$resultat->fetchAll();
return $categories;
}
function getAllProduits(){
    $conn=connect();
    $requette="SELECT * FROM produits";
    $resultat=$conn->query($requette);
    $produits=$resultat->fetchAll();
    return $produits;
}
function searchProduit($keywords){
    $conn=connect();
$requette="SELECT * FROM produits WHERE nom LIKE '%$keywords%' ";
$resultat=$conn->query($requette);
$produits=$resultat->fetchAll();
return $produits;
}
function afficheCat($keywords){
    $conn=connect();
$requette="SELECT * FROM categorie";
$resultat=$conn->query($requette);
$cat=$resultat->fetchAll();
return $cat;
}
function getProduitsById($id){
    $conn=connect();
    $requette="SELECT * FROM produits WHERE id='$id'";
    $resultat=$conn->query($requette);
    $produit=$resultat->fetch();
    return $produit;
}
function getProdcatById($id){
    $conn=connect();
    $requette = "SELECT * FROM prodcat WHERE id='$id'";

    $resultat=$conn->query($requette);
    $prodcat=$resultat->fetch();
    return $prodcat;
}
function getProd(){
    $conn=connect();
    $requette = "SELECT * FROM prodcat";

    $resultat=$conn->query($requette);
    $prod=$resultat->fetchAll();
    return $prod;
}
function ConnectVisitor($postData)
{
    // Vérifier les données de connexion (email et mot de passe)
    $email = $_POST['email'];
    $email=mysqli_real_escape_string($con,$email);
    $password = $_POST['password'];
    $password=mysqli_real_escape_string($con,$password);
    $password=md5($password);
    // Effectuer la validation de l'utilisateur dans la base de données
    $pdo = new PDO("mysql:host=localhost;dbname=ecommerce", "root", "");

    $stmt = $pdo->prepare("SELECT * FROM visiteur WHERE email = :email AND mp = :password");
    $stmt->execute(['email' => $email, 'password' => $password]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // L'utilisateur est authentifié, vous pouvez stocker les informations de l'utilisateur dans la session ou prendre d'autres mesures nécessaires
        // Exemple : $_SESSION['user'] = $user;
        echo "Connexion réussie";
    } else {
        echo "Identifiants invalides";
    }
}
function ConnectAdmin($data){
    $conn=connect();
    $email=$data['email'];
    $mp=$data['mp'];
    $requette="SELECT * FROM administrateur WHERE email='$email' AND mp='$mp' ";
    $resultat=$conn->query($requette);
    $user=$resultat->fetch();
    return $user;

}
function getData(){
    $data=array();
    $conn=connect();

//calculer le nombre des produits dans la base
    $requette="SELECT COUNT(*) FROM prodcat ";
    $resultat=$conn->query($requette);
    $nbrProduit=$resultat->fetch();
    

//calculer le nombre des visiteurs dans la base
$requette="SELECT COUNT(*) FROM visiteur ";
$resultat=$conn->query($requette);
$nbrClient=$resultat->fetch();

$data["produit"]=$nbrProduit[0];//hatena zero 5ater bch trajaa ligne khw
$data["visiteur"]=$nbrClient[0];



    return $data;

}

function RegisterUser($postData)
{
    // Récupérer les données du formulaire d'inscription
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Effectuer la validation des données (par exemple, vérifier si les mots de passe correspondent, si l'email est unique, etc.)

    if ($password !== $confirmPassword) {
        echo "Les mots de passe ne correspondent pas.";
        return;
    }

    // Effectuer l'insertion de l'utilisateur dans la base de données
    $pdo = new PDO("mysql:host=localhost;dbname=ecommerce", "root", "");

    $stmt = $pdo->prepare("INSERT INTO visiteur (nom, email, mp, telephone) VALUES (:nom, :email, :mp, :telephone)");
    $stmt->execute(['nom' => $username, 'email' => $email, 'mp' => $password, 'telephone' => $phone]);

    echo "Inscription réussie";
}
?>