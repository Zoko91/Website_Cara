<?php include("entete.php");
?>

<div class="text-center" style="background-color: rgb(38,41,45)"><h1>Bienvenue dans le site du Projet <img src="images/C.png" alt="C" style="width: 3%; height: 3%;"><span id="a1">a</span><span id="r">r</span><span id="a2">a</span></h1></div>
<br>
<br>
<!--<img src="images/Cara_logo.png" alt="Logo Cara" class="mx-auto d-block w-50 h-50">-->



<div  class=container>

<div style = "width:800px; text-align:center ; margin:auto ;display:flex" id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" style="width:75%;" src="images/Cara_logo_petit.png" alt="Découvrir notre projet">
      <div class="carousel-caption d-none d-md-block">
        <a href="presentation.php"  role='button' aria-pressed='true' >En savoir plus ...</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/casque.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <a href="experimentation.php"  role='button' aria-pressed='true'>Voir les expérimentations ...</a>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</br>

<div class="text-center" style="background-color: rgb(38,41,45)"><h1> Qui sommes-nous ?</div>
</br>
<div  class="card-group">
  <div style="background-color: rgb(38,41,45)" class="card">
    <img class="card-img-top" src="images/clara.jpg" alt="Image Clara">
    <div class="card-body">
      <h5 class="card-title">Clara Dupont</h5>
      <p class="card-text">Elève à l'ENSC, groupe 1.</p>
    </div>
  </div>
  <div style="background-color: rgb(38,41,45)" class="card">
    <img class="card-img-top" src="images/joseph.jpg" alt="Image Joseph">
    <div class="card-body">
      <h5 class="card-title">Joseph Béasse</h5>
      <p class="card-text">Elève à l'ENSC, groupe 4.</p>
    </div>
  </div>
  <div style="background-color: rgb(38,41,45)" class="card">
    <img class="card-img-top" src="images/juliette.jpg" alt="Image Juliette">
    <div class="card-body">
      <h5 class="card-title">Juliette Meunier</h5>
      <p class="card-text">Elève à l'ENSC, groupe 1.</p>
    </div>
  </div>
  <div  style="background-color: rgb(38,41,45)"class="card">
    <img class="card-img-top" src="images/Clement_Adrien.jpg" alt="Image Adrien">
    <div class="card-body">
      <h5 class="card-title">Adrien Clément</h5>
      <p class="card-text">Elève à l'ENSC, groupe 4.</p>
    </div>
  </div>
  <div style="background-color: rgb(38,41,45) ;" class="card">
    <img class="card-img-top" src="images/Le Gall_Maiwen.jpg" alt="Image Juliette">
    <div class="card-body">
      <h5 class="card-title">Maiwen Le Gall</h5>
      <p class="card-text">Elève à l'ENSC, groupe 4.</p>
    </div>
  </div>
</div>
</div>
<?php include("footer.php") ?>
