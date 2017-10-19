<?php
/**
 * Created by PhpStorm.
 * User: deliaslan
 * Date: 19.10.2017
 * Time: 20:16
 * Project Name: calisma01
 * File Name: php26b.php
 */
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Tüm Sessionları Silme </title>
</head>
<body>
<?php
session_start();
//tüm sessionları silme

session_destroy();
?>

</body>
</html>