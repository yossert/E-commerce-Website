<!DOCTYPE html>
<html>
    <head>
        <title>Creer un compte</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            body{
    background: url(fo.png) no-repeat center center/cover;
}
        </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
    
            <form   class="shadow w-450 p-3" 
                    action="signup.php" 
                    method="post">
                <h1 class ="display-4 text-center">Creer un compte</h1><br>
                <?php if(isset($_GET['error'])){ ?>
                <div class="alert alert-warning" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
                <?php } ?>
                <?php if(isset($_GET['success'])){ ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_GET['success']; ?>
                </div>
                <?php } ?>
                <div class="mb-3">
                <label  class="form-label">Nom</label>
                <input  type="text" 
                        class="form-control"
                        name="nom"
                        value="<?php echo (isset($_GET['nom']))?$_GET['nom']:"" ?>">
            </div>
            
            <div class="mb-3">
                <label class="form-label">email</label>
                <input  type="email" 
                        class="form-control"
                        name="email"
                        value="<?php echo (isset($_GET['email']))?$_GET['email']:"" ?>">

            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input  type="password" 
                        class="form-control"
                        name="mp"
                >
            </div>
            <div class="mb-3">
                <label class="form-label">telephone</label>
                <input  type="text" 
                        class="form-control"
                        name="telephone"
                        value="<?php echo (isset($_GET['telephone']))?$_GET['telephone']:"" ?>">
            </div>

            <button type="submit" class="btn btn-warning">creer</button>
            <a href="login.php"  class="link-secondary" > Se connecter</a>
        </form>
    </div>
</body>
</html>
