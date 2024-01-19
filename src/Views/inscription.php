<?php

use App\Controllers\DepartementController;

$dept = new DepartementController();

echo "<pre>";
    var_dump();
echo "</pre>";
while($obj = $dept->findDept()){
    echo $obj->id_dept;
}
?>
<form method="POST" style="max-width: 20rem;">
    <fieldset>
        <legend>Inscription</legend>
        <div class="form-group">
            <label for="name" class="form-label mt-4">Lastname :</label>
            <input type="text" class="form-control" name="lastname_user" id="name" aria-describedby="name" placeholder="Enter your lastname">
        </div>
        <div class="form-group">
            <label for="name" class="form-label mt-4">Firstname :</label>
            <input type="text" class="form-control" name="firstname_user" id="name" aria-describedby="name" placeholder="Enter your lastname">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
            <input type="email" class="form-control" name="mail_user" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
            <input type="password" class="form-control" name="pass_user" id="exampleInputPassword1" placeholder="Password" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="verifPassword" class="form-label mt-4">verification password</label>
            <input type="password" class="form-control" name="verifpass_user" id="exampleInputPassword1" placeholder="Password" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="age_user" class="form-label mt-4">Age</label>
            <input type="number" class="form-control" name="age_user" id="age" placeholder="age" min="18" max="99" autocomplete="on">
        </div>
        <div class="form-group">
            <label for="dept_user" class="form-label mt-4">Departement</label>
            <select class="form-select" name="dept_user" id="dept_user">
                <option value="">--</option>
                <?php foreach ($dept->findDept() as $key => $value): ?>
                    <option value="<?= $key["id_dept"]?>"><?= $value["name_dept"] ?></option>
                <?php endforeach ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Valider</button>
    </fieldset>
</form>