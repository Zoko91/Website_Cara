<?php    session_start();
if(!isset($_GET['clav'])){

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projet Cara/Visages</title>
    <!-- CSS only -->
    <link href="css/styles.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
<header id="heads" class="pb-4">
    <nav id="navb" class="navbar navbar-expand-md fixed-top navbar-dark " style="background-color: rgb(38,41,45);">
        <div class="container">
            <div class="col-9 align-middle">
                <a href="index.php">
                    <img src="images/Cara_logo.png" alt="Logo cara haut page" class="me-2" style="height: 48px; padding-bottom: 1%;">
                </a>
                &nbsp;
                <a class="navbar-brand rounded-3 fw-bold" href="index.php" id="baliseb">
                    <span class="bg-gradient bg-light p-1 rounded rounded-3 text-dark" id="spanb">Projet</span> Transdisciplinaire
                </a>
            </div>
            
            <div class="col-2">
                <div class="dropdown dropdown-dark">
                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-expanded="false">
                        Naviguer sur le site
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark bg-dark" aria-labelledby="dropdownMenuButton1">
                        <li class="nav-item bg-dark">
                            <a class="nav-link  dropdown-item  text-white bg-dark" href="presentation.php">Présentation du projet</a>
                        </li>
                        <li class="nav-item bg-dark">
                            <a class="nav-link  dropdown-item  text-white bg-dark" href="etatart.php">Etat de l'art</a>
                        </li>
                        <li class="nav-item bg-dark">
                            <a class="nav-link  dropdown-item  text-white bg-dark" href="protocole.php">Protocole</a>
                        </li>
                        <li class="nav-item bg-dark">
                            <a class="nav-link  dropdown-item  text-white bg-dark" href="questionnaires.php">Analyses des questionnaires</a>
                        </li>
                        <li class="nav-item bg-dark">
                            <a class="nav-link  dropdown-item  text-white bg-dark" href="resultats.php">Résultats</a>
                        </li>
                        <li class="nav-item bg-dark">
                            <a class="nav-link  dropdown-item  text-white bg-dark" href="BrainInfo.php">BrainInfo2022</a>
                        </li>
                        <li class="nav-item bg-dark">
                            <a class="nav-link  dropdown-item  text-white bg-dark" href="gestion.php">Gestion de Projet</a>
                        </li>
                        <li class="nav-item bg-dark">
                            <a class="nav-link  dropdown-item  text-white bg-dark" href="conclusion.php">Conclusion</a>
                        </li>
                        <div class="dropdown-divider bg-light "></div>
                        <li class="nav-item bg-dark">
                            <a class="nav-link  dropdown-item  text-white bg-dark" href="contact.php">Nous contacter</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
