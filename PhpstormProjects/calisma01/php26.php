<?php
/**
 * Created by PhpStorm.
 * User: deliaslan
 * Date: 19.10.2017
 * Time: 15:42
 * Project Name: calisma01
 * File Name: php26.php
 */
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Session oluşturma il için</title>
</head>
<body>
<?php
//Start Sessions

session_start();


$_SESSION['il'] = "Sakarya";
?>

</body>
</html>
