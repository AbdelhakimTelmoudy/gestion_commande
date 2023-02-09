<?php

require_once('./services/ManagerProduit.php');

if (!empty($_POST['last_name']) && !empty($_POST['first_name']) && !empty($_POST['job'])) {
    $p = new Produit(1, 'cafe', 1, 12, 11, 20, 15, 'active');
    add($p);
}
function add(Produit $p)
{
    $mp = new ManagerProduit();
    $mp->add_produit($p);

    // echo "<h1>Last_name=" . $_POST['last_name'] . "first_name = " . $_POST['first_name']
    //     . " job = " . $_POST['job'] . "</h1> ";
}
function edit()
{
    echo "<h1>edit</h1>";
}

?>


<form class="mt-3 col-md-8 offset-2" action="/gestion_commande/produit/add" method="post">
    <div class="row m-1">
        <div class="col-3 text-center">
            <label class="form-label " aria-label="id">Id</label>
        </div>
        <div class="col-8">
            <input type="text" class="form-control"  aria-label="Last name" name="id">
        </div>
    </div>

    <div class="row m-1">
        <div class="col-3 text-center">
            <label class="form-label " aria-label="libelle">Libelle</label>
        </div>
        <div class="col-8">
            <input type="text" class="form-control" placeholder="libelle" aria-label="libelle " name="libelle">
        </div>
    </div>
    <div class="row m-1">
        <div class="col-3 text-center">
            <label class="form-label" aria-label="job">Job</label>
        </div>
        <div class="col-8">
            <input type="text" class="form-control" placeholder="Job" aria-label="job" name="job">
        </div>
    </div>
    <div class="row m-2">
        <div class="col-3 offset-3">
            <button type="submit" class="btn btn-primary">confermer</button>
        </div>
        <div class="col-3 offset-2">
            <button type="reset" class="btn btn-primary">annuler</button>
        </div>

    </div>
</form>