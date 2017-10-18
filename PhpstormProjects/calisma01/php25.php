<?php
/**
 * Created by PhpStorm.
 * User: deliaslan
 * Date: 17.10.2017
 * Time: 02:02
 * Project Name: calisma01
 * File Name: php25.php
 */
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>SESSION Oluşturulan Sayfa</title>
</head>
<body>
<?php
//SESSION nasıl oluşturulur?

session_start();
$_SESSION['ad'] = "Adem";

// echo $_SESSION['adsoyad'];
/*
 * Bu sayfa çalıştırılmadan php25a sayfasındaki session bilgisi oluşamaz.
*/
?>

</body>
</html>
