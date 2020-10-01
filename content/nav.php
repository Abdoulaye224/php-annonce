<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Petites annonces</title>
    <!-- Script CSS -->
    <link rel="stylesheet" href="../include/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<header>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .menu {
            color: white;
        }

        .menu:hover{
            color: orange;
            transition: 0.2s;
        }

        .nav_menu{
            display: flex;
        }
        .droite{
            margin-left: auto;
        }

    </style>
 
        <nav class = "nav_menu" style="background-color: black; padding: 10px;"> 
                <a class="menu nav-link" href="profil.php"><strong>Home</strong></a>
                <a class="menu nav-link" href="createAnnonce.php"><strong>Publier</strong></a>
                <a class="menu nav-link" href="editAnnonce.php"><strong>Editer</strong></a>
                <a class="droite nav-link btn btn-danger" href="disconnect.php"><strong>Se déconnecter</strong></a>
        </nav>
           
</header>
<body>