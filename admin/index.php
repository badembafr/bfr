<?php  include '../includes/host.php'  ?>

<?php
$bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8;", $id, $passwd);

$configs = $bdd->query("SELECT * FROM `config` ORDER BY prix")->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($configs as $config) {
        $id = $config['id'];
        foreach ($config as $component => $value) {
            if ($component != 'id') {
                $new_value = $_POST[$component][$id];
                $requete = $bdd->prepare("UPDATE `config` SET `$component` = ? WHERE id = ?");
                $requete->execute([$new_value, $id]);
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Admin</title>
    <style>
        .config {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
        }
        .component {
            margin-bottom: 5px;
        }

        .formulaireadmin {
            display: flex;
        }
    </style>
</head>
<body>

<a href="addPC.php">Ajouter une nouvelle configuration</a>

<form method="post" action="">
    <div class="sub">
        <button type="submit">Enregistrer</button>
    </div>

    <h1>Configuration PC</h1>
    <div class="formulaireadmin">
        <?php
        foreach ($configs as $config) {
            echo '<div class="config">';
            echo '<h2>Configuration ID: ' . $config['id'] . '</h2>';
            foreach ($config as $component => $value) {
                if ($component != 'id') {
                    echo '<div class="component">';
                    echo '<label for="' . $component . '">' . $component . '</label>';
                    // Échapper le contenu HTML avec htmlspecialchars
                    echo '<input type="text" name="' . $component . '[' . $config['id'] . ']" id="' . $component . '" value="' . htmlspecialchars($value) . '">';
                    echo '</div>';
                }
            }
            echo '</div>';
        }
        ?>
    </div>
</form>

</body>
</html>
