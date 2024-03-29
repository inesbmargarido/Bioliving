<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <!--Import Google Icon Font-->
    <?php include_once "../helpers/fonts.php" ?>
    <!--Import materialize.css-->
    <?php include_once "../helpers/css.php" ?>

    <!--Let browser know website is optimized for mobile-->
    <?php include_once "../helpers/meta.php" ?>
    <title>Projeto BioLiving - Login/Registo</title>
</head>

<body>

<!--Side Navigation = Menu on Mobile -->
<?php include_once "../components/side_nav.php" ?>

<!--Top Navigation-->
<?php include_once "../components/top_nav_password_recover.php" ?>

<!--Content (colocar aqui o componente)-->
<?php include_once "../components/password_recover.php" ?>

<!--Footer-->
<?php include_once "../components/footer.php"?>

<!--Import jQuery before materialize.js-->
<?php include_once "../helpers/jquery_js.php" ?>

</body>
</html>