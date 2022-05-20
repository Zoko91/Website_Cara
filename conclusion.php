<?php include("entete.php");
?>
<br>
<br>
<br>
<div class=container>
</br>
</br>
<!--
<div class="text-center">
  <div class="card border-light mb-3 bg-dark">
    <div class="card-body">
      <h5 class="card-title">Les acquis pédagogiques</h5>
    </div>
  </div>
  <div class="card p-3 border-success mb-3 bg-light">
    <blockquote class="blockquote mb-0 card-body">
      <p style="color:black;"> Ce projet nous a permis de découvrir et de mieux comprendre le système BCI. Le passage des expériences nous a donné l’occasion de mettre en pratique des méthodologies étudiées lors du module “Facteurs humains, Utilisabilité et UX” comme la création de questionnaires et le déroulement d’une expérience. Il a été également très intéressant d’analyser les résultats d’un point de vue utilisateur nous permettant d’avoir des avis extérieurs sur notre démarche. <br/><br/>
        La gestion de projet a été essentielle et nous a permis d’apprendre à travailler ensemble et à se répartir efficacement les tâches à effectuer. <br/><br/>
        Enfin, nous avons pu appliquer les compétences développées en programmation web puisque nous avons codé nous-même ce site. <br/><br/>
        Ainsi, ce projet a été très enrichissant pour nous car il nous a permis de mettre en pratique plusieurs thématiques que nous avons pu étudier au cours de l’année mais également de nous faire découvrir le fonctionnement des interfaces cerveau-ordinateur et le domaine de la recherche. <br/>
      </p>
  </div>
</div> <br/><br/>
-->

<nav class="navbar ">
        <a href ="conclusion.php?page=conclu"class="btn btn-sm btn-outline-info" role='button' aria-pressed='true'>Conclusion</a>
        <a href ="conclusion.php?page=futur"class="btn btn-sm btn-outline-info" role='button' aria-pressed='true'>Perspectives</a>
        <a href ="conclusion.php?page=acquis" class="btn btn-sm btn-outline-info" role='button' aria-pressed='true'>Acquis pédagogiques</a>
        <a href ="conclusion.php?page=vert" class="btn btn-sm btn-outline-info" role='button' aria-pressed='true'>Plan vert</a>
    </nav>
<?php

    if(isset($_GET['page'])){
    if($_GET['page']=='conclu'){

        ?>
</br>
      <div class="card p-3 border-light mb-3 bg-dark">
            <div class="card-body">
              <h5 class="card-title">Conclusion</h5>
            </div>
            <div class="card-text">
              <p>
              Au-delà de tous les acquis pédagogiques que nous avons pu acquérir et qui nous seront utiles dans notre formation (gestion de projet, réalisation de questionnaires…), nous avons également pu mettre un pied dans l’univers de la recherche. Mener des études, établir des postulats, analyser des données, toutes ces activités consistent en une entrée efficace dans ce domaine.
            </p>
            <p>
            En somme, ce projet a été pour nous une vraie mine d’or, nous permettant de faire appel à beaucoup de connaissances emmagasinées tout au long de l’année 2021/2022, mais aussi de découvrir de nouvelles choses qui pourront à coup sûr servir à certains membres s’ils poursuivent leurs études sur cette voix.
    </p>
    </div>
          </div>

        <?php

    }
    else if ($_GET['page']=='acquis'){

        ?>
</br>
    </br>
        <div class="card-columns">
          <div class="card border-light mb-3 bg-dark">
            <div class="card-body">
              <h5 class="card-title">Acquis pédagogiques utilisés</h5>
            </div>
          </div>
          <div class="card p-3 border-success mb-3 bg-light">
            <blockquote class="blockquote mb-0 card-body">
              <p style="color:black;">
          Le passage des expériences nous a donné l’occasion de mettre en pratique des méthodologies étudiées comme la création de questionnaires et le déroulement d’une expérience.
            </p>
              <footer class="blockquote-footer">
              Facteurs humains, Utilisabilité et UX
              </footer>
            </blockquote>
          </div>

          <div class="card p-3 border-success mb-3 ">
              <div class="row justify-content-center">
                  <img class="card-img-top" src="images/logoecole.png" alt="Logo de l'école"style="width:50%;heigth:50%">
              </div>
    </div>
        
        <div class="card" style="background-color:rgb(35,33,33)">
          <p> </p>
        </div>
          <div class="card p-3 border-success mb-3 bg-light">
            <blockquote class="blockquote mb-0">
              <p style="color:black;">
              Il a été également très intéressant d’analyser les résultats d’un point de vue utilisateur nous permettant d’avoir des avis extérieurs sur notre démarche.
              </p>
              <footer class="blockquote-footer">
              Facteurs humains, Utilisabilité et UX
              </footer>
            </blockquote>
          </div>
          <div class=" card p-3 border-light mb-3 bg-dark" >
              <p >
              Ainsi, ce projet a été très enrichissant pour nous car il nous a permis de mettre en pratique plusieurs thématiques que nous avons pu étudier au cours de l’année mais également de nous faire découvrir le fonctionnement des interfaces cerveau-ordinateur et le domaine de la recherche. <br/>
            </p>
              <footer class="blockquote-footer" style="color:white">
              Conclusion
              </footer>
            </blockquote>
          </div>

          <div class="card" style="background-color:rgb(35,33,33)">
<p>                                                                                                                                                                                                                                                                                
</p>
</div>

<div class="card" style="background-color:rgb(35,33,33)">
<p>                                                                                                                                                                                                                                                                                
</p>
</div>
          <div class="card p-3 border-success mb-3 bg-light">
            <blockquote class="blockquote mb-0">
              <p style="color:black;">
              La gestion de projet a été essentielle et nous a permis d’apprendre à travailler ensemble et à se répartir efficacement les tâches à effectuer. <br/><br/>
            </p>
              <footer class="blockquote-footer">
              Gestion de projet
              </footer>
            </blockquote>
          </div>
          <div class="card p-3 border-success mb-3 bg-light">
            <blockquote class="blockquote mb-0">
              <p style="color:black;">
              Nous avons pu appliquer les compétences développées en programmation web puisque nous avons codé nous-même ce site.
            </p>
              <footer class="blockquote-footer">
              Communication web
              </footer>
            </blockquote>
          </div>
          </div>


<?php
    }
    else if ($_GET['page']=='vert'){
        ?>
        </br>
    </br>
 <div class="card-columns">
  <div class="card border-light mb-3 bg-dark">
    <div class="card-body">
      <h5 class="card-title">Le plan vert dans le projet CARA</h5>
    </div>
  </div>
  <div class="card p-3 border-success mb-3 bg-light">
    <blockquote class="blockquote mb-0 card-body">
      <p style="color:black;"> Les BCI sont très utiles pour les personnes ne  pouvant plus se servir de leurs muscles, comme notamment les personnes souffrant de sclérose latérale amyotrophique (SLA). C'est pourquoi l'améliorer peut permettre d'améliorer la qualité de vie de certaines personnes.</p>
      <footer class="blockquote-footer">
          Point de vue social
      </footer>
    </blockquote>
  </div>
  <div class="card" style="background-color:rgb(35,33,33)">
<p>                                                                                                                                                                                                                                                                                
</p>
</div>
  <div class="card p-3 border-success mb-3 bg-light">
    <blockquote class="blockquote mb-0">
      <p style="color:black;">
      Nous nous sommes adaptés aux localisations de chacun en adaptant la modalité distanciel ou pas, afin que personne ne fasse de trajet en plus (coûteux en énergie).</p>
    </p>
      <footer class="blockquote-footer">
        Point de vue écologique
      </footer>
    </blockquote>
  </div>

  <div class="card border-success mb-3 ">
      <div class="row justify-content-center">
  <img class="card-img-top" src="images/cerveau.png" alt="CIcône cerveau rose"style="width:40%;heigth:40%">
  </div>
</div>

<div class="card" style="background-color:rgb(35,33,33)">
<p>                                                                                                                                                                                                                                                                                
</p>
</div>

<div class="card" style="background-color:rgb(35,33,33)">
<p>                                                                                                                                                                                                                                                                                
</p>
</div>
<div class="card" style="background-color:rgb(35,33,33)">
<p>                                                                                                                                                                                                                                                                                
</p>
</div>

  <div class="card border-success mb-3 ">
      <div class="row justify-content-center">
  <img class="card-img-top" src="images/vert3.png" alt="Image économie d'énergie"style="width:40%;heigth:40%">
  </div>
</div>

  <div class="card p-3 border-success mb-3 bg-light">
    <blockquote class="blockquote mb-0">
      <p style="color:black;">
      Notre site est en mode sombre ce qui permet de réduire la consommation d'énergie pour les personnes souhaitant voir ce site sur smartphone notamment.</p>
    </p>
      <footer class="blockquote-footer">
        Point de vue écologique
      </footer>
    </blockquote>
  </div>
</div>
        <?php
    }
    else if ($_GET['page']=='futur'){
        ?>
                </br>
    </br>
 <div class="card-columns">
  <div class="card border-light mb-3 bg-dark">
    <div class="card-body">
      <h5 class="card-title">De nouvelles perspectives...</h5>
    </div>
  </div>
  <div class="card p-3 border-success mb-3 bg-light">
    <blockquote class="blockquote mb-0 card-body">
      <p style="color:black;"> 
      Deux membres du groupe (rejoints par deux autres personnes externes au projet) vont continuer à travailler sur le projet CARA.
    </p>
      <footer class="blockquote-footer">
          Stage
      </footer>
    </blockquote>
  </div>

  <div class="card p-3 border-success mb-3 bg-light">
    <blockquote class="blockquote mb-0">
      <p style="color:black;">
      Croiser les résultats afin de découvrir, par exemple, si les différences entre les deux claviers utilisés sont significatives ou non.
    </p>
      <footer class="blockquote-footer">
        Analyses de données plus poussées
      </footer>
    </blockquote>
  </div>

  <div class="card border-success mb-3 ">
      <div class="row justify-content-center">
  <img class="card-img-top" src="images/analyse.png" alt="Icône analyse de données"style="width:40%;heigth:40%">
  </div>
</div>

<div class="card" style="background-color:rgb(35,33,33)">
<p>                                                                                                                                                                                                                                                                                
</p>
</div>

<div class="card" style="background-color:rgb(35,33,33)">
<p>                                                                                                                                                                                                                                                                                
</p>
</div>
<div class="card" style="background-color:rgb(35,33,33)">
<p>                                                                                                                                                                                                                                                                                
</p>
</div>

<div class="card p-3 border-success mb-3 bg-light">
    <blockquote class="blockquote mb-0">
      <p style="color:black;">
      Voir quels ont été les mots les plus à même de provoquer des erreurs (lettres, ordre d’arrivée, etc…)
    </p>
      <footer class="blockquote-footer">
      Analyses de données plus poussées
      </footer>
    </blockquote>
  </div>
  <div class="card p-3 border-success mb-3 bg-light">
    <blockquote class="blockquote mb-0">
      <p style="color:black;">
      Voir s'il existe une corrélation entre la fatigue, le stress, le temps passé devant des écrans et le nombre d’erreurs réalisées.
    </p>
      <footer class="blockquote-footer">
      Analyses de données plus poussées
      </footer>
    </blockquote>
  </div>
</div>
  
        <?php

    }

}
else{
    ?>
</br>
<div class="row justify-content-center">
<img class="card-img-top" src="images/chat.jpg" alt="Chat "style="width:20%;heigth:20%">
</div>
</div>
   
    <?php
}

?>

</div>



<?php include("footer.php") ?>

