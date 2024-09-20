<?php
include "inc/functions.php";
if(isset($_GET['id'])){
    $produit=getProduitsById($_GET['id']);
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-SHOP</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-95QPykgF8w/M/MCgz1KY05G2fZN4eT40ePsP+Ksod5ldffS4vCtK0ee+t+wIYpSRiLjQgp9h44bHhV7VQ8jY/g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style_produit.css">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Merriweather:ital@1&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Playfair:ital@1&display=swap');  

body{
    background: rgba(176, 224, 220, 0.301);
}
.main-section{
    display: flex;
}
.card-container {
    margin-top: 100px; /* Ajoutez la valeur souhaitée pour déplacer la carte vers le bas */
    margin-right: 50px;
    margin-left: 80px;
    display: flex;
}
    .card-container2 {
    margin-top: 100px;
    width:40%;
    display: flex;
    }

    .footer {
    width: 100%;
    height: 60px;
    position: fixed;
    bottom: 0;
    background-color: #212529;
    }

    .card-body{
        align-self: center;
    }

    .upper{
        height: 80%;
        width: 100%;
    }
    .lower{
        width: 100%;
        height: 20%;
        
    }

    .col-md-4{
    width:500px;
    height: 400px;
    border: 3px solid rgba(16, 85, 79, 0.637);
    display: flex;
    justify-content: center;
    background:#f8cad09c;
    }
    .col-md-8{
        background:#f8cad09c;
        border: 3px solid rgba(16, 85, 79, 0.637);

    }

    .col-md-4 img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-fit: contain;
    }
    .row {
            justify-content: center;
        }
        .card-title{
            margin-bottom: 10px;
        justify-content: center;
        color: black;
        font-size: 1.8rem;
        padding-left: 2rem;
        font-family: 'Josefin Sans', sans-serif;
        font-family: 'Merriweather', serif;
        font-weight: lighter;
        text-align: center;
        text-decoration: none;
        }

        .card-text {
        font-size: 1.75rem;
        margin-bottom: 10px;
        text-align: center;
        color:;
        font-family: 'Josefin Sans', sans-serif;
        font-family: 'Playfair', serif;
        text-decoration: none;
    }
    .list-group-item{
        font-size: 1.75rem;
        margin-bottom: 10px;
        text-align: center;
        color: black;
        font-family: 'Josefin Sans', sans-serif;
        font-family: 'Playfair', serif;
        text-decoration: none;
    }

    .star-yellow {
    color: yellow;
}

    </style>
    </head>
    <body>
        <?php
            include "inc/header_reste.php";
        ?>
        <div class="main-section">
            <div class="card-container">
                <div class="card mb-3" style="max-width: 700px; max-height: 600px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/<?php echo $produit['image']; ?>" class="img-fluid rounded-start" alt="image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-container2">
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $produit['nom'] ?></h5>
                        <p class="card-text"><?php echo $produit['description'] ?></p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?php echo $produit['prix'] ?> DT</li>
                        </ul>
                        <div class="stars">
                        <span class="material-symbols-outlined star-yellow">star</span>
                        <span class="material-symbols-outlined star-yellow">star</span>
                        <span class="material-symbols-outlined star-yellow">star</span>
                        <span class="material-symbols-outlined star-yellow">star</span>
                        <span class="material-symbols-outlined star-yellow">star</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="upper">
                <div id="b"></div>
                <div id="b"></div>
                <div id="b"></div>
                <div id="b"></div>
            </div>
            <div class="lower"></div>
        </div>
    </body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>