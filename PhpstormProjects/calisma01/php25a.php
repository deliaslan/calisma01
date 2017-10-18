<?php
/**
 * Created by PhpStorm.
 * User: deliaslan
 * Date: 18.10.2017
 * Time: 15:35
 * Project Name: calisma01
 * File Name: php25a.php
 */
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>SESSION sonucu oluşan verinin yazdırıldığı sayfa</title>
</head>
<body>
<?php

session_start();
echo $_SESSION['ad'];

?>

</body>
</html>
