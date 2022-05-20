<?php include("entete.php");?>
    <br>
    <br>
    <br>
    <div class=container>
        <h1 class="text-center">Conception des claviers</h1>
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
    <?php include("footer.php") ?>
    
