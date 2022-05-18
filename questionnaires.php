<?php include("entete.php");?>
<div class=container>
<h2 class ="text-center">Résultats des différents questionnaires </h2>
<nav class="navbar ">
    <a href ="questionnaires.php?page=sus"class="btn btn-sm btn-outline-secondary" role='button' aria-pressed='true'>Questionnaires SUS</a>
    <a href ="questionnaires.php?page=preexp" class="btn btn-sm btn-outline-secondary" role='button' aria-pressed='true'>Pré-expérience</a>
    <a href ="questionnaires.php?page=postexp" class="btn btn-sm btn-outline-secondary" role='button' aria-pressed='true'>Post-expérience</a>
</nav>

<?php

if(isset($_GET['page'])){
    if($_GET['page']=='sus'){
        ?>
    </br>
    <h3>Questionnaire SUS (System Usability Scale) </h3>
    </br>               
    <p>
        Le score de satisfaction obtenu pour chaque clavier, est calculé en faisant la moyenne des résultats obtenus 
        pour chaque utilisateur. On obtient un score de 65.75% pour le clavier célébrité et de 66% pour le clavier neutre
        (<em>figure n°1</em>) . Au premier abord il n’y donc pas de différence majeure entre ces deux claviers du point de vue de 
        l’utilisabilité d’après les utilisateurs.            
    </p>
    <br/>
    <p class="text-center"><em>Figure n°1 : Score moyen obtenu par chaque clavier avec le questionnaire SUS</em></p>
    <img class="image" src="images/SUS1.png" alt="Histogramme illustrant les scores obtenus par les claviers au questionnaire SUS"/>            
    <br/>
    <p>
        Néanmoins, si on observe au cas par cas, on remarque que 63.6% des participants ont attribué une meilleure note au clavier 
        neutre, tandis que 27.3% ont attribué la même note aux deux claviers, et que seulement 9.1% ont attribué une meilleure 
        note au clavier célébrité (<em>figure n°2</em>). <br/>
        Ainsi, la majorité des participants semblent avoir trouvé le clavier neutre plus 
        utilisable.
    </p>
    <br/>
    <p class="text-center"><em>Figure n°2 : Clavier ayant été le mieux noté par chaque participant</em></p>
    <img class="image" src="images/SUS2.png" alt="Graphique illustrant le clavier le mieux noté par chaque participant"/>            
    <br/>
    <?php
    
    }
    else if ($_GET['page']=='preexp'){
?>
    </br>
    <h3>Questionnaire pré-expérience </h3>
    </br>
    <?php
    
    }
    else if ($_GET['page']=='postexp'){

        ?>
</br>
<h3>Questionnaire post-expérience </h3>
    </br>
    <?php
    }

}
    else{
    ?>
    </br>
    </br>
        <p>
            Durant nos expériences, nous avons fait passer plusieurs questionnaires. Dans un premier temps, les sujets 
            répondaient à un questionnaire de pré-expérience avant de faire le premier calibrage. Ensuite, nous leur 
            avons fait passer un questionnaire SUS (System Usability Scale) après chaque clavier et enfin une fois 
            l’expérience terminée, les sujets ont répondu à un questionnaire post-expérience.<br/>
            Sur cette page, nous allons analyser les résultats de ces différents questionnaires.

        </p>
        </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>

    <?php
    }


    ?>
</div>
<?php include("footer.php") ?>
