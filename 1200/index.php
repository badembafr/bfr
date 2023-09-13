<?php  include '../includes/host.php'  ?>

<?php 

$bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8;", $id, $passwd);

$requete = $bdd->query("SELECT * FROM `config` WHERE id='3' ");

$config = $requete->fetch();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuration <?php echo $config['titre']; ?>  - BaDemBa.fr</title>
    <link rel="shortcut icon" href="medias/favicon.ico" />
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js"></script>
    <link rel="shortcut icon" href="../medias/favicon.ico" />
    <script src="https://kit.fontawesome.com/0cc17e4337.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('../includes/navbar.php') ?>


    <?php include('../includes/pc.php') ?>

    <?php include('../includes/bench.php') ?>
    <?php include('../includes/toppc.php') ?>
    <?php include('../includes/categ.php') ?>
    <?php include('../includes/footer.php') ?>
</body>
</html>