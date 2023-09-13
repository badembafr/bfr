<?php  include '../includes/host.php'  ?>

<?php 

$bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8;", $id, $passwd);

$requete = $bdd->query("SELECT * FROM `config` WHERE categorie='bureau' ORDER BY prix");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurations PC Bureautique - BaDemBa.fr</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js"></script>
    <link rel="shortcut icon" href="../medias/favicon.ico" />
    <script src="https://kit.fontawesome.com/0cc17e4337.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include '../includes/navbar.php' ?>

<?php 

$bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8;", $id, $passwd);

$requete2 = $bdd->query("SELECT * FROM `config` WHERE categorie='bureau' ORDER BY prix LIMIT 4");

?>

<section class="front">
    <div class="content">
        <div class="head">
            <h1>Configurations PC Bureautique</h1>
            <p>Découvrez nos guides détaillés, sélectionnez les composants adaptés à vos besoins, et profitez de conseils pour optimiser les performances de votre configuration bureautique. Vous êtes prêt à vivre une expérience de productivité exceptionnelle !</p>
            <div class="bouton">
                <ul>
                    <li><i class="fa-solid fa-arrow-right"></i><a href="#pc">Voir les Configurations !</a></li>
                </ul>
            </div>
        </div>
        <div class="PC">
            <?php 
            while($config2 = $requete2->fetch())
            {
            ?>
            <div class="insousbox">
                <a href="<?php echo $config2['link-pc'] ?>">
                    <div class="imgb"><img src="<?php echo $config2['link-img'] ?>" alt=""></div>
                    <div><h2><i class="fa-solid fa-sheet-plastic"></i><?php echo $config2['titre'] ?> </h2></div>
                    <div><p><?php echo $config2['description'] ?></p></div>
                </a>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>

<?php 
while($config = $requete->fetch())
{
?>
<section id="categories-PC">
    <div id="pc" class="categories-PC">
        <div class="conteneur">
            <div class="box1">
                <img src="<?php echo $config['link-img']?>" alt="Pop Air">
            </div>
            <div class="box2">
                <h1><?php echo $config['titre'] ?></h1>
                <p><?php echo $config['description'] ?></p>
            </div>
            <div class="box3">
                <p><?php echo $config['prix'] ?>.00 €</p>
                <div class="btn-shop"><li><a href="<?php echo $config['link-pc']?>" target="blank"  > <i class="fab fa-amazon"></i> COMMANDER</a></li></div>
                <div class="btn-shop-3"><li><a href="<?php echo $config['link-pc']?>" target="blank" > COMPOSANTS </a></li></div>
            </div>
        </div>
    </div>
</section>
<?php
}
?>

<?php include '../includes/categ.php' ?>
<?php include '../includes/footer.php' ?>
<?php include '../includes/toup.php' ?>
</body>
</html>
