<?php

use App\Dao\UserDao;
use App\Models\DepartementModel;


$dept = new DepartementModel();
$user = new UserDao();
var_dump($_POST);
$user->addUser();

// if (isset($_POST)) {
//         if (!empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['email'])  && !empty($_POST['pass_user']) && !empty($_POST['verifPass']) && !empty($_POST['age_user'])  && !empty($_POST['dept_user'])) {
//                 if (password_verify($_POST['verifPass'], $_POST['pass_user'])) {
//             if(filter_var($_POST['email'] , FILTER_VALIDATE_EMAIL)){
                
                    
                
//             }
//         }else {
//             echo  'error';
//         }
//     }
// }



?>
<form class="w-25 p-3" method="POST">

    <div class="mb-3">
        <label for="lastname" class="form-label">Lastname </label>
        <input type="text" class="form-control" name="lastname" id="lastname">
    </div>
    <div class="mb-3">
        <label for="firstname" class="form-label">Firstname </label>
        <input type="text" class="form-control" name="firstname" id="fisrtname">
    </div>
    <div class="mb-3">
        <label for="mail_user" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="mail_user">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="pass_user" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="verifpass">Verification mot de passe</label>
        <input type="password" name="verifPass" id="verifpass" class="form-control">
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">choisissez un departement</label>
        <select class="form-select" name="dept_user" aria-label="Default select example">
            <option selected>---</option>
            <?php foreach ($dept->getDept() as $key => $value) : ?>
                <option value="<?= $value->id_dep ?>"><?= $value->name_dep ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="age_user">Age</label>
        <input type="number" class="form-control" name="age_user" id="age_user">

    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
</form>