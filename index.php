<?php
include "inc/functions.php";
if(!empty($_POST)){ //bouton search clicked
    $produits=searchProduit($_POST['Search']);
}else{
$produits=getAllProduits();
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-SHOP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <title>E-SHOP</title>
    <link rel="stylesheet" href="style.css">
    <style>

.im {
    display: flex;
}
.im img:first-child {
    border: 6px solid grey ;
}

.im img {
    width: 50%;
    height: 40%;
    display: inline-block;
    margin-right: 10px;
    margin-left: 10px;
    margin: 60px;
    padding: 10px;
}



.custom-card {
    width: 12rem;
    height: 100%;
    background-color: black;
}
.card-img-top{
    height:130px;
}

.card-title{
    font-family: Mulish;
    height: 50px;
    font-size: 12px;
    text-align: center;
    color: white;
}
.card-text {
    height: 80px;
    font-size: 11px;
    text-align: center;
    color: white;
}
.btn btn-primary{
    position: center;
    height: 30px;
}
.col{
    border-radius: 2rem;
    background: black;
    border: 2px solid black;
    font-size: 2rem;
    transition: 1s;

}
.col:hover{
    word-spacing: 0.5rem;
    font-size: 2.2rem;
    cursor:pointer;
    padding-left: 1rem;
}
.row{
    margin-left: 30px;
}
.btn{
    align: center;

}

</style>

    </head>
    <body>
        <?php
            include "inc/header.php";
        ?>
        <P class="heading">Decouvrir</P>
        <div class="underline"></div>
        <div class="slider">
        <div class="row col-15 mt-5 d-flex align-items-stretch">
    <?php foreach($produits as $produit) { ?>
        <div class="col">
            <div class="card custom-card">
                <img src="images/<?php echo $produit['image']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $produit['nom']; ?></h5>
                    <p class="card-text"><?php echo $produit['description']; ?></p>
                    <div class="text-center">
                        <a href="proddecouvrir.php?id=<?php echo $produit['id']; ?>" class="btn btn-primary">Voir</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
        </div>
        </div>
        <div class="im">
            <img src ="https://images.pexels.com/photos/3912572/pexels-photo-3912572.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
            <img src ="https://images.pexels.com/photos/1926620/pexels-photo-1926620.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
        </div>

        

        <div class="bg-dark text-center p-5 mt-4">
            <p class="text-white">
                tout les droits réservées 2023
            </p>
        </div>
        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>