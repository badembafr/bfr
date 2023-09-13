<?php  include '../includes/host.php'  ?>

<?php

$bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8;", $id, $passwd);

// Valider le formulaire
if (isset($_POST['valider'])) {

        // Les données de la question
        $titre = $_POST['titre'];


        // Insérer la question sur le site
        $insererQuestionSurSite = $bdd->prepare('INSERT INTO config(titre) VALUES(?)');
        $insererQuestionSurSite->execute(
            array(
                $titre
            )
        );

        $successMsg = "Votre question a bien été publiée sur le site";

    } 
?>


<!DOCTYPE html>
<html lang="fr">


<body>


    <br><br>
    <form class="question-form" method="POST">


        <div class="form-group">
            <label for="question-description" class="form-label">TITRE :</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
     
        <button type="submit" class="btn btn-primary" name="valider">Publier</button>
    </form>

</body>

</html>
