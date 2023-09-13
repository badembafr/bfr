<?php  include '../includes/host.php'  ?>


<?php 

$bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8;", $id, $passwd);

$requete = $bdd->query("SELECT * FROM `config` WHERE id='9' ");

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

    <div class="espace"></div>

    <section id="PC-details">
        <div class="PC-details">
            <div class="titre">
                <h1> <?php echo $config['titre']; ?> </h1>
                <p><?php echo $config['description'] ?></p>
           </div>
            <div class="conteneur">
                <div class="box1">
                    <img src="<?php echo $config['link-img'] ?>" alt="">
                </div>
                <div class="box2">
                    <div class="options">
                        <a href="<?php echo $config['cpu-link']?>" target="blank"><p><i class="fa-brands fa-amazon"></i><?php echo $config['cpu']?></p></a>            
                        <!--<a href="<?php echo $config['cooling-link']?>" target="blank"><p><i class="fa-brands fa-amazon"></i><?php echo $config['cooling']?></p></a>-->   
                        <a href="<?php echo $config['cm-link']?>" target="blank"><p><i class="fa-brands fa-amazon"></i><?php echo $config['cm']?></p></a>   
                        <!--<a href="<?php echo $config['gpu-link']?>" target="blank"><p><i class="fa-brands fa-amazon"></i><?php echo $config['gpu']?></p></a>--> 
                        <a href="<?php echo $config['ram-link']?>" target="blank"><p><i class="fa-brands fa-amazon"></i><?php echo $config['ram']?></p></a>   
                        <a href="<?php echo $config['stock1-link']?>" target="blank"><p><i class="fa-brands fa-amazon"></i><?php echo $config['stock1']?></p></a>   
                        <a href="<?php echo $config['psu-link']?>" target="blank"><p><i class="fa-brands fa-amazon"></i><?php echo $config['psu']?></p></a>   
                        <a href="<?php echo $config['boitier-link']?>" target="blank"><p><i class="fa-brands fa-amazon"></i><?php echo $config['boitier']?></p></a>   
                    </div>
                </div>
                <div class="box3">
                    <p><?php echo $config['prix']?>€</p>
                    <a href="<?php echo $config['amz-link'] ?>" target="blank"><div class="btn-shop"><li><i class="fa-brands fa-amazon"></i> PANIER AMAZON</li></div></a> 
                    <a href="<?php echo $config['pcp-link'] ?>" target="blank"><div class="btn-shop-2"><li>PCPARTPICKER</li></div></a> 
                    <p class="limit" >JE COMMANDE !</p>
                </div>
           </div>
           <div class="commentaire">
                <p>Dernière mise à jour le <?php echo $config['date_maj'];?></p>
                <p>BaDemBa.fr participe au Programme Partenaires d'Amazon EU, un programme d'affiliation permettant de percevoir une rémunération via des liens vers Amazon.fr</p>
           </div>
        </div>
    </section>

    <?php include('../includes/bench.php') ?>
    <?php include('../includes/toppc.php') ?>
    <?php include('../includes/categ.php') ?>
    <?php include('../includes/footer.php') ?>
</body>
</html>