<?php  include '../includes/host.php'  ?>


<?php
$bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8;", $id, $passwd);
$requete3 = $bdd->query("SELECT * FROM `config` WHERE id=5");
?>

<?php
$bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8;", $id, $passwd);
$requete = $bdd->query("SELECT * FROM `config` WHERE id=5");
$config = $requete->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurations PC - BaDemBa.fr</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../medias/favicon.ico" />
    <script src="../js/script.js"></script>
    <script src="https://kit.fontawesome.com/0cc17e4337.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include '../includes/navbar.php' ?>

    

    <?php include '../includes/pc.php' ?>
    
    <?php include('../includes/bench.php') ?>
    <?php include('../includes/toppc.php') ?>
    <?php include('../includes/categ.php') ?>
    <?php include('../includes/footer.php') ?>
</body>
</html>
