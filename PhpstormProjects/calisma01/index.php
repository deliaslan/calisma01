<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Adem Deliaslan Web Çalışması</title>
</head>
<body>
<!-- Başlık etiketleri -->

<h1>Ben biraz daha başlığım</h1>
<h2>Ben biraz daha başlığım</h2>
<h3>Ben biraz daha başlığım</h3>
<h4>Ben biraz daha başlığım</h4>
<h5>Ben biraz daha başlığım</h5>
<h6>Ben biraz daha başlığım</h6>


<!-- <p> paragraf etiketi -->
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequuntur dignissimos
    dolor dolores eaque error exercitationem labore molestias quaerat quibusdam
    quisquam repellat sapiente sint suscipit, tempore! Doloremque possimus quidem sunt?
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam blanditiis deleniti ex explicabo,
    id ipsam labore laboriosam laborum, numquam pariatur quaerat, quia quos rerum tempora tenetur veniam
    voluptatum! Ex, iusto?</p>

<!--<br> boş satır oluşturma etiketi -->
<br><br><br><br><br>
<!--<hr> yatay çizgi bırakır -->
<hr>
<p>www.ademdeliaslan.com.tr</p>
<hr>
<p>Adem Deliaslan'ın <b>Kişisel</b> Web Sayfası</p>
<hr>

<!-- <i> italik yazma etiketi -->
<i>Bu yazı eğik yani italiktir.</i>

<hr>
<!-- <big></big> etiketi html5 tarafından desteklenmemektedir. Bunun yerine CSS ile düzenleme yaparken
 kullanılır. -->
<small>Bu yazı küçük yazıdır.</small>
<hr>
<p>Suyun molekülün yapısı H<sub>2</sub>O'dur.</p>
<hr>
<p>4 sayısı 2<sup>2</sup> olarak gösterilir.</p>
<hr>
<p>Ben <ins>altı</ins> çizili bir kelimeyim.</p>
<hr>
<p>Ben <del>üstü</del> çizili bir kelimeyim.</p>
<hr>
<p>Kod parçası tanımlanırken <code>Bu bir kod bloğudur.</code> şeklinde tanımlanır.</p>
<hr>
<p>Uzun kod parçalarını kullanırken
<pre>
    <?php
    echo "kod parçası";
    ?>
</pre>
</p>
<hr>
<!-- Tablo oluşturma -->
<table border="1">
    <tr>
        <th>Başlık 1</th>
        <th>Başlık 2</th>
        <th>Başlık 3</th>
        <th>Başlık 4</th>
        <th>Başlık 5</th>
    </tr>
    <tr>
        <td>Sütun 1</td>
        <td>Sütun 2</td>
        <td>Sütun 3</td>
        <td>Sütun 4</td>
        <td>Sütun 5</td>
    </tr>
    <tr>
        <td>Sütun 1</td>
        <td>Sütun 2</td>
        <td>Sütun 3</td>
        <td>Sütun 4</td>
        <td>Sütun 5</td>
    </tr>
    <tr>
        <td>Sütun 1</td>
        <td>Sütun 2</td>
        <td>Sütun 3</td>
        <td>Sütun 4</td>
        <td>Sütun 5</td>
    </tr>
    <tr>
        <td>Sütun 1</td>
        <td>Sütun 2</td>
        <td>Sütun 3</td>
        <td>Sütun 4</td>
        <td>Sütun 5</td>
    </tr>
</table>
<hr>
<!-- <center></center> etiketleri html5 ile kullanılmıyor-->
<div align="center">Bu yazıyı ortalıyoruz. </div>
<hr>

<!-- Listeleme -->
<ul>
    <li>liste 1</li>
    <li>liste 2</li>
    <li>liste 3</li>
    <li>liste 4</li>
</ul>

<hr>
<ol>
    <li>liste 1</li>
    <li>liste 2</li>
    <li>liste 3</li>
    <li>liste 4</li>
</ol>
<hr>
<dl>
    <dt>Üst Başlık Kısmı</dt>
    <dd>Açıklama Kısmı</dd>
</dl>
<hr>
<!-- Form İşlemleri
type => içerik niteliği
name => form eleman ismi
action => form verileri nereye gönderecek
-- boş bırakılırsa olduğu sayfaya gider
-- doldurulursa yazılan yere gider
method => gönderim tipi get ve post

checked => checkbox ve radio button seçtirme
readonly => input değiştirilmesin sadece okunabilir olsun amaç kayıtlı herhangibir verinin
değiştirlmesini engellemek amaçlıdır. Ama veri gönderilir.
disabled => veriyi göndermeyi de engeller.
required="" => zorunlu doldurulacak alan
-->
<form action="islem.php" method="post">
   <p>Ad: <input type="text" name="ad" placeholder="Adınız"> </p>
   
    <p>Soyad: <input type="text" name="soyad" disabled="" value="Bu kısım form güncelleme işi için lazım"> </p>
   
    <p>Numara: <input type="number" name="numara" required=""> </p>
   
    <p>E-Posta: <input type="email" readonly="" name="eposta" value="deliaslan@gmail.com"> </p>
   
    <p>Şifre: <input type="password" name="sifre"> </p>
 
   <p>Seçenek 1<input type="radio" checked="" name="radio1"> </p>
   <p>Seçenek 2<input type="radio" name="radio1"> </p>
   
    <p>Check 01<input type="checkbox" checked="" name="check1"> </p>
   <p>Check 02<input type="checkbox" name="check2"> </p>


   <!-- Combobox oluşturma
   selected=> seçim gösterilir-->
    <select name="secim" id="">

        <option value="secenek1">Seçenek 1</option>
        <option value="secenek2">Seçenek 2</option>
        <option value="secenek3">Seçenek 3</option>
        <option value="secenek4">Seçenek 4</option>
        <option value="secenek5" selected="">Seçenek 5</option>

    </select>
    


    <hr>
    <textarea name="textalani" id="" cols="75" rows="10">Lorem ipsum dolor sit amet,
        consectetur adipisicing elit. Consequuntur dolor officiis saepe. Animi deleniti
        laudantium nobis perspiciatis quo suscipit ullam. Dolorem doloremque ex illo, iusto
        molestiae necessitatibus tempora temporibus totam. Lorem ipsum dolor sit amet, consectetur
        adipisicing elit. Accusamus officia officiis quidem quod sit! A,
        ad alias atque aut, earum error ipsam magni, nulla porro quisquam recusandae tempore totam vel?
    </textarea>

    <p><input type="submit" name="form_ismi"> </p>
    <!-- reset ile  -->
    <button name="sifirla" type="reset" value="Sıfırla">Sıfırla</button>

</form>

<form>

    <input type="number" min="3" name="">

</form>



</body>
</html>


