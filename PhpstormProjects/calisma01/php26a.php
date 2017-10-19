<?php
/**
 * Created by PhpStorm.
 * User: deliaslan
 * Date: 19.10.2017
 * Time: 15:57
 * Project Name: calisma01
 * File Name: php26a.php
 */
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Session Silme unset fonksiyonu ile</title>
</head>
<body>
<?php
session_start();
//session silme tekli

unset($_SESSION['il']);
?>

</body>
</html>
