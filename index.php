<?php  include 'includes/host.php'  ?>


<?php
$bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8;", $id, $passwd);
$requete2 = $bdd->query("SELECT * FROM `config` WHERE pop='hight' ORDER BY prix LIMIT 4");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Bademba">
    <meta name="category" content="informatique">
    <meta name="keywords" content="Bademba, étudiant en licence informatique, développement web, hardware, cybersecurité, informatique, développeur web, réalisations, projets en cours, bademba.fr">
    <meta name="description" content="Bademba, étudiant en licence informatique, partage ses passions et ses projets sur bademba.fr. Découvrez comment il fusionne ses connaissances universitaires avec ses intérêts pour l'hardware et le développement web. Visitez bademba.fr pour en savoir plus sur ses réalisations et ses projets en cours.">
    <title>Bademba.fr : Conception de PC sur mesure !</title>
    <link rel="shortcut icon" href="medias/favicon.ico" />
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <script src="https://kit.fontawesome.com/0cc17e4337.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('includes/navbar.php') ?>

    <section class="front">
        <div class="content">
            <div class="head">
                <h1>Nos Configurations PC</h1>
                <p>Prêt à assembler votre propre PC et besoin d'inspiration pour commencer ? Explorez nos guides de montage, couvrant une variété d'utilisations et de budgets, pour vous lancer dans votre projet PC en toute confiance !</p>
                <div class="bouton">
                    <ul>
                        <li><i class="fa-solid fa-arrow-right"></i><a href="https://bademba.fr/pc">Voir les Configurations !</a></li>
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

    <section class="categories" id="categories">
        <div class="titre-infos">
        </div>
        <div class="box-container">
            <a href="https://bademba.fr/gaming">
                <div class="box">
                    <img src="medias/gaming.png" alt="">
                    <h3>PC Gaming</h3>
                </div>
            </a>
            <a href="https://bademba.fr/multi">
                <div class="box">
                    <img src="medias/multitache.png" alt="">
                    <h3>PC Gaming & Streaming</h3>
                </div>
            </a>
            <a href="https://bademba.fr/bureau">
                <div class="box">
                    <img src="medias/bureautique.png" alt="">
                    <h3>PC Bureautique</h3>
                </div>
            </a>
        </div>
    </section>

    <section id="categories-PC">
        <div class="categories-PC">
            <?php
            $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8;", $id, $passwd);
            $requete3 = $bdd->query("SELECT * FROM `config` WHERE pop='hight' ORDER BY prix LIMIT 3");
            while ($config3 = $requete3->fetch()): ?>
                <div class="conteneur">
                    <div class="box1">
                        <img src="<?php echo $config3['link-img'] ?>" alt="Pop Air">
                    </div>
                    <div class="box2">
                        <h1><?php echo $config3['titre'] ?></h1>
                        <p><?php echo $config3['description'] ?></p>
                    </div>
                    <div class="box3">
                        <p><?php echo $config3['prix'] ?>.00 €</p>
                        <div class="btn-shop"><li><a href="<?php echo $config3['link-pc'] ?>" > <i class="fab fa-amazon"></i> COMMANDER</a></li></div>
                        <div class="btn-shop-3"><li><a href="<?php echo $config3['link-pc'] ?>" > COMPOSANTS </a></li></div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </section>

    <?php include('includes/footer.php') ?>
    <?php include('includes/toup.php') ?>
</body>
</html>
