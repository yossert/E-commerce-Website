
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-SHOP</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-95QPykgF8w/M/MCgz1KY05G2fZN4eT40ePsP+Ksod5ldffS4vCtK0ee+t+wIYpSRiLjQgp9h44bHhV7VQ8jY/g==" crossorigin="anonymous" referrerpolicy="no

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style_produit.css">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Merriweather:ital@1&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Playfair:ital@1&display=swap');
body {
        background-color: #f2f2f2; /* Remplacez cette valeur par la couleur de fond souhaitée */
    }
    .card {
    width: 300px;
    height: 500px;
    margin: 20px;
    margin-bottom: 30px;
    top:70px;
    background-color: #9fddf0;
    border:6px ,black;
    
    }  
    .image-container {
    width:310px;
    height: 300px;
    display: flex;
    justify-content: center;
    }
    .image-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-fit: contain;
    }
    .image-container img:hover {
    word-spacing: 0.5rem;
    font-size: 2.2rem;
    cursor:pointer;
    width:110%;
    height:101%;}

    .card-body {
    height: 30%;
    width: 100%;
    display: flex;
    background: black;
    flex-direction: column;
    justify-content: center;
    justify-content: space-between;
    text-align: center;
    text-decoration: none;
}


    .card-title {
        margin-bottom: 10px;
        justify-content: center;
        color: white;
        font-size: 1.8rem;
        padding-left: 2rem;
        font-family: 'Josefin Sans', sans-serif;
        font-family: 'Merriweather', serif;
        font-weight: lighter;
        text-decoration: none;

    }
    .card .card-title:hover{
        color:#F08080;
    word-spacing: 0.5rem;
    font-size: 2.2rem;
    cursor:pointer;
    padding-left: 1rem;
    }

    .card-text {
        font-size: 1.75rem;
        margin-bottom: 10px;
        text-align: center;
        color: #7cecf0;
        font-family: 'Josefin Sans', sans-serif;
        font-family: 'Playfair', serif;
        text-decoration: none;
    }

    .icons a {
    text-decoration: none;
    padding: 15px;
    font-size: 2em;
    transition: 1s;
    color:#F08080;
}
.icons a:hover{
    color:#35cdf3;
    word-spacing: 0.5rem;
    font-size: 3rem;
    cursor:pointer;
    padding-left: 1rem;
}


    </style>
    <body>
        <?php
             // Assurez-vous d'inclure le fichier de connexion à la base de données
        include "inc/header_reste.php";
        
        
    function connect()
    {
        $servername = "localhost";
        $DBuser = "root";
        $DBpassword = "";
        $DBname = "ecommerce";
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            return null; // Ajoutez cette ligne pour renvoyer null en cas d'échec de la connexion
        }
        return $conn;
    }

    $conn = connect(); // Appel de la fonction connect() pour obtenir la connexion à la base de données


        if (isset($_GET['id'])) {
        $id = $_GET['id'];
        // Vous pouvez également effectuer une validation de l'ID ici si nécessaire

        // Ensuite, vous pouvez utiliser cet ID pour récupérer les données de la base de données
        // en effectuant une requête SQL appropriée
        $sql = "SELECT * FROM prodcat WHERE categorie = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        // Maintenant, vous pouvez récupérer les données de chaque ligne correspondant à l'ID de la catégorie

            echo '<div class="card-columns">';
                echo '<div class="row">';
                $cardCount = 0;
                while ($row = $stmt->fetch()) {
                    if ($cardCount % 4 == 0 && $cardCount != 0) {
                echo '</div>
                <div class="row">';
                    }
                echo '<div class="col-md-3">';
                    echo '<div class="card">
                            <a href ="#" class="image-container">
                                <img src="cat1/' . $row['images'] . '" class="card-img-top" alt="Image du produit">
                            </a>
                            <div href ="#" class="card-body">
                                <h5 class="card-title">' . $row['nom'] . '</h5>
                                <p class="card-text">Prix : ' . $row['prix'] . '</p>
                                <div class="stars">
                                    <span class="material-symbols-outlined">star</span>
                                    <span class="material-symbols-outlined">star</span>
                                    <span class="material-symbols-outlined">star</span>
                                    <span class="material-symbols-outlined">star</span>
                                    <span class="material-symbols-outlined">star</span>
                                </div>
                                <div class="icons">
                                <a href="prodcate.php?id='. $row['id'] .'"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-share"></a>
                                </div>
                            </div>
                        </div>
                    </div>'
                ;
                $cardCount++;
                }
                echo '</div>'; // Fermez la balise <div class="row">
            echo '</div>'; // Fermez la balise <div class="card-columns">
            } else {
                echo "Aucun ID de catégorie spécifié.";
            }
            ?>
        </div>
        </section>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>