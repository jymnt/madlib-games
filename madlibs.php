<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Mad libs Game</title>
  </head>
  <div class="container">
  <div class="container">
  <body style = "background-color:#EEF2FF">
        <div class="card bg-danger text-white mb-3" style="max-width: 25rem;">
        <div class="card-body" style="background-color:#141E27">
        <div class="text-center">
            <h2 class="card-title" style="color:#D82148">MAD LIBS GAME</h2></div>
            <strong><div class= "alert alert-dark" style="color:#D82148">  
                Cara main : <br>
                <ul>
                   <li> Masukkan Semua Kategori </li>
                    <li> Kategori yang dimasukkan berupa Benda, Kata Kerja, Kata Sifat, Tempat, Artis, dan Waktu. </li>
                    <li> Pilih Tombol 'Pergi Ke Cerita' ketika kategori sudah terisi.  </li>
                </ul></strong>
            </div>
        </div>
        </div>
        </strong>

<div class="text-center">
<!-- Form untuk melakukan inputan user -->
<div class="card text-white bg-danger mb-3" style="max-width: 25rem;">
<div class="card-body" style="background-color:#141E27">
<form method="post">
    <!-- input benda -->
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" style="background-color:#D82148; color:white">Benda</label>
        </div>
            <select class="form-control"  name = "benda">
                <option value = "tas">TAS</option>
                <option value = "apel">APEL</option>
                <option value = "HP">HP</option>
                <option value = "laptop">LAPTOP </option>
            </select>
        </div>
        
        
        <!-- input kata kerja -->
        <div class="input-group mb-3">
            <div class="input-group-prepend" >
                <span class="input-group-text" style="background-color:#D82148; color:white" >Kata Kerja</span>
            </div>
                <input class="form-control"  type="text" name="k_kerja"  placeholder="masukkan 1 kata">
            </div>

        <!-- input kata sifat -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" style="background-color:#D82148; color:white" >Kata Sifat</span>
            </div>
                <input class="form-control" type="text" name="k_sifat" placeholder="masukkan 1 kata">
            </div>

        <!-- input tempat -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" style="background-color:#D82148; color:white">Tempat</label>
        </div>
            <select class="form-control"  name = "tempat">
                <option value = "taman">TAMAN</option>
                <option value = "selokan">SELOKAN</option>
                <option value = "kampus">KAMPUS</option>
                <option value = "sekolah">SEKOLAH</option>
            </select>
        </div>

        <!-- input artis -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" style="background-color:#D82148; color:white">Artis</span>
            </div>
                <input class="form-control"  type="text" name="artis" placeholder="masukkan nama artis">
        </div> 

        <!-- input waktu -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" style="background-color:#D82148; color:white">Waktu</label>
        </div>
            <select class="form-control"  name = "waktu">
                <option value = "kemarin">KEMARIN</option>
                <option value = "bulan lalu">BULAN LALU</option>
                <option value = "tahun lalu">TAHUN LALU</option>
            </select>
        </div>

        <!-- input kata sifat -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" style="background-color:#D82148; color:white" >Kata Sifat</span>
            </div>
                <input class="form-control"  type="text" name="sifat" placeholder="masukkan 1 kata">
            </div>
        <input type="submit" value="Pergi Ke Cerita" class="btn btn-danger">
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div> 
    <br></br>
    <div class="container">
<?php
    $kalimat=[
        ['0' =>"Saya ingin membeli ", 
        '1' => ", sayangnya harganya sangat mahal jadi, saya ", 
        '2' =>", saya melakukannya dengan hati yang ",
        '3' =>", tetapi tepatnya di ", 
        '4' =>", saya terjatuh dan bertemu ", 
        '5' =>", dia merupakan artis favorit saya sejak ", 
        '6' =>". salah satu hal yang saya suka adalah dia sangat"
        ], 
        ['0' => 'Selesai mengerjakan tugas Doni meletakkan ', 
        '1' => ' diatas meja. setelah ',
        '2' =>', hari ini doni sedang ',
        '3' =>'. jadi, dia berniat pergi ke ', 
        '4' =>', untuk menemui ', 
        '5' =>' yang sudah pernah ditemuinya di ',
        '6' =>'. Doni adalah orang yang',  
        ], 
        ['0' => 'Restoran itu memiliki ', 
        '1' => ', untuk dibagikan kepada orang yang sedang ',
        '2' =>'. pemiliknya sangatlah ',
        '3' =>', dia saat ini sedang berada di ', 
        '4' =>', untuk membeli karya dari ', 
        '5' =>'. tetapi ',
        '6' =>' perilaku sang pemilik menjadi ',  
        ], 
    ];
echo $kalimat[0][1];
$acak = rand(0,count($kalimat)-1);

    // Membalikkan kalimat sebagai clue
    function terbalik($hasil, $rand){ 
        echo '<div class= "alert alert-success" style="color:#D82148">
        <div class="container">
        <strong> For Clue : <br>
                <ol> 
                   <li> Clue akan tampil secara acak dan tidak sesuai dengan cerita yang 
                       <br> akan tertampil setelah menekan tombol "Pergi Ke Cerita" </li>
                    <li> Clue Berupa Tulisan terbalik</li>
                    <li> Nomor Clue sesuai dengan nomor cerita yang ada</li>
                </ol></strong>
            </div>';
        echo '<div class ="card " style="color:#FFC0D3; background-color:#2FA4FF">';
        echo '<div class="card-header">'. "<h3>". 
            "Clue Acak Terbalik " ."</h3>" ;
        echo '</div>' . '<div class="container"> <h5>';       
        for($i=0; $i<count($hasil[0]); $i++){
            $b = $hasil[$rand][$i];
            $pjg = strlen($b);
            for($j=$pjg-1; $j>=0; $j--){
               echo $b[$j]; 
            }  
            echo "____"; 
        }
        echo '</div> </h5>';  
    }
    // function untuk menampilkan isi keseluruhan cerita 
    // setelah disambungkan dengan inputan user
    function tampil($has, $rand){
        /* melakukan pengecekan pada form dengan mengambil salah 
        satu inputan dengan nama 'benda*/
        if(isset($_POST['benda'])){
        $benda = strtoupper($_POST['benda']);
        $k_kerja = strtoupper($_POST['k_kerja']);
        $k_sifat = strtoupper($_POST['k_sifat']);
        $tempat = strtoupper($_POST['tempat']);
        $artis = strtoupper($_POST['artis']);
        $waktu = strtoupper($_POST['waktu']);
        $sifat = strtoupper($_POST['sifat']);
        if($_POST['k_kerja'] == "" || $_POST['k_sifat'] == ""){
            echo '<div class ="alert alert-danger">' .
            "Pastikan semua kategori terisi!" . "</div>";
        }elseif($_POST['artis'] == "" || $_POST['sifat'] == ""){
            echo '<div class ="alert alert-danger">' .
            "Pastikan semua kategori terisi!" . "</div>";
        }
        // menampilkan setiap kalimat 
        // dan memasukkan inputan user kedalamnya
        else{
            echo '<div class="container"><div class ="alert" style="color:pink; background-color:#141E27">' .
            "<h3>Begini Ceritanya : </h3>"  .
            "<h5>".
            $has[$rand][0] . " " . $benda . " " .
            $has[$rand][1] . " " . $k_kerja . " " .
            $has[$rand][2] . " " . $k_sifat . " " .
            $has[$rand][3] . " " . $tempat . " " .
            $has[$rand][4] . " " . $artis. " " . 
            $has[$rand][5] . " " . $waktu. " " .
            $has[$rand][6] . " " . $sifat . " " .
            "</h5>".
            '</div>' ;
        }     
    }
    }
tampil($kalimat, $acak);
terbalik($kalimat, $acak);
?>
</div>
    <form method="get">
        <div class ="alert" style="background-color:#FF7777; color:white">
        <strong>Nomor Clue : <input type="text" value="<?=$acak?>" name="id" style="color:#E60965"></strong>   
        <input type="submit" value="Clue" style="font-family:inherit; color:white" class="btn btn-info">
    </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    </body>
</html>