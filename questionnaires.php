<?php include("entete.php");?>
<div class=container>
<h2 class ="text-center">Résultats des différents questionnaires </h2>
<nav class="navbar ">
    <a href ="questionnaires.php?page=sus"class="btn btn-sm btn-outline-secondary" role='button' aria-pressed='true'>Questionnaires SUS</a>
    <a href ="questionnaires.php?page=preexp" class="btn btn-sm btn-outline-secondary" role='button' aria-pressed='true'>Pré-expérience</a>
    <a href ="questionnaires.php?page=postexp" class="btn btn-sm btn-outline-secondary" role='button' aria-pressed='true'>Post-expérience</a>
    <a href ="questionnaires.php?page=croisement" class="btn btn-sm btn-outline-secondary" role='button' aria-pressed='true'>Résultats croisés</a>
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
    <img class="image" src="images/SUS1.png" alt="Histogramme illustrant les scores obtenus par les claviers au questionnaire SUS"/>            
    <p class="text-center"><em>Figure n°1 : Score moyen obtenu par chaque clavier avec le questionnaire SUS</em></p>
    <br/>
    <p>
        Néanmoins, si on observe au cas par cas, on remarque que 63.6% des participants ont attribué une meilleure note au clavier 
        neutre, tandis que 27.3% ont attribué la même note aux deux claviers, et que seulement 9.1% ont attribué une meilleure 
        note au clavier célébrité (<em>figure n°2</em>). <br/>
        Ainsi, la majorité des participants semblent avoir trouvé le clavier neutre plus 
        utilisable.
    </p>
    <br/>
    <img class="image" src="images/SUS2.png" alt="Graphique illustrant le clavier le mieux noté par chaque participant"/>            
    <p class="text-center"><em>Figure n°2 : Clavier ayant été le mieux noté par chaque participant</em></p>
    <br/>
    <?php
    
    }
    else if ($_GET['page']=='preexp'){
?>
    </br>
    <h3>Questionnaire pré-expérience </h3>
    </br>
    <section>
        <h4>Vécu des participants avec un BCI</h4>
        <br/>
        <p>Une partie de ce questionnaire avait pour but de prendre connaissance de l’éventuel vécu des participants avec un BCI</p>
        <br/>
        <img class="image" src="images/utiliseBCI.png" alt="Graphique illustrant le pourcentage de participants ayant déjà utilisé un système BCI"/>            
        <p class="text-center"> <em>Figure n°1 : Pourcentage de participants ayant déjà utilisé un système BCI</em></p>

        <p>
            Ainsi, la majorité des participants n’avaient jamais utilisé un BCI auparavant.<br/>
            A noter que sur les quatre personnes en ayant déjà utilisé un (contre sept n’en ayant jamais utilisé), deux personnes 
            ont eu l’occasion de le faire via un projet transdisciplinaire au sein de l’école, une autre via une autre expérience
            utilisateur et la dernière via une expérience à l’INRIA.
        </p>
        <p>
            De même, nous avons voulu savoir si les participants étaient étrangers ou non au concept de clavier virtuel. Il 
            s’avère que 81% des participants en avaient déjà entendu parler, mais seulement 36% savaient précisément de quoi il 
            s’agissait. De même, sur ces quatre personnes en ayant déjà utilisé un, deux l’ont fait sur un ordinateur et les deux 
            autres sur une autre plateforme.
        </p>
        <br/>
        <img class="image" src="images/entenduparler.png" alt="Graphique illustrant le pourcentage de participants ayant déjà entendu parler d'un clavier virtuel"/>            
        <p class="text-center"> <em>Figure n°2 : Pourcentage de participants ayant déjà entendu parler d'un clavier virtuel</em></p>
        <br/>
        <img class="image" src="images/plateformeutilise.png" alt="Graphique illustrant la plateforme d'éventuelle utilisation d'un clavier virtuel"/>            
        <p class="text-center"> <em>Figure n°3 : Plateforme d'éventuelle utilisation d'un clavier virtuel</em></p>
        <p>
            De même, nous avons voulu savoir si les participants avaient déjà pris part à d’autres expériences de ce type ou non.
        </p>
        <br/>
        <img class="image" src="images/autresexpes.png" alt="Graphique montrant si les participants ont participé à d'autres expériences"/>            
        <p class="text-center"> <em>Figure n°4 : Participations à d'autres expériences</em></p>
        <p>
            Ainsi, c’est en majorité le cas, avec 73% des participants ayant déjà participé à au moins une expérience, dont 18% à 
            au moins plus de trois expériences. Il s’agissait donc d’une première pour 27 participants. Ainsi, le fait d’avoir 
            déjà participé à une expérience ou non ne devrait pas orienter les résultats.
        </p>
    </section>
    <section>
        <h4>Rapport des participants aux écrans</h4>
        <br/>
        <p>
            Nous avons aussi voulu connaître le temps passé par participants devant un écran, afin d’éventuellement avoir des 
            indices sur leur vue, la fatigue visuelle qui peut en découler, etc.
        </p>
        <br/>
        <img class="image" src="images/ordi.png" alt="Graphique illustrant le temps passé par les participants devant un ordinateur"/>            
        <p class="text-center"><em>Figure n°5 : Temps passé par les participants devant un ordinateur</em></p>
        <br/>
        <img class="image" src="images/tel.png" alt="Graphique illustrant le temps passé par les participants sur leur téléphone"/>            
        <p class="text-center"><em>Figure n°6 : Temps passé par les participants sur leur téléphone</em></p>
        <br/>
        <img class="image" src="images/tele.png" alt="Graphique illustrant le temps passé par les participants devant la télévision"/>            
        <p class="text-center"><em>Figure n°7 : Temps passé par les participants devant la télévision</em></p>
        <br/>
        <p>
            Ainsi, cela nous a permis d’avoir une idée de l’habitude des participants ou non à rester le regard figé devant un écran, 
            condition pour que l’expérience donne des résultats probants.
        </p>
    </section>
    <section>
        <h4>État émotionnel du participant</h4>
        <br/>
        <p>
            Nous avons souhaité nous renseigner sur l’état émotionnel du participant au moment où il passait l’expérience afin 
            de vérifier si cela pouvait ou non impacter les performances du dispositif.
        </p>
        <br/>
        <img class="image" src="images/fatiguepre.png" alt="Graphique illustrant le niveau de fatigue des participants pré-expérience"/>            
        <p class="text-center"><em>Figure n°8 : Niveau de fatigue des participants pré-expérience</em></p>
        <p>
            Ainsi, nous avons pu constater que la plupart des participants étaient en bonne forme, avec une majorité de valeurs 
            comprises dans la seconde moitié (entre 3 et 5).
        </p>
        <br/>
        <img class="image" src="images/stresspre.png" alt="Graphique illustrant le niveau de stress des participants pré-expérience"/>            
        <p class="text-center"><em>Figure n°9 : Niveau de stress des participants pré-expérience</em></p>
        <br/>
        <p>
            De même, la majorité des participants étaient peu ou pas stressés à l’idée de passer cette expérience, ce qui est un 
            plutôt bon réconfort quant à notre communication.
        </p>
        <img class="image" src="images/grillepost.png" alt="Zones de la grille séléctionées par les participants"/>            
        <p class="text-center"><em>Figure n°10 : Zones de la grille séléctionées par les participants</em></p>
        <p>
            Cette grille a également pu nous apporter des indications supplémentaires sur leur état émotionnel, et nous avons pu 
            constater que, si quatre personnes étaient plutôt excitées contre sept non-excitées, neuf personnes sur onze étaient 
            positives quant à cette expérience, contre une personne neutre et une personne plutôt négative.
        </p>
        <p>
            Ainsi, même si les résultats étaient plutôt variés, ils se concentrent dans le coin inférieur droit, tendant vers des 
            sentiments positifs et de la détente.
        </p>
    </section>
    <section>
        <h4>Informations personnelles</h4>
        <br/>
        <p>
            Enfin, nous avons voulu nous renseigner sur les participants, avec des données telles que l’âge, le genre ou la 
            situation professionnelle:
        </p>
        <br/>
        <img class="image" src="images/age.png" alt="Graphique montrant l'age des participants "/>            
        <p class="text-center"><em>Figure n°11 : Age des participants</em></p>
        <img class="image" src="images/genre.png" alt="Graphique montrant le genre des participants "/>            
        <p class="text-center"><em>Figure n°12 : Genre des participants</em></p>
        <img class="image" src="images/situationpro.png" alt="Graphique montrant l'age des participants "/>            
        <p class="text-center"><em>Figure n°13 : Situation professionnelle des participants</em></p>
        <p>
            Enfin, nous avons souhaité savoir comment les participants avaient eu vent de notre expérience:
        </p>
        <br/>
        <img class="image" src="images/decouverte.png" alt="Graphique montrantcomment les participants ont découvert notre expérience"/>            
        <p class="text-center"><em>Figure n°14 : Moyen de découverte de notre expérience</em></p>
        <br/>
        <p>
            Ainsi, si une majorité en a entendu parler grâce à notre communication par mail, le bouche à oreille a aussi 
            joué son rôle, notamment pour les participants extérieurs à l’école.
        </p>
    </section>
    <?php
    
    }
    else if ($_GET['page']=='postexp'){

        ?>
</br>
<h3>Questionnaire post-expérience </h3>
    </br>
    <section>
        <h4>Comparaison des claviers</h4>
        <br/>
        <p>Une partie de ce questionnaire avait pour but de comparer les impressions des sujets sur chaque clavier.</p>
        <br/>
        <img class="image" src="images/fatigueclavier.png" alt="Graphique illustrant le clavier le plus fatiguant"/>            
        <p class="text-center"> <em>Figure n°1 : Clavier le plus fatigant</em></p>

        <p>
            Il leur a ainsi majoritairement semblé que le clavier présentant une image de célébrité était le plus fatigant.<br/> 
            Nous les avons ensuite questionnés sur l’agréabilité des deux claviers :
        </p>
        <br/>
        <img class="image" src="images/agreableceleb.png" alt="Graphique illustrant le niveau d'agréabilité du clavier célébrité"/>            
        <p class="text-center"> <em>Figure n°2 : Agréabilité du clavier célébrité</em></p>
        <br/>
        <img class="image" src="images/agreableneutre.png" alt="Graphique illustrant le niveau d'agréabilité du clavier neutre"/>            
        <p class="text-center"> <em>Figure n°3 : Agréabilité du clavier neutre</em></p>
        <p>
            La fatigue plus importante semblant être causée par le clavier célébrité à l’air d’avoir un impact sur l’agréabilité 
            de ce dernier. En effet, il est jugé beaucoup moins agréable (moyenne de 2.5) par les sujets que le clavier neutre 
            (moyenne de 3.9). 
        </p>
        <p>
            C’est ainsi sans surprise au vu des résultats précédents que les sujets estiment le clavier avec les images neutres 
            plus facile d’utilisation que le clavier célébrité. 
        </p>
        <br/>
        <img class="image" src="images/faciliteclaviers.png" alt="Graphique illustrant le clavier le plus simple selon les participants"/>            
        <p class="text-center"> <em>Figure n°4 : Facilité des claviers</em></p>
        <p>
            Nous nous sommes également intéressés à la reconnaissance de la célébrité et des images neutres présentes sur les 
            claviers.
        </p>
        <br/>
        <img class="image" src="images/celebdistingue.png" alt="Graphique illustrant les célébrités distinguées par les utilisateurs"/>            
        <p class="text-center"> <em>Figure n°5 : Célébrité distinguée</em></p>
        <p>
            Quasiment tous les sujets ont remarqué que la célébrité présente sur le clavier était Obama. Un des sujets a néanmoins 
            cru dans un premier temps qu’il s’agissait de Jean Dujardin mais s’est finalement corrigé pour Obama. </br>
            2 personnes ne se sont pas exprimées sur la célébrité.
        </p>
        <br/>
        <img class="image" src="images/distingue.png" alt="Graphique illustrant les images neutres distinguées par les utilisateurs"/>            
        <p class="text-center"><em>Figure n°6 :  Images neutres distinguées</em></p>
        <p>
            En ce qui concerne les images neutres, 23 réponses ont été soumises. Dans les images qui reviennent le plus, on 
            retrouve la fourchette, l’assiette, la cuillère, le ventilateur et les champs. Un des sujets a cependant répondu 
            qu’il n’avait retenu aucune des images du clavier, ni la célébrité. <br/>
            Il serait intéressant de mettre en parallèle ces résultats avec les mots demandés aux sujets lors de l’expérience.
        </p>
        <p>
            Ainsi, le clavier avec des images neutres semblerait plus simple et agréable du point de vue des participants. 
            Nous pourrions alors penser que le clavier neutre serait plus efficace. Il est cependant assez intéressant de mettre 
            ces résultats en parallèle avec ceux bruts de l'expérience où un nombre d'erreurs plus important a été observé pour 
            le clavier neutre.
        </p>

    </section>
    <section>
        <h4>Résultats généraux de l'expérience</h4>
        <br/>
        <p>
            Plus généralement, nous avons souhaité savoir comment les sujets se sentaient après notre expérience ainsi que leur 
            avis sur cette dernière. Nous avons dans un premier temps interrogé sur le niveau de fatigue causé.
        </p>
        <br/>
        <img class="image" src="images/fatiguepost.png" alt="Graphique illustrant le niveau de fatigue causé par l'expérience"/>            
        <p class="text-center"><em>Figure n°7 : Fatigue causée par l’expérience</em></p>
        <p>
            L’expérience a été jugée plutôt fatigante par les sujets (en moyenne 3.3). Nous nous attendions à ce qu’elle soit 
            trouvée fatigante car cette expérience est assez longue (environ 1 heure) et consiste à fixer des écrans.
        </p>

        <p>
            Nous nous sommes également intéressés à leur état en fin d’expérience.
        </p>
        <br/>
        <img class="image" src="images/zoomgrille.png" alt="Zoom sur la zone de la grille où sont concentrés les résultats"/>            
        <p class="text-center"><em>Figure n°8 : Etat post-expé</em></p>
        <p>
            Nous remarquons que l’état des sujets est centré sur une même zone de la grille présentée à la figure 8. Les sujets 
            éprouveraient, après l’expérience, vers des sentiments agréables tendant plutôt vers la somnolence et la relaxation 
            pour la plupart. Cela concorde avec les résultats précédents concernant la fatigue. Ces résultats vont être comparés 
            par la suite avec ceux donnés avant l’expérience.
        </p>
        <p>
            Enfin nous avons interrogé les sujets sur la pertinence de notre projet.
        </p>
        <br/>
        <img class="image" src="images/attentes.png" alt="Graphique illustrant si le projet correspond aux attentes"/>            
        <p class="text-center"><em>Figure n°9 : Attentes des participants</em></p>
        <br/>
        <img class="image" src="images/pertinence.png" alt="Graphique illustrant la pertinance du projet selon les participants"/>            
        <p class="text-center"><em>Figure n°10 : Pertinence du projet selon les participants</em></p>
        <p>
            L’expérience semble correspondre aux attentes des sujets, qui ont tous été prêts à recommander cette expérience à 
            leurs proches, montrant leur satisfaction quant à la pertinence et attentes de ce projet. 
        </p>
    </section>    
        <?php
    
}
else if ($_GET['page']=='croisement'){
?>
    </br>
    <h3>Croisement des résultats</h3>
    </br>
    <p>
        A l’issue de ces expériences, nous avons pu effectuer un comparatif des résultats des questionnaires pré-expérience et 
        post-expérience:
    </p>
    <img class="image" src="images/comparaisonstress.png" alt="Graphique illustrant la différence entre le niveau de stress avant et après l'expérience"/>            
    <p class="text-center"><em>Figure n°1 : Comparaison du niveau de stress pré/post expérience</em></p>
    <p>
        Ainsi, nous avons pu constater que la grande majorité des participants ont conservé leur niveau de stress. A noter que la seule 
        personne dont le niveau de stress a augmenté l’a vu passé de la valeur la plus faible à la seconde valeur la plus faible.
    </p>
        
    <p>
        Ainsi, nous pouvons en déduire qu’il ne s’agit pas d’une expérience stressante pour les participants.
    </p>
        
    <p>
        Enfin, nous avons pu comparer les résultats de la grille:
    </p>
    <img class="image" src="images/grillecomparaison.png" alt="Grille d'état pré et post expé"/>            
    <p class="text-center"><em>Figure n°2 : Comparaison des zones choisies sur la grille pré/post expérience</em></p>
    <p>
        Ainsi, nous constatons que les changements sont variés et plutôt équilibrés. Ainsi, seules deux personnes ont développé 
        des sentiments plus désagréables, contre quatre pour des sentiments plus positifs. Les cinq restantes ayant conservé ce 
        niveau intact.</br>
        Enfin la majorité des participants ont vu leur excitation baisser, avec sept participants contre une personne l’ayant 
        conservée intacte et trois personnes l’ayant vue augmenter.
    </p>
    <p>
        Ainsi, la majorité des participants semble avoir été “calmée” par cette expérience, mais les résultats quant aux 
        sentiments sont trop disparates pour en permettre une analyse poussée.
    </p>
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
