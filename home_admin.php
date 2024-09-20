<?php
session_start();
include "inc/functions.php";
$data=getData();
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
        <meta name="viewport" content="width-device-width, initial_scale-1.0">
        <title>Home</title>
        <link rel="stylesheet" href="pgadmin.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <Style>
            body{
           width: 100%;
           background: #E5E7EB;
               position: relative;
              display: flex;
}
#menu{
    background: #111827;
    width: 300px;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
}
#menu .items li:nth-child(1){
    border-left: 4px solid #fff;
}
#interface{
    width: calc(100% - 300px);
    margin-left: 300px;
    position: relative;

}
#interface .navigation{
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #fff;
    padding: 15px 30px;
    border-bottom: 3px solid #594ef7;
    position: fixed;
    width: calc(100% - 300px);

}
.i-name{
    color: #444a53;
    padding: 30px 30px 0 30px;
    font-size: 24px;
    font-weight: 700;
    margin-top: 70px;
}
.n1{
    display: flex;
    justify-content: flex-start;
    align-items: center;
}
#menu-btn{
    display: none;
    color: #2b2b2b;
    font-size: 20px;
    cursor: pointer;
    margin-right: 20px;
    display: initial; //raj3etli cone menu 
}
@media (max-width: 749px) {
    #menu{
        width: 270px;
        position: fixed;
        left: -270px;
        transition: 0.3s ease;
    }
    #menu.active{ 
        left: 0px;
    }
    #menu.active~ #interface{
        width: clac(100% -270px);
        margin-left: 270px;
        transition: 0.3s ease;
    }
    #interface{
        width: 100%;
        margin-left: 0px;
        display: inline-block;
        transition: 0.3s ease;
    }
    #interface .navigation{
        width: 100%;
    }
    .values .val-box{
        padding: 16px 20px;
        margin: 10px 20px 10px 0;
    }
    .board{
        width: 92%;
        padding: 0;
        overflow-x: auto;
    }
    table{
        width: 100%;
        border-collapse: collapse;
    }
    
}

@media (max-width: 477px) {
    #interface .navigation{
        padding: 15px;}
        #interface .navigation .search input{
            width: 150px;

        }
        .i-name{
            padding: 30px 30px 0px 30px;
        }
        .values{
            padding: 30px 30px 0px 30px;
            justify-content: flex-start;   
        }
        .values .val-box{
            width: 100%;
            margin: 8px 0;
        }
        .board{
            margin: 30px 15px 30px 15px;
        }

}
#menu .items li a{
    text-decoration: none;
    color: while;
    font-weight: 300px;
    transition: 0.3s ease;
}
.user-wrapp{
	display: flex;
	align-items: center;
}
.user-wrapp img{
	border-radius: 50%;
	margin-right: 5rem;
}
.user-wrapp small{
	color: #ccc;
	display: inline-block;
}
.logo-admin{
	cursor: pointer;
    
}
#dropdown{
	position: relative;
	display: inline-block;
}
.dropdown-content{
	display: none;
	position: absolute;
	background-color: #f9f9f9;
	min-width: 160px;
	height: 80px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	padding: 5px;
	z-index: 1;
}
.dropdown-content a{
    text-decoration: none;
    color: black;
    padding-top: 10px;
}
#dropdown:hover .dropdown-content{
	display: block;
	cursor: pointer;
}


        </Style>
    </head>
    <body>
        <section id="menu">
            <div class="logo">
                <img src=".." alt="">
            <h2>Fashion</h2>
        </div>
        <div class="items">
            
<li><a href="tablebord.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-bar-graph" viewBox="0 0 16 16">
  <path d="M4.5 12a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-1zm3 0a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1zm3 0a.5.5 0 0 1-.5-.5v-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-.5.5h-1z"/>
  <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
</svg>Table de bord</li></a>
<li><a href="produit.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
  <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>
</svg>Produits</li></a>
<li><a href="categories.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
  <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
</svg>Catégories</a></li>

<li><a href="stock.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reception-4" viewBox="0 0 16 16">
  <path d="M0 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-5zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-8zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-11z"/>
</svg>Stock</li></a>

<li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
  <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
</svg>Feedback</li></a>
<li><a href="profile.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>Profile</li></a>

        </div>
        </section>

        <session id="interface">
            <div class="navigation">
                <div class="n1">
                    <div id="menu-btn" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
</svg></div>
                    <div class="search">
                    <i class="bi bi-search"></i>
                        <input type="search" name="Search" placeholder="Rechercher ici ...">
                    </div>
                </div>
                <div id="dropdown" class="user-wrapp">
                <div>
			<h4>Alassane</h4>
			<small>Admin</small>
		</div>
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="logo-admin" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
  <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg>
		
		<div class="dropdown-content">
			<a href="deconnexion.php">Deconnexion</a>
		</div>

                </div>
            </div>

            <h3 class="i-name">Table de bord</h3>
            <div class="values">
                <div class="val-box">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
</svg>
<div>
    <h3>Nombre Utilisateurs</h3>
    <span><?php echo $data['visiteur']; ?></span>
</div>


                </div>
                <div class="val-box">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>
<div>
    <h3>Panier</h3>
    <span>...</span>
</div>


                </div>
                <div class="val-box">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
  <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>
</svg>
<div>
    <h3>Totale Des Produits</h3>
    <span><?php echo $data['produit']; ?></span>
</div>


                </div>
                
            </div>
            <div class="board">
                <table width="100%">
                    <thread>
                        <tr>
                            <td>Nom Client</td>
                            <td>Prix</td>
                            <td>Stock</td>
                            <td>Validation</td>
                            <td>Refuser</td>
                        </tr>
                    </thread>
                    <tbody>
                        <tr class="people">
                            <td>
                                <div class="people-de">
                                    <h5>esm 1</h5>
                                    <p>mail ta3ou</p>

                                </div>
                            </td>
                            <td>
                                <div class="people-des">
                                    <p>80dt</p>

                                </div>
                            </td>
                            <td class="active"><p>prix</p></td>
                            <td class="active"><a href="">Valider</a></td>
                            <td class="refue"><a href="">Refuser</a></td>
                        </tr>

                    </tbody>
                </table>
            </div>


        </session>
        <script>
            $('#menu-btn').click(function(){
                $('#menu').toggleClass("active");

            })
        </script>
    </body>

</html>