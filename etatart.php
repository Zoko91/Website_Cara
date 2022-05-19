<?php include("entete.php");
?>
<div class=container>

<h2 class ="text-center">Etat de l'art </h2>
<nav class="navbar ">
    <a href ="etatart.php?page=p300"class="btn btn-sm btn-outline-info" role='button' aria-pressed='true'>P-300 speller</a>
    <a href ="etatart.php?page=type" class="btn btn-sm btn-outline-info" role='button' aria-pressed='true'>Type de stimulus</a>
    <a href ="etatart.php?page=couleur" class="btn btn-sm btn-outline-info" role='button' aria-pressed='true'>Couleur du stimulus</a>
    <a href ="etatart.php?page=uma" class="btn btn-sm btn-outline-info" role='button' aria-pressed='true'>UMA-BCI speller</a>
    <a href ="etatart.php?page=bibli" class="btn btn-sm btn-outline-info" role='button' aria-pressed='true'>Bibliographie</a>
</nav>


<?php

if(isset($_GET['page'])){
    if($_GET['page']=='p300'){
        ?>
    </br>
    <div class="row ">
        <div class=col>
    <h3> Le P-300 speller </h3>
    </br>
        <p>
            Le P300-speller est un des BCI les plus utilisés. En effet, ce BCI ne requiert qu’un petit calibrage avec des taux de succès assez hauts et il permet d’inclure un grand nombre d’options lors du choix des participants.
        </p>
        <p>
            Son interface est constituée d’une matrice constituée des lettres de l’alphabet ou d’autres caractères dont les colonnes et lignes sont flashées de manière aléatoire. La personne utilisant ce BCI devra compter le nombre de fois où la lettre qu’il veut afficher est flashée. Grâce à un électroencéphalogramme, l’activité électrique du cerveau est enregistrée et une augmentation du potentiel évoqué P300 est observée au moment où le caractère attendu est présenté.
        </p>

        <p>
            Le but de nombreux chercheurs est d’améliorer la performance de ce procédé car les BCI sont très utiles pour les personnes ne  pouvant plus se servir de leurs muscles, comme notamment les personnes souffrant de sclérose latérale amyotrophique (SLA). En effet, même s’il est très utilisé, la performance du P300-speller n’est pas encore satisfaisante.
        </p>
    </br>
    </div>
  
    <div class="col justify-content-center">
    </br>
    </br>
    </br>
    </br>
    <div class="row justify-content-center">
    <img  alt="Utilise BCI" src="images/casqueBCI.jpg" style="width:50%;heigth:50%;">
    </div>
    </div>
    </div>
    <?php
    
    }
    else if ($_GET['page']=='type'){
?>
</br>
<h3>Type de stimulus </h3>
    </br>
<p>
    Afin d’améliorer ce procédé, plusieurs pistes ont été explorées telles que les temps de présentation des stimulus ou encore la luminosité (<a style="color:white" href='etatart.php?page=bibli'> Li et al., 2014 </a>). Dans notre étude actuelle, nous nous intéressons au type de stimulus. 

</p>
<p>
    Les premiers chercheurs à avoir modifié le type du stimulus permettant de flasher les différentes lettres sont <a style="color:white" href='etatart.php?page=bibli'> Kaufmann et al (2011) </a>. Ils se sont intéressés aux visages des personnes célèbres car voir le visage d’une célébrité implique l’apparition de certains potentiels évoqués comme notamment le P300 ou le N400f. Ainsi, ils ont comparé la performance du BCI dans trois conditions, la première est la technique de flash classique. Celle-ci va permettre de comparer les deux autres conditions à ce qui est déjà utilisé. La seconde condition consiste à présenter des visages de célébrités au moment du flash, ils ont utilisé Che Guevara et Einstein. Enfin, la dernière condition est une réorganisation aléatoire des pixels des photographies des visages précédents, afin de savoir si c’est le fait d’avoir une image quelconque qui modifie la performance ou si c’est la présence du visage de célébrité. Les résultats montrent que le visage d’une personne célèbre améliore la performance du BCI ( vitesse et précision) par rapport aux deux autres conditions.
</p>
    </br>
<div class="row justify-content-center">
    <img  alt="Etude Kaufman" src="images/kauf.png" style="width:50%;heigth:50%;margin:20px">
    <img  alt="Einstein" src="images/einstein.jpg" style="width:15%;heigth:10%;margin:20px">
    <img  alt="CheGevara" src="images\chegevara.jpg" style="width:15%;heigth:10%;margin:20px">
</div>
</br>

<p>
    Une seconde étude à s’être intéressée au type de stimulus utilisé est <a style="color:white" href='etatart.php?page=bibli'> Fernández-Rodríguez et al (2019) </a>. Ils se sont intéressés à la valence et au niveau d’éveil provoqué par le stimuli utilisé pour flasher les lettres. En effet, le potentiel évoqué P300 est intéressant par rapport aux propriétés émotionnelles d’une image puisqu’elles le font augmenter. Ainsi, ils ont comparé des images avec des valences (positives ou négatives) combinées avec différents niveaux d’éveil (bas ou élevé). Les résultats montrent que les images, qu’elles soient neutres ou avec une certaine valence, permettent d’améliorer la performance du BCI. En revanche, aucun résultat n’appuie le fait qu’utiliser des images émotionnelles améliore la performance.
</p>
<p>
    Ces études nous permettent donc d’avoir des pistes d’amélioration quant au P300-speller, c’est pourquoi le but de notre étude est de comparer ces deux types de stimuli.
  
</p>


<?php
    
    }
    else if ($_GET['page']=='couleur'){

        ?>
</br>
<h3>Couleur du stimulus </h3>
    </br>
<p>
Comme présenté précédemment, <a style="color:white" href='etatart.php?page=bibli'> Kaufmann et al (2011) </a> ont montré qu’utiliser des visages de personnes célèbres améliore la performance du BCI. Mais la nature du stimulus n’est pas le seul paramètre à avoir été étudié, en effet, <a style="color:white" href='etatart.php?page=bibli'> Takano et al (2009)  </a>ont montré que la couleur du stimulus influence la performance. C’est pourquoi <a style="color:white" href='etatart.php?page=bibli'> Li et al (2015) </a> ont voulu combiner ces deux résultats en comparant la performance entre flasher le visage de David Beckham coloré en vert et David Beckham avec sa couleur originale. Les résultats montrent que la couleur verte permet une meilleure performance du BCI lorsque l’on flashe des visages de célébrités.
</p>
</br>
<div class="row justify-content-center">
    <img  alt="Etude Li 2015" src="images/li2015.png" style="width:35%;heigth:35%">
</div>
    </br>
<p>
Le principe de cette étude a été repris, notamment par <a style="color:white" href='etatart.php?page=bibli'> Guger et al (2016) </a>. Dans cette étude, ils ont comparé quatre conditions : le visage d’Einstein en noir et blanc, le visage d’Einstein en couleur, le visage d’une célébrité en couleur différente sur chaque case et la technique de flash classique. Le but ici, était de comparer la performance par rapport à la couleur, mais aussi de comparer l’intérêt de le combiner avec des visages de célébrités. Ainsi, les résultats montrent que les visages de célébrités augmentent la performance du BCI, que cela soit le même visage ou des visages différents. Et que les deux conditions avec de la couleur ont une meilleure performance que les deux autres en noir et blanc. Et qu’ainsi, l’intérêt de combiner ces deux propriétés est réel.
</p>
Jusqu’ici les études par rapport à la couleur ont étudié la différence entre noir,blanc et couleur ou uniquement la couleur verte. Or, il a été démontré que les couleurs rouge, verte et bleue (RVB) peuvent être utilisées comme couleur de stimuli lorsque l’on flashe un unique caractère <a style="color:white" href='etatart.php?page=bibli'> (Guo et al., 2019) </a>. C’est pourquoi <a style="color:white" href='etatart.php?page=bibli'> Li et al (2020)
</a> ont voulu comparer ces différentes couleurs lors du flash de visages de célébrités. Les résultats montrent que la couleur rouge apporte une meilleure performance par rapport à la couleur verte et à la couleur bleue.
</p>
</br>
<div class="row justify-content-center">
    <img  alt="Etude Beckam" src="images/david.png" style="width:35%;heigth:35%">
</div>
    </br>
<p>
<p>
Enfin, des études comme celle de <a style="color:white" href='etatart.php?page=bibli'> Speier et al (2017) </a>  ont montré que le fond de l’image flashée avait un impact sur la performance, ainsi <a style="color:white" href='etatart.php?page=bibli'> Zhang et al (2021) </a> ont voulu comparer la couleur des fonds dans la performance du BCI. Pour cela, ils ont utilisé un visage de célébrité, Barack Obama coloré en rouge (Li et al., 2020), avec un fond blanc, rouge ou bleu, et la condition de flash classique sans image. Ils ont ainsi montré que la performance du BCI était meilleur dans la condition visage rouge avec un fond blanc.
</p>
<p>
C’est pourquoi dans notre présente étude, nous utiliserons pour le clavier avec les visages, le même stimulus que dans l’étude de <a style="color:white" href='etatart.php?page=bibli'> Zhang et al (2021) </a>, le visage de Barack Obama coloré en rouge avec un fond blanc.
    </p>

<?php
    
    }
    else if ($_GET['page']=='uma'){
        ?>
        </br>
        <div class=row>
            <div class=col>
        <h3>UMA-BCI speller </h3>
            </br>
        <p>
        Afin de réaliser les différentes expérimentations, nous allons utiliser le UMA-BCI speller <a style="color:white" href='etatart.php?page=bibli'> (Velasco-Álvarez et al., 2019) </a>. Cet outil a pour objectif d’être un P300-speller open source facile à utiliser.  Le UMA-BCI speller enveloppe le système BCI2000 de manière à ce que sa configuration et son utilisation soient beaucoup plus visuelles et faciles. En effet, le but de cet outil est de pouvoir être utilisé directement aux domiciles des utilisateurs.

        </p>
        <p>
        D’autre part, l'UMA-BCI Speller permet d'ajouter de nouvelles fonctionnalités afin de tester différentes variantes du système BCI. Les utilisateurs peuvent configurer leur speller de manière plus appropriée en utilisant des caractères, des images ou des signaux sonores,
        et ils peuvent naviguer à travers différentes mises en page, ouvrant ainsi la
        la porte à des configurations complexes du speller. Ces fonctionnalités sont notamment utiles aux chercheurs car cela permet de créer des conditions expérimentales plus facilement.
        </p>
    </div>
        
    <div class="col justify-content-center">
    </br>
    </br>
    </br>
    </br>
    <div class="row justify-content-center">
    <img  alt="UMA BCI" src="images/UMA.png" style="width:50%;heigth:50%;">
    </div>
    </div>
    </div>
        
        
        <?php
    
    }
    else if ($_GET['page']=='bibli'){
?>
</br>
<h3>Bibliographie</h3>
    </br>
        <p>
        Fernández-Rodríguez, Á., Velasco-Álvarez, F., Medina-Juliá, M. T., & Ron-Angevin, R. (2019).Evaluation of emotional and neutral pictures as flashing stimuli using a P300 brain–computer interface speller. <em> Journal of Neural Engineering </em>, 16(5), 056024. https://doi.org/10.1088/1741-2552/ab386d
        </p>
        <p>
        Guger, C., Ortner, R., Dimov, S., & Allison, B. (2016). A comparison of face speller approaches for P300 BCls. 4.
        </p>
        <p>
        Guo, M., Jin, J., Jiao, Y., Wang, X., & Cichockia, A. (2019). Investigation of visual stimulus with various colors and the layout for the oddball paradigm in evoked related potential-based brain–computer interface. <em>Frontiers in computational neuroscience</em>, 13, 24.  
        </p>
        <p>
        Kaufmann, T., Schulz, S. M., Grünzinger, C., & Kübler, A. (2011). Flashing characters with famous faces improves ERP-based brain–computer interface performance.<em> Journal of Neural Engineering </em>, 8(5), 056016. https://doi.org/10.1088/1741-2560/8/5/056016
        </p>
        <p>
        Li, Jin, Daly, Zuo, Wang, & Cichocki. (2020). Comparison of the ERP-Based BCI Performance Among Chromatic (RGB) Semitransparent Face Patterns. <em>Frontiers in Neuroscience</em>, 14, 54. https://doi.org/10.3389/fnins.2020.00054  
        </p>
        <p>
        Li, Liu, Li, & Bai. (2015). Use of a Green Familiar Faces Paradigm Improves P300-Speller Brain-Computer Interface Performance. <em>PLOS ONE</em>, 10(6). https://doi.org/10.1371/journal.pone.0130325  
        </p>
        <p>
        Li, Y., Bahn, S., Nam, C. S., & Lee, J. (2014). Effects of luminosity contrast and stimulus duration on user performance and preference in a P300-based brain–computer interface.<em> International Journal of Human-Computer Interaction</em>, 30(2), 151‑163.  
        </p>
        <p>
        Takano, K., Komatsu, T., Hata, N., Nakajima, Y., & Kansaku, K. (2009). Visual stimuli for the P300 brain–computer interface : A comparison of white/gray and green/blue flicker matrices.<em> Clinical neurophysiology </em>, 120(8), 1562‑1566.
        </p>
        <p>
        Velasco-Álvarez, F., Sancha-Ros, S., García-Garaluz, E., Fernández-Rodríguez, Á., Medina-Juliá, M. T., & Ron-Angevin, R. (2019). UMA-BCI Speller : An easily configurable P300 speller tool for end users. <em>Computer Methods and Programs in Biomedicine</em>, 172, 127‑138. https://doi.org/10.1016/j.cmpb.2019.02.015
        </p>
        <p>
        Zhang, X., Jin, J., Li, S., Wang, X., & Cichocki, A. (2021a). Evaluation of color modulation in visual P300-speller using new stimulus patterns. <em>Cognitive Neurodynamics</em>, 15(5), 873‑886. https://doi.org/10.1007/s11571-021-09669-y
        </p>
        <p>
        Zhang, X., Jin, J., Li, S., Wang, X., & Cichocki, A. (2021b). Evaluation of color modulation in visual P300-speller using new stimulus patterns. <em>Cognitive Neurodynamics</em>, 15(5), 873‑886. https://doi.org/10.1007/s11571-021-09669-y
        </p>
    <?php
    }

}
else{
    ?>
    </br>
</br>
Notre état de l'art a couvert les études anciennement faites en lien avec les BCI et le type et couleur des stimulus utilisés.
Nous avons cherché ce qu'était précisément un P-300 speller, de même que nous sommes allés chercher de la documentation sur le UMA-BCI speller.
</br> 
</br>
<div class="row justify-content-center">
    <img  alt="BCI" src="images/BCIimage.jpg" style="width:35%;heigth:35%">
</div>
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

