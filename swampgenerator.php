//Flobert JOHNSON 1BTS SNIR
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Swamp Generator</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/custom.min.css" rel="stylesheet">
</head>

<body>
<div class="text-center"><h1 class="text-primary">Générateur de Marécages</h1></div>
<div class="container">
    <div class="jumbotron ">

        <?php
        $rouge='red';
        require_once('Swamp.php');
        // private $tabswamp = array();
        if (!isset($_POST['ligne'])) {
            header('Location: formswamp.php');
        } elseif (!isset($_POST['colonne'])) {
            header('Location: formswamp.php');
        } else {

            echo "<span class='text-info'>Pour info : marécage de  " . $_POST['ligne'] . " par " . $_POST['colonne'] . "</span>";


            $iiimax = $_POST['ligne'];
            $jjjmax = $_POST['colonne'];

            $monSwamp = new Swamp($iiimax, $jjjmax);
            $monSwamp->swampGenerator();
        }
        ?>
    </div>
</div>
</body>