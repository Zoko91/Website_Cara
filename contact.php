<?php include("entete.php");
?>
    <br>
    <br>

    <div class="text-center"><h2>Formulaire de contact :</h2></div>

    <br>
    <div class="container mx-auto" style="width:30%;">
        <fieldset class="border border-light border-2 rounded">
            <form role="form" id="formParag" class="px-4 py-3" method="post">
                <label for="email">Votre email</label>
                <input type="email" style="width: 100%" class="border-danger" name="email" id="email" required><br>
                <br/>
                <label>Message</label><span>  </span>
                <textarea name="message" class="border-danger" id="message" style="height:100px; width: 100%;color: black;" required></textarea><br>
                <br/>
                <button type="submit" class="btn btn-danger text-white button">Envoyer</button>
            </form>
            <?php
            if (isset($_POST['message'])) {
                $retour = mail('jbeasse@ensc.fr', 'Envoi depuis la page Contact', $_POST['message'], 'From: '.$_POST['email']);
                if($retour){
                    $bandeau = '<div class="alert alert-success text-center"><strong style="color:#0f5132">'."Merci ! </strong>Le mail a bien été envoyé.</div><br>";
                    $retour = false;
                    echo $bandeau;
                }
            }
            ?>
        </fieldset>
    </div>
    <div class="offset-md-1 col-12 col-md-6">

    </div>

    <div class="col-12 col-md-7 text-dark fw-bold" id="formulaire">
        <form method="post">

        </form>

    </div>






<?php include("footer.php") ?>