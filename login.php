<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/codec.css"/>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
    
            <form   class="shadow w-450 p-3" 
                    action="loginp.php" 
                    method="post">
                <h4 class ="display-4 text-center">Login</h4><br>
                <?php if(isset($_GET['error'])){ ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
                <?php } ?>
                
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
                        name="mp">
            </div>

            <button type="submit" class="btn btn-primary">Se connecter</button>
            <a href="creation.php" class="link-secondary">Vous n'avez pas un compte</a>
        </form>
    </div>
</body>
</html>
