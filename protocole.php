<?php include("entete.php");
?>
    <br>
    <br>
    <br>
    <div class=container>
    <h1 class="text-center">Protocole expérimental Cara</h1>
    <br/>
    <p>
        Ce protocole est réalisé dans le but de comparer les résultats des performances BCI de deux claviers virtuels : le premier composé d’images neutres et le second d’une photo de célébrité. 
        Pour cela les expériences se déroulent dans la Forge, un bâtiment de l’Ecole Nationale Supérieure de Cognitique (ENSC) et sont réalisées par 5 étudiants en première année qui forment l’équipe de ce projet.
    </p>
    <br/>
    <section>
        <h2>Sujets et matériel</h2>
        <br/>
        <h3>Sujets</h3>
        <p>Ces expériences sont effectuées par une douzaine de participants, étudiants eux aussi à l’ENSC. Ils doivent avoir une vue normale ou corrigée leur permettant de distinguer les couleurs. Il est également préférable qu’ils n’aient jamais participé à des expériences BCI auparavant. </p>

        <h3>Matériels</h3>
        <p>L’expérience a lieu dans le bâtiment de la Forge à l’ENSC dans une salle équipée d’EEG ainsi que d’un ordinateur. L’expérience s’effectue à l’aide du logiciel UMA BCI-Speller qui a permis l’élaboration des claviers de taille 5x5 et qui permet également de pouvoir les tester. </p>
    </section>
    <br/>
    <section>
        <h2>Déroulement de l’expérience</h2>
        <br/>
        <h3>Avant l’expérience</h3>
        <p>Avant de commencer l’expérience, les participants sont tenus au courant du déroulement de cette dernière. Il leur est rappelé que ce ne sont pas leurs performances qui sont jugées mais celles des claviers virtuels. Un rappel est également fait sur la protection de leurs données, qui seront anonymisées et qui ne serviront que pour les résultats de nos expériences. Une <a href="lettreinfo.php">lettre d'information</a> leur est présentée et ils devront signer un <a href="formulaireconsentement.php">formulaire de consentement</a> quant à l’utilisation de leurs données ainsi que remplir un questionnaire de pré-expérience sur un ordinateur mis à leur disposition. Une grille, montrée ci-dessous, permettant de juger du stress, de la somnolence et des sentiments agréables est présente sur la table et devra être expliquée aux sujets afin qu’ils puissent évaluer leurs niveaux de stress.</p>
        <img class="image" src="images/Grille.png" alt="Grille permettant de juger notre état de fatigue, stress et d'excitation"/>
        <br/>
        <h3>Installation</h3>
        <p>Avant de débuter l’expérience, le participant est installé sur un siège face à un écran, afin qu’il soit à une distance d’environ 100 cm de celui-ci. On place ensuite le casque EEG sur le crâne du participant, en vérifiant qu’il est bien centré. L’électrode Cz doit être positionnée à distance égale de la nuque et de la base des sourcils. Puis, afin que les électrodes adhèrent au cuir chevelu et afin d’avoir un bon signal, on insère du gel dans les trous au niveau des électrodes à l’aide d’une seringue, et on place l’électrode de référence au niveau du lobe de l’oreille.</p>

        <h3>Calibrage</h3>
        <p>Afin de comparer les performances obtenues avec les deux claviers: “célébrités” et “images neutres”, chaque participant réalise une phase de calibrage sur les deux claviers afin de déterminer le nombre de flashs correspondant au clavier. L’ordre de passage des claviers est alterné afin d’éviter de biaiser les résultats. <br/>
        Le calibrage doit se faire avec 10 flashs. Une fois ce dernier terminé, on détermine le nombre de flashs qui correspond au nombre minimum pour avoir le calibrage à 100% + 1. Un calibrage est nécessaire pour chaque clavier. <br/>
        Les mots utilisés pour le calibrage sont “PURE”, “FEUX” et “CHAT”.</p>

        <h3>Expérience</h3>
        <p>Le sujet doit écrire les mots “LUNE”, “ABRI”, “YOGA” et “CHEF”. Les données mesurées sont :
            <ul>
                <li>l’écriture correcte du mot</li>
                <li>le nombre d’erreurs s’il y en a </li>
                <li>l’analyse plus poussée des résultats obtenus sur l’ordinateur </li>
            </ul>
            Après chaque clavier le sujet passe un questionnaire SUS ; sur une échelle de 1 (pas du tout d’accord) à 5 (tout à fait d’accord), les participants répondent aux questions suivantes :
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
        <h2>Après l’expérience</h2>
        <p>Une fois le second clavier passé et le score de satisfaction obtenu, le sujet passe un questionnaire post expérience depuis un ordinateur mis à sa disposition. Ce questionnaire est à faire dans la salle d’expérience aux côtés des examinateurs.
        Une fois le dernier questionnaire rempli, le sujet a le droit à des chocolats et peut partir.</p>
    </section>

    </div>
<?php include("footer.php") ?>