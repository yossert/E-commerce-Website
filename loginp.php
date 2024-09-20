
<?php 
session_start();

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

if(isset($_POST['email']) && 
    isset($_POST['mp'])){

    include "db_conn.php";

    $email = $_POST['email'];
    $mp = $_POST['mp'];

    $data = "email=".$email;
    
    if(empty($email)){
    	$em = "Veuillez renseigner votre user name";
    	header("Location: login.php?error=$em");
	    exit;
    }else if(empty($mp)){
    	$em = "Veuillez renseigner votre password";
    	header("Location: login.php?error=$em");
	    exit;
    }else {

    	$sql = "SELECT * FROM visiteur WHERE email = ?";
    	$stmt = $conn->prepare($sql);
    	$stmt->execute([$email]);

        if($stmt->rowCount() == 1){
            $user = $stmt->fetch();

            $email=  $user['email'];
            $mp =  $user['mp'];
            $nom =  $user['nom'];
            $id =  $user['id'];
            gettype($mp);
            gettype($mp);
            if($email === $email){
                if(password_verify($mp, $mp)){
                    $_SESSION['id'] = $id;
                    $_SESSION['nom'] = $nom;
                    header("Location: index.php");
                    
                    exit;
                }else {
                $em = "Le password est incorrect ! Essayez à nouveau.";
                header("Location: login.php?error=$em");
                exit;
            }

            }else {
            $em = "Le compte n'existe pas ! Essayez à nouveau.";
            header("Location: login.php?error=$em");
            exit;
            }

        }else {
            $em = "Le compte n'existe pas ! Essayez à nouveau.";
            header("Location: login.php?error=$em");
            exit;
        }
    }


}else {
	header("Location: ../login.php?error=error");
	exit;
}