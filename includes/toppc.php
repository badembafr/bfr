<?php  include 'host.php'  ?>


<?php 

$bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8;", $id, $passwd);

$requete = $bdd->query("SELECT * FROM `config` WHERE pop='hight' ORDER BY prix LIMIT 3");

?>

<?php 
while($config = $requete->fetch())
{
?>
<section id="categories-PC">
    <div id="pc"   class="categories-PC">
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