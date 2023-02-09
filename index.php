<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/gestion_commande/produit">list produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/gestion_commande/produit/add">add produit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Link2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Link3</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn btn-primary" type="button">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-1">
        <?php

        require_once('controllers/Router.php');

        $router = new Router();

        $router->routeReq(); ?>

    </div>

    <script src="assists/js/bootstrap.bundle.js"></script>
</body>

</html>