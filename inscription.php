<?php
include "inc/functions.php";
$categories=getAllCategories();
$showRestrationAlertemail=0;
if(empty($_POST)){
    if(addVisteur($_POST)){
    $showRestrationAlert=1;
    }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-SHOP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.css" >
    </head>
    <body>
    <?php
            include "inc/header.php";
            $categories=getAllCategories();
            if(!empty($_POST)){
                addVisteur($_POST);
            }
        ?>
        <div class="d-flex justify-content-center align-items-center vh-100">
    <form   class="shadow w-450 p-3" 
            action="inc/signup.php" 
            method="post">
        <h1 class ="display-4 text-center">Creer un compte</h1><br>
        <?php if(isset($_GET['error'])){ ?>
        <div class="alert alert-warning" role="alert">
            <?php echo $_GET['error']; ?>
        </div>
        <?php } ?>
        <div class="mb-3">
        <label  class="form-label">Email address</label>
        <input  type="email" 
                class="form-control"
                name="uname"
                value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Nom</label>
        <input  type="text" 
                class="form-control"
                name="nom"
                value="<?php echo (isset($_GET['nom']))?$_GET['nom']:"" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Prenom</label>
        <input  type="text" 
                class="form-control"
                name="uprenom"
                value="<?php echo (isset($_GET['uprenom']))?$_GET['uprenom']:"" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Telephone</label>
        <input  type="text" 
                class="form-control"
                name="tl"
                value="<?php echo (isset($_GET['tl']))?$_GET['tl']:"" ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input  type="password" 
                class="form-control"
                name="pass">
    </div>
    <button type="submit" class="btn btn-warning">creer</button>
    <a href="connexion.php"  class="link-secondary" > Se connecter</a>
</form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.all.min.js"></script>
<script>
    <?php
    if($showRestrationAlert == 1){
        print "
    <script>
          Swal.fire({
  title: 'Success!',
  text: 'Creation de compte avec succes',
  icon: 'success',
  confirmButtonText: 'Cool',
})
    </script>
    
    ";}
     ?>
</script>
        </body>
    </html>