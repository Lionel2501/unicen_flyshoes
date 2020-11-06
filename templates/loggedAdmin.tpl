<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{BASE_URL}">
    <title>{$titulo}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/index.js"></script>
    <script src="js/partialrender.js"></script>
</head>
<body>
    <header>
        <h1><a href="home" id="titulo">Fly Shoes</a></h1>
    </header>
        <nav class="navbar navbar-expand navbar-light bg-light" style="height:40px";>
            <div class="collapse navbar-collapse" id="navBar">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="home">Inicio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Hombres</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Mujeres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Niños</a>
                    </li>
                    <li class="nav-item">
                        <a href="newuser" class="nav-link suscribir">Suscribir</a>
                    </li>
                    <li class="nav-item">
                        <a href="login" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="logout" class="nav-link">LogOut</a>
                    </li>
                </ul>
                <form id="buscar" class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="buscar">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </nav>
        <figure class="banner">
            <img src="image/banner.jpg" alt="">
        </figure>
        <aside class="justify-content-center">
            <ul class="list-group list-group-horizontal-xs list-group-horizontal-sm list-group-horizontal-md list-group-horizontal-lg">
                <li class="list-group-item"><a href="./productos">Productos</a></li>
                <li class="list-group-item"><a href="./marcas">Marcas</a></li>
                <li class="list-group-item" id="promocion"><a href="#">Ofertas</a></li>
                <li class="list-group-item" id="reparto"><a>Reparto</a></li>
                <li class="list-group-item"><a href="./gestUsuarios">Gestion de Usuarios</a></li>
            </ul>
        </aside>            