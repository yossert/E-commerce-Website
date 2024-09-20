<?php

if( isset($_POST['uname']) && 
    isset($_POST['nom']) && 
    isset($_POST['uprenom']) &&
    isset($_POST['tl']) &&  
    isset($_POST['pass'])){
        include "db_conn.php";
        $conn=connect();
        $uname = $_POST['uname'];
        $nom = $_POST['nom'];
        $uprenom = $_POST['uprenom'];
        $pass = $_POST['pass'];
        $tl = $_POST['tl'];
        if (empty($uname)){
            $em="Veuillez renseigner votre email";
            header("Location: ../inscription.php?error=$em");
            exit;
        }else if(empty($nom)){
            $em = "Veuillez renseigner votre nom";
            header("Location: ../inscription.php?error=$em");
            exit;
        }
    else if(empty($uprenom)){
        $em = "Veuillez renseigner votre prenom";
        header("Location: ../inscription.php?error=$em");
        exit;
    }else if(empty($tl)){
    $em = "Veuillez renseigner votre numero";
    header("Location: ../inscription.php?error=$em");
    exit;
}
        else if(empty($pass)){
            $em = "Veuillez renseigner votre password";
            header("Location: ../inscription.php?error=$em");
            exit;
        }
        else{
            $pass = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO visiteur(nom,email,prenom,mp,telephone) 
                    VALUES(?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$nom,$uname,$uprenom,$pass,$tl]);
            header("Location: ../inscription.php");
            exit;
        }}
else {
    header("Location: ../inscription.php?error=error");
    exit;
    }
?>