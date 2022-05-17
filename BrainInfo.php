<?php include("entete.php");
?>
<title>BrainInfo2022</title>
<body>
    <br>
    <br>
    <br>
    <div class=container>
        <h1 class="text-center">Expérience pour la BrainInfo2022</h1><br/>
        <section>
            <p>
                Dans le cadre de notre projet, notre client Ricardo Ron Angevin nous a proposé de participer à une conférence internationale de neurosciences et de sciences cognitives (BrainInfo). Cette conférence scientifique a lieu chaque année depuis 2016 dans différents pays. La session 2022 se déroulera du 22 au 26 mai à Venise, en Italie. <br/>
                La date limite pour soumettre un article pour cette conférence était le 24 février. Nous avons cependant dû rendre des premiers résultats début février afin de permettre à notre client de pouvoir les analyser et utiliser dans un article scientifique. <br/>
                Nous avons ainsi fait passer du 31/01/2022 au 07/02/2022 4 premiers sujets. Ces expériences se sont déroulées avec une première version de notre protocole et sans questionnaire. Ces premières expériences nous ont permis d’apprendre à utiliser le système BCI et de nous y familiariser. <br/>
                Malgré le peu de sujets que nous avions pu faire passer, nous avions regroupé pour chaque sujet et clavier l’ordre de passage qui était alterné, le résultat de la calibration, le nombre de flashs durant la phase on-line c’est à dire le nombre de fois où chaque ligne et colonne étaient flashées pour pouvoir écrire une lettre durant l’expérimentation et le nombre d’erreurs durant la phase online. <br/>
            </p>
        </section>
        <section>
            <h2>Résultats des premières expériences</h2>
            <table>
                <tr style="background-color: rgb(0,70,139)">
                    <td>Sujet</td>
                    <td>Clavier</td>
                    <td>Résultat calibration</td>
                    <td>Nombre de flashs phase on-line</td>
                    <td>Nombre d'erreurs phase on-line</td>
                </tr>
                <tr>
                    <tr>
                        <td rowspan="2" style="background-color : rgb(139,0,0)">Sujet n°1</td>
                        <td>Célébrité (1)</td>
                        <td>100% dès le 2nd flash</td>
                        <td>3</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Neutre (2)</td>
                        <td>100% dès le 2nd flash</td>
                        <td>3</td>
                        <td>1 (sûrement dû à un bug du logiciel)</td>
                    </tr>
                </tr>
                <tr>
                    <tr>
                        <td rowspan="2" style="background-color : rgb(139,0,0)">Sujet n°2</td>
                        <td>Célébrité (2)</td>
                        <td>100% dès le 2nd flash</td>
                        <td>3</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Neutre (1)</td>
                        <td>100% dès le 3ème flash mais redescends sous les 100% à partir du 8ème flash</td>
                        <td>4</td>
                        <td>0</td>
                    </tr>
                </tr>
                <tr>
                    <tr>
                        <td rowspan="2" style="background-color :rgb(139,0,0)">Sujet n°3</td>
                        <td>Célébrité (2)</td>
                        <td>100% dès le 2nd flash</td>
                        <td>3</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Neutre (1)</td>
                        <td>100% dès le 1er flash</td>
                        <td>2</td>
                        <td>4</td>
                    </tr>
                </tr>
                <tr>
                    <tr>
                        <td rowspan="2" style="background-color : rgb(139,0,0)">Sujet n°4</td>
                        <td>Célébrité (1)</td>
                        <td>100% dès le 1er flash</td>
                        <td>3</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Neutre (2)</td>
                        <td>100% dès le 2nd flash</td>
                        <td>3</td>
                        <td>0</td>
                    </tr>
                </tr>
            </table><p>Remarque : Pour les sujet 3 et 4, qui ont obtenu lors du calibrage 100% dès le 1er flash, nous avons constaté que tous les mots étaient mal écrits. Pour ces deux sujets, après un second calibrage où les 100% étaient atteints après le 1er flash, les mots étaient correctement écrits. Ainsi, nous pensons que les mauvais résultats ne proviennent pas des claviers (qui ne sont pas les mêmes pour les 2 sujets concernés) mais du calibrage. </p>
            <br/>            
            <p>Nous avons donc été confrontés à des premières difficultés que nous n’avons pas su expliquer durant le passage de ces expériences. Au vu du peu de sujet et des problèmes rencontrés lors du passage des expériences, il est difficile d’établir de premiers résultats. Néanmoins notre client a tout de même pu les analyser dans un article qui sera présenté lors de la BrainInfo.</p>
        </section>
    <?php include("footer.php") ?>
    </div>
</body>