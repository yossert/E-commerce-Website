<?php
include "inc/functions.php";
$categories=getAllCategories();
if(!empty($_POST)){
  ConnectVisteur($_POST);

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="sti.css"/>
        <title>Formulaire</title>
</head>
<body>
    <div class="container">
        <nav>
        <div class="logo">
        <a href="../index.php"><h2>Fashion</h2></a>
        </div>
        </nav>
        <section>
            <div class="sec-container">
                <div class="form-wrapper">
                    <div class="card">
                        <div class="card-header">
                            <div id="forLogin" class="form-header active">Se connecter</div>
                            <div id="forRegister" class="form-header">S'inscrire</div>
                        </div>
                        <div class="card-body" id="formContainer">
                            <form id="loginForm">
                                <input type="email" class="form-control" placeholder="@Adresse e-mail"/>
                                <input type="password" class="form-control" placeholder="@Mot de passe"/>
                                <button class="formButton">Connexion</button>
                            </form>
                            <form id="registerForm" class="toggleForm">
                                    <input type="text" class="form-control" placeholder="@utilisateur"/>
                                    <input type="email" class="form-control" placeholder="@Adresse e-mail"/>
                                    <input type="tel" class="form-control" placeholder="@Numéro de téléphone"/>
                                    <input type="password" class="form-control" placeholder="@Mot de passe"/>
                                    <input type="password" class="form-control" placeholder="@Confirmer mot de passe"/>
                                    <button class="formButton">Inscription</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    
    <script>
        const displayForm = _('displayForm');
            const forlogin= _('forLogin');
            const loginForm= _('loginForm');
            const forRegister= _('forRegister');
            const registerForm= _('registerForm');
            const formContainer= _('formContainer');

            forlogin.addEventListener('click',()=>{
                forlogin.classList.add('active');
                forRegister.classList.remove('active');
                if(loginForm.classList.contains('toggleForm')){
                    formContainer.style.transform='translate(0%)';
                    formContainer.style.transition='transform .5s';
                    registerForm.classList.add('toggleForm');
                    loginForm.classList.remove('toggleForm');
                }
            });

            forRegister.addEventListener('click',()=>{
                forlogin.classList.remove('active');
                forRegister.classList.add('active');
                if(registerForm.classList.contains('toggleForm')){
                    formContainer.style.transform='translate(-100%)';
                    formContainer.style.transition='transform .5s';
                    registerForm.classList.remove('toggleForm');
                    loginForm.classList.add('toggleForm');
                }
            });

        function _(e) {
            return document.getElementById(e);
            
        }
    </script>
</body>
</html>