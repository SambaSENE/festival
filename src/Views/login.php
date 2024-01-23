<?php

use App\Dao\UserDao;


$login = new UserDao();

if(isset($_POST) && !empty($_POST['mail_user']) && !empty($_POST['pass_user'])){
    if($login->login($_POST['mail_user'] , $_POST['pass_user'])){
        header('Location: http://localhost/MVC/TP_MVC/festival/user/profil');

    }else{
        echo  'Identifiant ou mot de passe invalide';
    }
    
}else {
    echo  "Tous les sont obligatoires";
}


?>
<form action="" method="POST" class=" w-25 p-3 ">
    <fieldset>
        <legend>Login</legend>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="mail_user" id="email" placeholder="Email">
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="pass_user" id="password">
        </div>
        <input type="submit" value="Login" class="btn btn-success">
    </fieldset>
</form>