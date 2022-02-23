<?php
session_start();
include ('./admin/lib/php/pgConnect.php');
$cnx = new PDO($dsn,$user,$password);
var_dump($cnx);
?>
<!doctype html>
<html>
<head>
    <title>Rappels</title>
    <link rel="stylesheet" type="text/css" href="./lib/css/style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<header class="image_header"><br>

</header>
<section id="colGauche">
    <?php
    if(file_exists('./lib/php/menu_public.php')) {
        include ('./lib/php/menu_public.php');
    }
    ?>

</section>
<section id="contenu">
    <div id="main">
        <?php
        if(!isset($_SESSION['page'])){ //on vient d'arriver sur le site
            $_SESSION['page']="accueil.php";
        }
        if(isset($_GET['page'])) {
            $_SESSION ['page'] = $_GET['page'];
        }
        $path = './pages/'.$_SESSION['page'];
        print $path."<br>";
        if(file_exists($path)){
            include $path;
        } else {
            //include ('./pages/page404.php');
        }
        ?>
    </div>
</section>

</body>
</html>