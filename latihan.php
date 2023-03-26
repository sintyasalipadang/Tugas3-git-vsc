<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <p></p> <p></p>
   
<div class="bg-success p-2" style="--bs-bg-opacity: .5;">
<div class="d-flex justify-content-center"> <h1>Pencarian Film</h1></div></div>
<p></p>
<div class="d-flex justify-content-center">
  
    <form method="post" action="latihan.php">
        <input type="text" name="judul"></input>
        
        <input type="submit" value="Cari" name="cari"></input>
    </form>
    </div>
    <?php
    
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
        
            echo "<h1>Hasil</h1>";
        
            $url = 'http://www.omdbapi.com/?apikey=be35c0b9&s="'.$judul.'"';


          //Akses API dengan CURL
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          $output = curl_exec($ch);
          curl_close($ch);

          // var_dump($output);
          $data = json_decode($output, TRUE);
          // $data = $data['Search'];
          
          foreach ($data['Search'] as $movie) {
              
              echo "\n <p>Judul: ".$movie["Title"]."</p>";
              echo "<p>Tahun: ".$movie["Year"]."</p>";
              echo '<img src= "'.$movie['Poster'].'">';
          }    
      }

      ?> 
        
    <header>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container">
<div class="row mt-3 text-center">
  <div class="col">
<h1>HMM</h1>
</div>
</div>
    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="gambar1.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">The Batman (2022)</h5>
        <p class="card-text">Kota Gotham tiba-tiba dikejutkan dengan rentetan pembunuhan para pejabat. Aksi tersebut dilakukan oleh seseorang misterius yang mengaku dirinya “The Riddler”.

The Riddler kerap meninggalkan sepucuk pesan atau teka-teki agar seseorang bisa menemukannya. Karena ini, Batman berupaya untuk menghentikan aksi The Riddler.

Batman atau Bruce Wayne kali ini diperankan oleh aktor tampan Robert Pattinson. Batman bekerjasama dengan asisten pribadinya, Alfred Pennyworth dan Lt. James Gordon.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambarr.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Tenet (2020)</h5>
        <p class="card-text">Film berdurasi 2 jam 30 menit ini ditulis dan disutradarai oleh Christopher Nolan. Dibintangi oleh John David Washington, Robert Pattinson, Elizabeth Debicki, dan, Dimple Kapadia.

Berdurasi 2 jam 30 menit, film Tenet mengisahkan Protagonist, yang berusaha mencegah terjadinya perang dunia ketiga melalui penjelajahan waktu.

Seperti film-film Nolan lainnya, Tenet menyuguhkan cerita yang rumit dengan plot yang tidak terduga.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar3.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Bloodshot (2020)</h5>
        <p class="card-text">Dalam film ini kamu akan menemukan Vin Diesel berakting sebagai seorang prajurit perang yang tewas terbunuh.

Kemudian, Ray (Vin Diesel) dihidupkan kembali dan diberikan kekuatan khusus yaitu bisa sembuh dari luka oleh tim ilmuwan.

Dalam hidupnya yang baru, Ia tak bisa membedakan kehidupan nyata. Akhirnya datanglah beberapa ingatan di masa lalu tentang orang yang membunuh dia dan istrinya sehingga mendorongnya untuk membalaskan dendam pada pelaku pembunuhan tersebut.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">The Old Guard (2020)</h5>
        <p class="card-text">Film keluaran Netflix ini dibintangi oleh Charlize Theron, KiKi Layne, dan Marwan Kenzari.

The Old Guard merupakan cerita tentang sebuah kelompok prajurit rahasia dengan kemampuan khusus yaitu dapat hidup abadi. Dengan kemampuan ini, mereka melindungi dunia selama berabad-abad.

Keberadaan mereka terancam ketika kekuatan mereka diketahui dan menjadi incaran orang-orang yang ingin menggunakan kekuatan tersebut untuk kepentingan pribadi.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar5.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Bad Boys for Life (2020)</h5>
        <p class="card-text">Bad Boys for Life merupakan Film ke-3 Bad Boys yang kali ini mengisahkan tentang aksi pasangan detektif Mike Lowrey dan detektif Marcus Burnett. Semula, mereka tak lagi menjadi rekan dalam satu misi karena Burnett sudah tua dan menjabat sebagai inspektur.

Mike, ditugaskan untuk menjalankan misi bersama sekelompok polisi muda. Misi tersebut tidak berjalan dengan lancar sehingga Mike akhirnya dipersatukan kembali dengan Burnett. Keduanya kembali beraksi untuk terakhir kali membasmi penjahat yang sangat keji.

Unsur komedi dalam film sangat kental dengan mengandalkan akting Will Smith dan Martin Lawrence yang memiliki chemistry yang pas. Walapun sudah 17 tahun tidak beradu acting, kamu tidak akan menemukan rasa canggung di antara mereka berdua.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar6.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Harley Quinn: Birds of Prey (2020)</h5>
        <p class="card-text">Birds sof Prey berkisah setelah Suicide Squad dimana Harley Quinn (Margot Robbie) yang putus dengan kekasihnya, Joker.

Usai hubungannya kandas, Quinn bersama teman-temannya perempuan yang antihero lainnya membuat onar di kota Gohtan untuk menyembuhkan luka di hatinya.

Tidak hanya itu, Harley Quinn akan berhadapan dengan musuh utamanya, Black Mask. Film solo Harley Quinn ini menyajikan aksi yang intens, dan penuh warna.</p>
      </div>
    </div>
  </div>
  
    </div>
   
    

    </div>
  </div>
  
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>



