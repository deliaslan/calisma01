<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Form İşlemlerinin Denenmesi</title>
</head>
    <body>
    <form action="">
        <input type="number" max="3" name="sayi">
        <input type="submit" name="" value="Gönder">
    </form>
    <br><br><br>
        <!-- Style Kullanımı -->

    <form action="">
        <input type="number" max="3" name="sayi" style="width: 600px;">
        <input type="submit" name="" value="Gönder">
    </form>
    <br><br><br><br>
    <!-- Form Uygulaması

    autocomplete otomatik tamamlama özelliğini kapatır.
    autofocus imlecin yanacağı ilk alanı belirlemeye yarar.-->
    <br><br><br>
       <form action="http://www.ademdeliaslan.com.tr">
        <input type="email" name="email" autocomplete="off" >
        <input type="submit" name="" value="Gönder">
    </form>


    <br><br><br>
    <br><br><br>
    <hr>
    <form action="">
        Kullanıcı Adı: <input type="email" autocomplete="off" autofocus="">
        Şifre: <input type="password" autocomplete="off" >
        <input type="submit" name="" formtarget="_blank" value="Gönder">
    </form>
    <br><br><br><br>
    <hr>
<!-- Dosya İşlemleri -->

    <form action="dosya.php">

        Dosya Seç: <input type="file" style="width: 500px"><br>
        Dosya Seç: <input type="file" multiple="" style="width: 500px"><br>
        <input type="submit" value="Yükle">

    </form>
    <br><br><br><br>
    <hr>
    <!-- Step işlemleri-->
    <form action="dosya.php">

        Numara Gir(5 ve Katları Step): <input type="number" step="5" style="width: 500px"><br>

        <input type="submit" value="Gönder">

    </form>
    <hr>
    <!-- Sayfa içine resim ekleme -->
    <img src="http://www.ayzun.com/images/urunler/3D-Sekil-72-resim-3386.jpg" height="150" alt="Bu bir resimdir.">
    <img src="http://via.placeholder.com/350x150" alt="Demo resimdir. Bu site aracılığıyla dilenen resim boyutu hızlı bir şekilde eklenebilir.">
    <hr>
    <br><br>
    <iframe src="http://www.joyakademi.com" frameborder="1" width="100%"></iframe>
    <br><br><br>
    </body>
</html>