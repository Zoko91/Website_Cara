<?php
session_start();?>

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

<body >
<header id="heads" class="pb-4">
    <nav id="navb" class="navbar navbar-expand-md fixed-top navbar-dark bg-dark" style="background-color: rgb(38,41,45);">
        <img src="images/Cara_logo.png" class="ml-5 mr-2" alt="petit logo d'en haut" style="width: 5%; height: 5%;">
        <a class="navbar-brand" href="index.php">

            <span class="bg-gradient bg-light p-1 rounded text-dark" id="spanb">Projet</span> Transdisciplinaire</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="presentation.php">Présentation<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="experimentation.php">Expérimentations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="result.php">Résultats</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gestion.php">Gestion de projet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="conclusion.php">Conclusion</a>
                </li>
            </ul>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</header>
