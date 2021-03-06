<!doctype html>
<html lang="en">
    <head>
        <!--icon bar title-->
        <link rel="icon" href="<?php echo base_url('assets/ic_local_hospital_48px.1.svg')?>" type="image/icon type">

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
        <title>PosyanQuy | Datang ke posyandu Quy</title>

    </head>
    <body>

        <!--Content Section 1 Carousel-->
        <div id="carousel" class="carousel slide" style="margin:50px;margin-top:140px;";data-ride="carousel">
            <div class="carousel-inner" style="height: 540px;">
              <div class="carousel-item active">
                <img class="d-block w-100" src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/750x500/photo/image/2016/03/030316pin-2016.jpg" style="height: 540px;" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/750x500/photo/image/2016/03/030316pin-2016.jpg" style="height: 540px;" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/750x500/photo/image/2016/03/030316pin-2016.jpg" style="height: 540px;" alt="Third slide">
              </div>
            </div>

            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>

        </div>


        <!--Content Overview jumbotron-->
        <div class="jumbotron jumbotron-fluid" style="margin-bottom: 150px;">
          <div class="container ">
            <h1 class="display-4 d-flex justify-content-center">PosyanQuy</h1>
            <br>
            <p class="lead d-flex justify-content-center" style="text-align: center;">
              Layanan sistem informasi Pos layanan terpadu (Posyandu) setempat, sebagai pusat informasi untuk masyarakat
              mengetahui pentingnya kegiatan posyandu, jadwal umur vaksin pada balita dan manfaat posyandu. Kami ada untuk Anda Kuy ke posyandu.
              Mari bersama-sama cegah penyakit dengan pemberian imunisasi pada waktu yang tepat
              <br>
              👨‍⚕️👩‍⚕️
            </p>
          </div>
        </div>


        <!--Content Section 2 Artikel-->
        <h1 class="display-4 d-flex justify-content-center">PosyanQuy</h1>
        <p class="card-text d-flex justify-content-center">Kuy Kita bawa balita kita keposyandu agar balita kita tercegah dari berbagai penyakit. Quy!🤏</p>
        <div class="tab-pane fade show active d-flex justify-content-center " style="margin-top: 50px;margin: 30px;margin-bottom: 150px;">
            <ul class="nav">
              <div class="card shadow-sm p-3 mb-5 bg-white rounded" style="width: 20rem;margin: 12px;">
                <img class="card-img-top" src="https://cdn0-production-images-kly.akamaized.net/4UUMtrJcSENDZkfcxXTeWM99v4w=/1280x720/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2363294/original/017573400_1537407971-20180919-Pemprov-Aceh-Akhirnya-Bolehkan-Vaksinasi-MR--AFP-5.jpg" alt="Card image cap">
                <div class="card-body flex-column d-flex">
                  <h5 class="card-title">Kenapa harus Imunisasi?</h5>
                  <p class="card-text">Imunisasi adalah hak dari seorang anak. Orangtua berkewajiban melakukannya agar tubuh si Kecil 'kuat' dari serangan sejumlah penyakit menular yang berbahaya.</p>
                  <button type="button" class="btn btn-primary mt-auto" onclick="location.href = '<?php echo site_url('article/1')?>';">Lihat</button>
                </div>
              </div>

              <div class="card shadow-sm p-3 mb-5 bg-white rounded" style="width: 20rem;margin: 12px;">
                <img class="card-img-top" src="https://cdn.popmama.com/content-images/post/20180212/timbang-berat-badan-b199ca44d0f9f6d27f362af07b7abd53.jpg" alt="Card image cap">
                <div class="card-body flex-column d-flex">
                  <h5 class="card-title">Kegiatan Posyandu apa aja sih?</h5>
                  <p class="card-text">Kegiatan posyandu sangat besar peranannya bagi kesehatan masyarakat. pelaksanaan posyandu bakan hanya tanggung jawab pemerintah namun juga merupakan tanggung jawab setiap warga masyarakat.</p>
                  <button type="button" class="btn btn-primary mt-auto" onclick="location.href = '<?php echo site_url('article/2')?>';">Lihat</button>
                </div>
              </div>

              <div class="card shadow-sm p-3 mb-5 bg-white rounded" style="width: 20rem;margin: 12px;">
                <img class="card-img-top" src="https://cdn.popmama.com/content-images/post/20191102/img-02112019-104832-800-x-420-piksel-16a989db48419cea6e82558830ad597f.jpg" alt="Card image cap">
                <div class="card-body flex-column d-flex">
                  <h5 class="card-title">Kenapa ikut posyandu itu penting?</h5>
                  <p class="card-text">Posyandu sangat penting untuk mencegah berbagai penyakit berat melalui vaksin. Vaksin tersebut lah yang dapat mencegah penyakit tersebut</p>
                  <button type="button" class="btn btn-primary mt-auto" onclick="location.href = '<?php echo site_url('article/3')?>';">Lihat</button>
                </div>
              </div>
  
          </ul>
        </div>


        <!-- Content section 3 Kegiatan posyandu-->
        <h1 class="display-4 d-flex justify-content-center">Kegiatan PosyanQuy</h1>
        <p class="card-text d-flex justify-content-center">Ayolah keposyanQuy, seru loh</p>
        <div class="tab-pane fade show active d-flex justify-content-center " style="margin-top: 50px;margin: 30px;margin-bottom: 150px;">
            <ul class="nav">
              <div class="bg-white rounded" style="width: 20rem;margin: 12px;">
                <div class="card-body flex-column d-flex">
                  <h5 class="card-title">Imunisasi</h5>
                  <p class="card-text">Pemberian imunisasi kepada balita dengan ukuran pemberian mengacu pada umur balita.
                    rasanya kaya digigit semut kok ✌️
                  </p>
                </div>
              </div>

              <div class="bg-white rounded" style="width: 20rem;margin: 12px;">
                <div class="card-body flex-column d-flex">
                  <h5 class="card-title">Penimbangan</h5>
                  <p class="card-text"> 👵: Penimbangan kok harus segala diposyandu sih ? <br>
                    👩‍⚕️: Emangnya ibu tau betul perkebangan bayi yang bisa diliat dari berat badan si anak ? nanti kita kasih vitamin biar anak ibu sehat kaya samson betawi.</p>
                </div>
              </div>

              <div class="bg-white rounded" style="width: 20rem;margin: 12px;">
                <div class="card-body flex-column d-flex">
                  <h5 class="card-title">Sosialisasi Tumbuh kembang anak</h5>
                  <p class="card-text">Diposyandu, masyarakat akan diberikan arahan seputar 🥗makanan, 🍉buah-buahan dan juga 🥦sayur mayur yang sangat bermanfaat untuk balita.</p>
                </div>
              </div>
  
          </ul>
        </div>

        <!-- Content section 4 login untuk melihat perkembangan balita anda-->
        <h1 class="display-4 d-flex justify-content-center" style="text-align: center;">👶<br>Lihat Data Perkembangan <br> Balita Anda</h1>
        <div class="tab-pane fade show active d-flex justify-content-center " style="margin-top: 50px;margin: 30px;margin-bottom: 150px;">
            <ul class="nav">

              <div class="bg-white rounded" style="width: 20rem;margin: 12px;">
                <div class="card-body flex-column d-flex">
                  <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo site_url('login')?>';">Login</button>
                </div>
              </div>

          </ul>
        </div>
    </body>
</html>