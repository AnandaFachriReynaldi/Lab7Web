<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Tugas PHP Dasar</title>
    </head>
<body>
    <header>
        <h1>Form Gaji Karyawan</h1>
    </header>
    <form class="form" method="post" >
        <fieldset>
            <legend>Data Karyawan</legend>
            Nama : <input type="text" name="nama" /><br /> <br />
            Tanggal lahir : <input type="text" name="lahir" /><br /> <br />
            <label>Jenis Kelamin : </label>
            <select name='jenis_kelamin'>
                <option value="-">Pilih Jenis Kelamin</option>
                <option value='Laki-laki'>Laki-laki</option>
                <option value='Perempuan'>Perempuan</option>
            </select><br /><br />
            Pekerjaan : <input type="radio" name="jabatan" value="Graphic Designer"/>Graphic Designer
            <input type="radio" name="jabatan" value="HRD"/>HRD
            <input type="radio" name="jabatan" value="Quality Assurance"/>Quality Assurance
            <input type="radio" name="jabatan" value="Admin"/>Admin<br /><br />  
            <input type="submit" name="submit" value="Submit" /><br /><br />
        
            <?php
            if(isset($_POST['submit'])){
                # Menampilkan Nama
                echo 'Nama : ' . $_POST['nama']; 
                
                # Menghitung Umur Berdasarkan Inputan Tanggal Lahir
                $lahir = @$_POST['lahir'];
                $lahir = new DateTime($lahir);
                $hari_ini = new DateTime();
                $diff = $hari_ini->diff($lahir);
                
                echo "<br> Umur : ". $diff->y ." Tahun";
                    
                # Jenis Kelamin
                echo "<br> Jenis Kelamin : ". $_POST['jenis_kelamin'];
                
                # Memanggil Pekerjaan
                echo "<br> Pekerjaan : ". $_POST['jabatan'];
                    
                # Kondisi if Pekerjaan Untuk Menentukan Gaji
                $jabatan = @$_POST['jabatan'];
                if($jabatan == "Graphic Designer"){
                    echo '<br> Gaji : Rp15.000.000,-';
                }elseif($jabatan == "HRD"){
                    echo '<br> Gaji : Rp7.000.000,-';
                }elseif($jabatan == "Quality Assurance"){
                    echo '<br> Gaji : Rp10.000.000,-';
                }elseif($jabatan == "Admin"){
                    echo '<br> Gaji : Rp6.000.000,-';
                }
            }
            ?>
        </fieldset>
    </form>    
</body>
</html>