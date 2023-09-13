<?php
$bdd = new PDO('mysql:host=localhost;dbname=bfr;charset=utf8;', 'root', 'root');
$requete = $bdd->query("SELECT * FROM `config` ORDER BY prix");
?>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=bfr;charset=utf8;', 'root', 'root');
$requete2 = $bdd->query("SELECT * FROM `config` WHERE pop='hight' ORDER BY prix LIMIT 4");
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

    <section class="front">
        <div class="content">
            <div class="head">
                <h1>Toutes nos Configurations PC</h1>
                <p>Prêt à assembler votre propre PC et besoin d'inspiration pour commencer ? Explorez nos guides de montage, couvrant une variété d'utilisations et de budgets, pour vous lancer dans votre projet PC en toute confiance !</p>
                <div class="bouton">
                    <ul>
                        <li><i class="fa-solid fa-arrow-right"></i><a href="#pc">Voir les Configurations !</a></li>
                    </ul>
                </div>
            </div>
            <div class="PC">
                <?php while ($config2 = $requete2->fetch()): ?>
                <div class="insousbox">
                    <a href="<?php echo $config2['link-pc'] ?>">
                        <div class="imgb"><img src="<?php echo $config2['link-img'] ?>" alt=""></div>
                        <div><h2><i class="fa-solid fa-sheet-plastic"></i><?php echo $config2['titre'] ?> </h2></div>
                        <div><p><?php echo $config2['description'] ?></p></div>
                    </a>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <div  class="categories-PC" id="gaming"></div>

    <?php 
    while ($config = $requete->fetch()) {
    ?>
    <section id="categories-PC">
        <div class="categories-PC">
            <div id="pc" class="conteneur">
                <div class="box1">
                    <img src="<?php echo $config['link-img']?>" alt="Pop Air">
                </div>
                <div class="box2">
                    <h1><?php echo $config['titre'] ?></h1>
                    <p><?php echo $config['description'] ?></p>
                </div>
                <div class="box3">
                    <p><?php echo $config['prix'] ?>.00 €</p>
                    <div class="btn-shop"><li><a href="<?php echo $config['link-pc']?>" target="blank"> <i class="fab fa-amazon"></i> COMMANDER</a></li></div>
                    <div class="btn-shop-3"><li><a href="<?php echo $config['link-pc']?>" target="blank"> COMPOSANTS </a></li></div>
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
