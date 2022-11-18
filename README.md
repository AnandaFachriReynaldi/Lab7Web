# Lab7Web
## Ananda Fachri Reynaldi
## 312110248
## TI.21.B1
<br>
<b>XAMPP</b>

Karena menggunakan XAMPP Portable setelah download lalu Extract file tersebut, pindahkan direktorinya (misal: d:\xampp)
![Step1](SS/SS1.png)

Buka XAMPP Control Lalu Klik `Start` untuk menjalankan Web Server. Setelah itu uji coba melalui URL :
```
http://localhost
```
![Step2](SS/SS2.png)<br>

<b>PHP Dasar</b>

Membuat folder lab7_php_dasar pada root directory web server (d:\xampp\htdocs). Setelah itu uji coba melalui URL :
```
http://localhost/lab7_php_dasar/
```
![Step3](SS/SS3.png)

Membuat file baru dengan nama php_dasar.php <br>
untuk mengakses hasilnya melalui URL : 
```
http://localhost/lab7_php_dasar/php_dasar.php
```
![Step4](SS/SS4.png)<br>

<b>Variable PHP</b>

Menambahkan variable berikut :
```
<h2>Menggunakan Variable</h2>
    <?php
    $nim = "312110248";
    $nama = 'Ananda Fachri Reynaldi';
    echo "NIM : " . $nim . "<br>";
    echo "Nama : $nama";
    ?>
```
![Step5](SS/SS5.png)
