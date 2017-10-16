<?php
/**
 * Created by PhpStorm.
 * User: deliaslan
 * Date: 17.10.2017
 * Time: 01:55
 * Project Name: calisma01
 * File Name: php24.php
 */
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>PHP'de tüm fonksiyonları listeleme</title>
</head>
<body>
<?php
//PHP'de tüm fonksiyonları listeleme

$listele = get_defined_functions();
echo "<pre>";
print_r($listele);
echo "</pre>";
?>

</body>
</html>
