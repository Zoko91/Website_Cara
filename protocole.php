<?php include("entete.php");
?>
    <br>
    <br>
    <br>
    <div class=container>
    <h1 class="text-center">Protocole expérimental Cara</h1>
    <br/>
    <nav class="navbar ">
        <a href ="protocole.php?page=sujet"class="btn btn-sm btn-outline-info" role='button' aria-pressed='true'>Sujet et matériel</a>
        <a href ="protocole.php?page=clavier" class="btn btn-sm btn-outline-info" role='button' aria-pressed='true'>Conception des claviers</a>
        <a href ="protocole.php?page=deroul" class="btn btn-sm btn-outline-info" role='button' aria-pressed='true'>Déroulement de l'expérience</a>
        <a href ="protocole.php?page=ann" class="btn btn-sm btn-outline-info" role='button' aria-pressed='true'>Annexes</a>
    </nav>
<?php
if(isset($_GET['page'])){
    if($_GET['page']=='sujet'){

        ?>
        </br>
        <h3>Sujets et matériel</h3>
        <br/>
        <h3>Sujets</h3><br/>
        <p>Ces expériences sont effectuées par une douzaine de participants, étudiants eux aussi à l’ENSC. Ils doivent avoir une vue normale ou corrigée leur permettant de distinguer les couleurs. Il est également préférable qu’ils n’aient jamais participé à des expériences BCI auparavant. </p>

        <h3>Matériel</h3><br/>
        <p>L’expérience a lieu dans le bâtiment de la Forge à l’ENSC dans une salle équipée d’EEG ainsi que d’un ordinateur. L’expérience s’effectue à l’aide du logiciel UMA BCI-Speller qui a permis l’élaboration des <a class="lien" style="color:white;" href="claviers.php">claviers</a> de taille 5x5 et qui permet également de pouvoir les tester. </p>
        <?php

    }
    else if ($_GET['page']=='deroul'){

        ?>
        </br>
        <h3>Déroulement de l’expérience</h3>
        <br/>
        <h3>Avant l’expérience</h3><br/>
        <p>Avant de commencer l’expérience, les participants sont tenus au courant du déroulement de cette dernière. Il leur est rappelé que ce ne sont pas leurs performances qui sont jugées mais celles des claviers virtuels. Un rappel est également fait sur la protection de leurs données, qui seront anonymisées et qui ne serviront que pour les résultats de nos expériences. Une <a class="lien" href="lettreinfo.php" style="color:white;">lettre d'information</a> leur est présentée et ils devront signer un <a class="lien" href="formulaireconsentement.php" style="color:white;">formulaire de consentement</a> quant à l’utilisation de leurs données ainsi que remplir un <a class="lien" href="https://framaforms.org/questionnaire-projet-cara-pre-experience-1647109900" style="color:white;">questionnaire de pré-expérience</a> sur un ordinateur mis à leur disposition. Une grille, montrée ci-dessous, permettant de juger du stress, de la somnolence et des sentiments agréables est présente sur la table et devra être expliquée aux sujets afin qu’ils puissent évaluer leurs niveaux de stress.</p>
        <br/><img class="image" src="images/Grille.png" alt="Grille permettant de juger notre état de fatigue, stress et d'excitation"/>
        <p class="text-center"><em>Figure n°1 : Grille utilisée</em></p>
        <br/>
        <h3>Installation</h3><br/>
        <p>Avant de débuter l’expérience, le participant est installé sur un siège face à un écran, afin qu’il soit à une distance d’environ 100 cm de celui-ci. On place ensuite le casque EEG sur le crâne du participant, en vérifiant qu’il est bien centré. L’électrode Cz doit être positionnée à distance égale de la nuque et de la base des sourcils. Puis, afin que les électrodes adhèrent au cuir chevelu et afin d’avoir un bon signal, on insère du gel dans les trous au niveau des électrodes à l’aide d’une seringue, et on place l’électrode de référence au niveau du lobe de l’oreille.</p>
        <br/><img class="image" src="images/electrode.jpg" alt="représentation de l'emplacement des électrodes sur le cuir chevelu, l'électrode Cz étant située au au milieu"/>
        <p class="text-center"><em>Figure n°2 : Emplacement des électrodes</em></p> <br/>
        <h3>Calibrage</h3><br/>
        <p>Afin de comparer les performances obtenues avec les deux claviers: “célébrités” et “images neutres”, chaque participant réalise une phase de calibrage sur les deux claviers afin de déterminer le nombre de flashs correspondant au clavier. L’ordre de passage des claviers est alterné afin d’éviter de biaiser les résultats. <br/>
            Le calibrage doit se faire avec 10 flashs. Une fois ce dernier terminé, on détermine le nombre de flashs qui correspond au nombre minimum pour avoir le calibrage à 100% + 1. Un calibrage est nécessaire pour chaque clavier. <br/>
            Les mots utilisés pour le calibrage sont “PURE”, “FEUX” et “CHAT”.</p><br/>

        <h3>Expérience</h3><br/>
        <p>Le sujet doit écrire les mots “LUNE”, “ABRI”, “YOGA” et “CHEF”. Les données mesurées sont :
        <ul>
            <li>l’écriture correcte du mot</li>
            <li>le nombre d’erreurs s’il y en a </li>
            <li>l’analyse plus poussée des résultats obtenus sur l’ordinateur </li>
        </ul><br/>
        Après chaque clavier le sujet passe un questionnaire SUS ; sur une échelle de 1 (pas du tout d’accord) à 5 (tout à fait d’accord), les participants répondent aux questions suivantes : <br/><br/>
        <ol>
            <li>Je pense que vais utiliser le service fréquemment</li>
            <li>Je pense que le service est inutilement complexe</li>
            <li>Je pense que le service est facile d’utilisation</li>
            <li>Je pense que je vais devoir faire appel au support technique pour pouvoir utiliser ce service</li>
            <li>Je trouve que les fonctionnalités du service sont bien intégrées</li>
            <li>Je trouve qu’il y a beaucoup trop d’incohérences dans ce service</li>
            <li>Je pense que la plupart des gens apprennent très rapidement à utiliser le service</li>
            <li>Je trouve le service vraiment très lourd à utiliser</li>
            <li>Je me suis senti très confiant en utilisant ce service</li>
            <li>J’ai dû apprendre beaucoup de choses avant de pouvoir utiliser ce service</li>
        </ol>
        Les examinateurs notent ensuite le score de satisfaction obtenu pour chaque clavier. <br/>
        La grille est également montrée entre chaque clavier. <br/>
        <br/>
        Une pause d’au moins 5 minutes entre les deux claviers est obligatoire.</p>
        </section>
        <br/>
        <section>
            <h2>Après l’expérience</h2><br/>
            <p>Une fois le second clavier passé et le score de satisfaction obtenu, le sujet passe un <a class="lien" href="https://framaforms.org/questionnaire-projet-cara-post-experience-1647262635" style="color:white;">questionnaire post-expérience</a> depuis un ordinateur mis à sa disposition. Ce questionnaire est à faire dans la salle d’expérience aux côtés des examinateurs.
                Une fois le dernier questionnaire rempli, le sujet a le droit à des chocolats et peut partir.</p>
        </section>


        <?php

    }
    else if ($_GET['page']=='clavier'){
        ?>
        </br>
        <h3>Conception des claviers</h3>
        <br/>
        <p>
            En octobre 2021, le client de notre projet, Ricardo Ron Angevin, a pu se rendre dans les locaux de l’ENSC afin de nous
            montrer le fonctionnement du Brain Computer Interface (BCI). Ce premier test s’est effectué dans le bâtiment de la forge,
            dans une salle équipée d’un électroencéphalogramme (EEG). Nous avons pu passer en revue les différentes étapes nécessaires
            à la réalisation de nos expérimentations : pose des électrodes, calibrages, écriture de mots, etc … Cet amorçage nous a
            permis de pouvoir constituer un premier protocole expérimental qui vous sera décrit ultérieurement.
        </p>
        <br/>
        <p>
            Pour pouvoir réaliser nos expériences il nous a fallu concevoir les deux claviers propres aux expériences que nous voulons
            mener. Pour cela, nous avons utilisé le logiciel UMA-BCI Speller ainsi que les manuels d’utilisations de l’université de
            Malaga et réalisé par les élèves de l’ENSC de la promo 2023. Nous avons ainsi réalisé deux claviers.
        </p>
        <br/>
        <p>
            Le premier clavier, appelé “Clavier célébrités”, présente des lettres blanches sur fond noir, et lorqu’une colonne ou une 
            ligne s’active, le visage d’une célébrité apparait. Nous avons ici choisi Obama, dont le visage est connu, reconnaissable 
            et qui a été utilisé dans les protocoles de certains articles étudiés dans l’état de l’art. En nous basant sur l’étude  
            de <a class="lien" style="color:white" href='etatart.php?page=bibli'>Li et al. (2020)</a>, nous avons coloré cette image en rouge, afin d’optimiser les performances. De même, selon l’étude de 
            <a class="lien" style="color:white" href='etatart.php?page=bibli'>Zhang et al. (2021)</a>, les résultats sont meilleurs lorsque le fond de l’image est blanc. Ainsi, nous avons opté pour un 
            visage d’Obama rouge sur fond blanc, comme stimulus.
        </p>

        <img class="image" src="images/clavierceleb.png" alt="Capture d'écran du clavier avec une image de célébrité"/>
        <p class="text-center"><em> Figure n°1 : Clavier avec “photo de célébrité”</em></p>
        <br/>
        <p>
            Le second clavier, appelé “Clavier images neutres”, présente des lettres blanches sur fond noir, et lorqu’une colonne ou 
            une ligne s’active, des images neutres apparaissent. Ce clavier est basé sur celui utilisé lors de l’étude de 
            <a class="lien" style="color:white" href='etatart.php?page=bibli'>Fernández-Rodríguez et al. (2019)</a>. Les images proviennent de la base de données IAPS (International Affective Picture 
            System) qui a été conçue pour fournir un ensemble standardisé d'images pour étudier les émotions.<br/>
            Ces deux claviers comportent 5 lignes et 5 colonnes, et donc 25 caractères. Nous avons choisi de conserver les lettres 
            de l’alphabet, dans l’ordre alphabétique, en retirant le z. Nous avons fait ce choix, pour que la taille des images soit 
            suffisante, tout en gardant un maximum de lettres de l’alphabet. Les images ont une dimension de 2x3.
        </p>
        <br/>
        <img class="image" src="images/clavierneutre.png" alt="Capture d'écran du clavier avec une image neutre" style="width:35%;height:35%"/>
        <p class="text-center"> <em>Figure n°2 : Clavier avec images “neutres”</em></p>

        </div>
        <?php
    }
    else if ($_GET['page']=='ann'){
        ?>
        </br>
        <h3>Annexes </h3>
        </br>


        <a href="lettreinfo.php" role='button' aria-pressed='true' class='btn btn-secondary'>Lettre d'information</a>
        </br>
        </br>

        <a href="formulaireconsentement.php" role='button' aria-pressed='true' class='btn btn-secondary'>Formulaire consentement</a>
        </br>
        </br>
        <a href="https://framaforms.org/questionnaire-projet-cara-pre-experience-1647109900" class='btn btn-secondary'>Questionnaire de pré-expérience</a>
        </br>
        </br>
        <a href="https://framaforms.org/questionnaire-projet-cara-post-experience-1647262635" class='btn btn-secondary'>Questionnaire post-expérience</a>


        <?php

    }

}
else{
    ?>
    </br>
    <p>
        Ce protocole est réalisé dans le but de comparer les résultats des performances BCI de deux claviers virtuels : le premier composé d’images neutres et le second d’une photo de célébrité.
        Pour cela les expériences se déroulent dans la Forge, un bâtiment de l’Ecole Nationale Supérieure de Cognitique (ENSC) et sont réalisées par 5 étudiants en première année qui forment l’équipe de ce projet.
    </p>
    <?php
}

?>

    </div>
<?php include("footer.php") ?>