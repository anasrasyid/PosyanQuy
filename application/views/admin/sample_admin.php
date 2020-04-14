<!doctype html>
<html lang="en">

  <!-- READ ME WAHAI BACKEND LEGEND 
  penulisan id & nama menggunakan camelCase

  belumlengkap / belumdiperbaiki
  ===========================================
  method search setiap data
  Article
  form get post
  navbar leaf belum fixed

  Kamusdata id & name dalam form,input
  ===========================================
  Data Ibu        = (namaIbu,alamatIbu,namaAnak,bbAnak,ttl,idIbu)
  Data Anak       = (namaAnak,bbAnak,ttl)
  Data Imunisasi  = (namaVaksin,deskripsiVaksin,syaratUmur,periodeVaksin)
  Data Antrian    = (idAntrian)
  Modal Imunisasi = (createImunisasi,updateImunisasi)
  Modal Ibu       = (createIbu,updateIbu)
  Modal Anak      = (createIbu,updateIbu)
  Modal Antrian   = (createAntrian,verifikasiAntrian)
  v-pills-imunisasi
  v-pills-ibu
  v-pills-anak
  v-pills-antrian
  

  Search kata berikut untuk menemukan source
  ===========================================
  ALL MODAL         = semua source modal
  Content Dashboard = source page dashboard
  Content Imunisasi = source page Imunisasi
  Content Ibu       = source page Ibu
  Content Anak      = source page Anak
  Content Antrian   = source page Antrian
  Content Article   = source page Article

  -->

  <head>
    <!--icon bar title-->
    <link rel="icon" href="asset/ic_local_hospital_48px.1.svg" type="image/icon type">

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
  
    <title>Admin Panel | Dashboard</title>

  </head>
  <body>    
    
    <!--nav-->
    <div class="row m-1">
     <div class="col-3">
      <h1><img src="asset/ic_local_hospital_48px.1.svg">PosyanQuy</h1>
      <p>Admin Panel<p>
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="v-pills-dashboard-tab" data-toggle="pill" href="#v-pills-dashboard" role="tab" aria-controls="v-pills-dashboard" aria-selected="true"><img src="asset/ic_dashboard_24px.svg" style="height: 24px"> Dashboard</a>
        <a class="nav-link" id="v-pills-imunisasi-tab" data-toggle="pill" href="#v-pills-imunisasi" role="tab" aria-controls="v-pills-imunisasi" aria-selected="false"><img src="asset/pill.svg" style="height: 24px"> Imunisasi</a>
        <a class="nav-link" id="v-pills-ibu-tab" data-toggle="pill" href="#v-pills-ibu" role="tab" aria-controls="v-pills-ibu" aria-selected="false"><img src="asset/woman.svg" style="height: 24px"> Ibu</a>
        <a class="nav-link" id="v-pills-anak-tab" data-toggle="pill" href="#v-pills-anak" role="tab" aria-controls="v-pills-anak" aria-selected="false"><img src="asset/child-solid.svg" style="height: 24px"> Anak</a>
        <a class="nav-link" id="v-pills-antrian-tab" data-toggle="pill" href="#v-pills-antrian" role="tab" aria-controls="v-pills-antrian" aria-selected="false"><img src="asset/queue.svg" style="height: 24px"> Antrian</a>

        <hr>
        <a class="nav-link" id="v-pills-article-tab" data-toggle="pill" href="#v-pills-article" role="tab" aria-controls="v-pills-article" aria-selected="false">Article</a>
      </div>
      </div>

      <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

          
          <!--Content Dashboard id='v-pills-dashboard-tab'-->
          <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
          <br>
          <h1><img src="asset/ic_dashboard_24px.svg" style="height: 48px">Dashboard </h1>
          <br>
          
          <ul class="nav">
          
          <li class="nav-item m-1">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Daftar user</h5>
                <p class="card-text">Daftarkan ibu sebagai user jika ibu belum mempunyai akses ke dalam website</p>
                <button class="btn btn-outline-primary my-2 my-sm-0" data-toggle="modal" data-target="#createIbu" type="button">Tambah</button>
              </div>
            </div>
          </li>

          <li class="nav-item m-1">
            <div class="card" style="width: 36.5rem;">
              <div class="card-body">
                <h5 class="card-title">Verifikasi Nomor Antrian</h5>
                <p class="card-text">verifikasi nomor antrian ibu yang datang ke posyandu</p>
                <br><Br>
                <button class="btn btn-outline-primary my-2 my-sm-0" data-toggle="modal" data-target="#verifikasiAntrian" type="button">verifikasi</button>
              </div>
            </div>
          </li>
          

          

          <!-- end Content -->
          </ul>
          </div>

          <!--Content Imunisasi id='v-pills-imunisasi-tab'-->
          <div class="tab-pane fade" id="v-pills-imunisasi" role="tabpanel" aria-labelledby="v-pills-imunisasi-tab">
          <br>
          <h1><img src="asset/pill.svg" style="height: 48px">Imunisasi</h1>

          <nav class="navbar navbar-light bg-light justify-content-between">
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <!-- searchImunisasi -->
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
          </form>
            <!--createImunisasi-->
            <button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#createImunisasi" type="button">Tambah</button>
          </nav>

          <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nama</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Periode</th>
              <th scope="col">Syarat umur</th>
              <th scope="col">Setting</th>
            </tr>
          </thead>
          <tbody>

          <!-- loop disini -->
            <tr>
              <th scope="row">1</th>
              <td>Covid 69</td>
              <td>buat anti corona</td>
              <td>dd-mm-yyyy</td>
              <td>1 bulan</td>
              <td>
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateImunisasi" >Edit</button>
              <button type="button" class="btn btn-danger" href="#modul delete php" onClick="return confirm('Apakah Anda Yakin?')" >Delete</button>
              </td>
            </tr>

          </tbody>
          </table>
          </div>

          

          

          <!--Content ibu id='v-pills-ibu-tab'-->
          <div class="tab-pane fade" id="v-pills-ibu" role="tabpanel" aria-labelledby="v-pills-ibu-tab">
          <br>
          <h1><img src="asset/woman.svg" style="height: 48px">Ibu </h1>

          <nav class="navbar navbar-light bg-light justify-content-between">
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            
            <!-- searchIbu -->
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>

          </form>

            <!--createIbu-->
            <button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#createIbu" type="button">Tambah</button>

          </nav>

          <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nama</th>
              <th scope="col">Alamat</th>
              <th scope="col">List Anak</th>
              <th scope="col">Setting</th>
            </tr>
          </thead>
          <tbody>

          <!-- loop disini -->
            <tr>
              <th scope="row">1</th>
              <td>Jubaedah</td>
              <td>Kp rambutan</td>
              <td>
                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#lihatAnak" >Lihat</button>
              </td>
              <td>
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateIbu" >Edit</button>
              <button type="button" class="btn btn-danger" href="#modul delete php" onClick="return confirm('Apakah Anda Yakin?')" >Delete</button>
              </td>
            </tr>

          </tbody>
          </table>
          </div>

          




          

          <!--Content anak id='v-pills-anak-tab'-->
          <div class="tab-pane fade" id="v-pills-anak" role="tabpanel" aria-labelledby="v-pills-anak-tab">
          <br>
          <h1><img src="asset/child-solid.svg" style="height: 48px">Anak </h1>

          <nav class="navbar navbar-light bg-light justify-content-between">
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            
            <!-- searchIbu -->
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>

          </form>

            <!--createAnak-->
            <button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#createAnak" type="button">Tambah</button>

          </nav>

          <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nama</th>
              <th scope="col">Berat Badan (kg)</th>
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">History Vaksin</th>
              <th scope="col">Setting</th>
            </tr>
          </thead>
          <tbody>

          <!-- loop disini -->
            <tr>
              <th scope="row">1</th>
              <td>Annisa</td>
              <td>1</td>
              <td>dd/mm/yyyyy</td>
              <td><button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#historyVaksin" >Lihat</button></td>
              <td>
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateAnak" >Edit</button>
              <button type="button" class="btn btn-danger" href="#modul delete php" onClick="return confirm('Apakah Anda Yakin?')" >Delete</button>
              </td>
            </tr>

          </tbody>
          </table>
          </div>

          

          

          <!--Content antrian id='v-pills-antrian-tab'-->
          <div class="tab-pane fade" id="v-pills-antrian" role="tabpanel" aria-labelledby="v-pills-antrian-tab">
          <br>
          <h1><img src="asset/queue.svg" style="height: 48px">Antrian </h1>

          <nav class="navbar navbar-light bg-light justify-content-between">
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="date" placeholder="Search" aria-label="Search">
            
            <!-- searchAntrian -->
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>

          </form>

            <!--verifikasiAntrian-->
            <button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#verifikasiAntrian" type="button">verifikasi</button>

          </nav>
         

          <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID antrian</th>
              <th scope="col">Waktu</th>
              <th scope="col">ID ibu</th>
              <th scope="col">Status</th>
              <th scope="col">Setting</th>
            </tr>
          </thead>
          <tbody>

          <!-- loop disini -->
            <tr>
              <th scope="row">1</th>
              <td>dd/mm/yyyy</td>
              <td>123</td>
              <td>Belum Verifikasi</td>
              <td>
                <button type="button" class="btn btn-warning" href="#modul verifikasi php" onClick="return confirm('Apakah Anda Yakin verifikasi ?')" >Verifikasi</button>
                <button type="button" class="btn btn-danger" href="#modul delete php" onClick="return confirm('Apakah Anda Yakin?')" >Delete</button>
              </td>
            </tr>

            <tr>
              <th scope="row">2</th>
              <td>dd/mm/yyyy</td>
              <td>124</td>
              <td>Sudah</td>
              <td>
                <button type="button" class="btn btn-warning" href="#modul verifikasi php" onClick="return confirm('Apakah Anda Yakin verifikasi?')" disabled>Verifikasi</button>
                <button type="button" class="btn btn-danger" href="#modul delete php" onClick="return confirm('Apakah Anda Yakin?')" >Delete</button>
              </td>
            </tr>

          </tbody>
          </table>
          </div>

          <!--Content Atricle id='v-pills-article-tab'-->
          <div class="tab-pane fade" id="v-pills-article" role="tabpanel" aria-labelledby="v-pills-article-tab">
          <br>
          <h1><img src="asset/ic_dashboard_24px.svg" style="height: 48px">Article </h1>

          </div>

          <!-- end content show -->
        </div>
      </div>
    <!-- end nav -->
    </div>


    <!-- ALL MODAL -->

    <!-- Imunisasi -->
          <!-- Modal createImunisasi -->
          <div class="modal fade" id="createImunisasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Imunisasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  
                  <!-- form -->
                  <form>
                    <div class="formCreate">
                      <label for="formGroupExampleInput">Nama</label>
                      <input type="text" class="form-control" id="namaVaksin" placeholder="Nama Imunisasi" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Deskripsi</label>
                      <textarea type="text" class="form-control" id="deskripsiVaksin" placeholder="Vaksin apa | Deskripsi" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Syarat Umur</label>
                      <input type="text" class="form-control" id="syaratUmur" placeholder="Dalam Bulan" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Periode</label>
                      <input type="date" class="form-control" id="periodeVaksin" placeholder="dd-mm-yyyy" required>
                    </div>

                  </form>

                  </div>

                  <!-- button save modal -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>

                </div>
              </div>
            </div>

            <!-- Modal updateImunisasi -->
          <div class="modal fade" id="updateImunisasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Imunisasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  
                  <!-- form -->
                  <form>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Nama</label> 
                      <input type="text" class="form-control" id="nama" placeholder="Nama Vaksin" required value="<!-- php echo nama -->">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Deskripsi</label>
                      <textarea type="text" class="form-control" id="deskripsi" placeholder="Vaksin apa | Deskripsi" required value="<!-- php echo nama -->"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Syarat Umur</label>
                      <input type="text" class="form-control" id="syaratUmur" placeholder="Dalam Bulan" required value="<!-- php echo nama -->">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Periode</label>
                      <input type="date" class="form-control" id="periode" placeholder="dd-mm-yyyy" required value="<!-- php echo nama -->">
                    </div>

                  </form>

                  </div>

                  <!-- button save modal -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>

                </div>
              </div>
            </div>


  <!-- Ibu -->
          <!-- Modal createIBu -->
          <div class="modal fade" id="createIbu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Ibu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  
                  <!-- form -->
                  <form>
                    <div class="formCreate">
                      <label for="formGroupExampleInput">Nama Ibu</label>
                      <input type="text" class="form-control" id="namaIbu" placeholder="Nama Ibu" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Alamat</label>
                      <textarea type="text" class="form-control" id="alamatIbu" placeholder="alamat" required></textarea>
                    </div>

                    <br>
                    <h5 class="modal-title" id="exampleModalLabel">Form Anak</h5>
                    <br>

                    <div class="formCreate">
                      <label for="formGroupExampleInput">Nama Anak</label>
                      <input type="text" class="form-control" id="namaAnak" placeholder="Nama Anak" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Berat Badan (kg) </label>
                      <input type="number" class="form-control" id="bbAnak" placeholder="contoh 1" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Tanggal Lahir</label>
                      <input type="date" class="form-control" id="ttl" placeholder="Dalam Bulan" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">ID ibu</label>
                      <input type="text" class="form-control" id="idIbu" placeholder="id Ibu" disabled value="<!-- php id ibu++-->">
                    </div>
                
                  </form>

                  </div>

                  <!-- button save modal -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>

                </div>
              </div>
            </div>

            <!-- Modal updateIbu -->
          <div class="modal fade" id="updateIbu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Ibu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  
                  <!-- form -->
                  <form>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Nama</label> 
                      <input type="text" class="form-control" id="nama" placeholder="Nama Vaksin" required value="<!-- php echo nama -->">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Alamat</label>
                      <textarea type="text" class="form-control" id="deskripsi" placeholder="alamat" required value="<!-- php echo alamat -->"></textarea>
                    </div>

                  </form>

                  </div>

                  <!-- button save modal -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>

                </div>
              </div>
            </div>

            <!-- Modal lihatAnak -->
            <div class="modal fade" id="lihatAnak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">List Anak</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  
                  <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Tanggal Lahir</th>
                      <th scope="col">Berat Badan (kg)</th>
                    </tr>
                  </thead>
                  <tbody>

                  <!-- loop disini -->
                    <tr>
                      <th scope="row">1</th>
                      <td>Annisa</td>
                      <td>14/4/2020</td>
                      <td>14</td>
                    </tr>

                  </tbody>
                  </table>

                  </div>

                  <!-- button save modal -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>

                </div>
              </div>
            </div>



  <!-- Anak -->
          <!-- Modal historyVaksin-->
          <div class="modal fade" id="historyVaksin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">List History Vaksin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  
                  <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Tanggal pemberian</th>
                      <th scope="col">Nama Vaksin</th>
                      <th scope="col">Setting</th>
                    </tr>
                  </thead>
                  <tbody>

                  <!-- loop disini -->
                    <tr>
                      <th scope="row">1</th>
                      <td>dd/mm/yyyy</td>
                      <td>hepatitis B</td>
                      <td><button type="button" class="btn btn-danger" href="#modul delete php" onClick="return confirm('Apakah Anda Yakin?')" >Delete</button></td>
                    </tr>

                  </tbody>
                  </table>

                  </div>

                  <!-- button save modal -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>

                </div>
              </div>
            </div>

          
          <!-- Modal createAnak-->
          <div class="modal fade" id="createAnak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Anak</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  
                  <!-- form -->
                  <form>
                    <div class="formCreate">
                      <label for="formGroupExampleInput">Nama</label>
                      <input type="text" class="form-control" id="namaAnak" placeholder="Nama Anak" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Berat Badan (kg) </label>
                      <input type="number" class="form-control" id="bbAnak" placeholder="contoh 1" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Tanggal Lahir</label>
                      <input type="date" class="form-control" id="ttl" placeholder="Dalam Bulan" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">ID ibu</label>
                      <input type="text" class="form-control" id="idIbu" placeholder="id Ibu" required>
                    </div>
                  </form>

                  </div>

                  <!-- button save modal -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>

                </div>
              </div>
            </div>

            <!-- Modal updateAnak -->
          <div class="modal fade" id="updateAnak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Anak</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  
                  <!-- form -->
                  <form>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Nama</label> 
                      <input type="text" class="form-control" id="nama" placeholder="Nama Anak" required value="<!-- php echo nama -->">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Berat Badan (kg)</label>
                      <input type="number" class="form-control" id="bb" placeholder="contoh 1" required value="<!-- php echo nama -->">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Tanggal Lahir</label>
                      <input type="date" class="form-control" id="ttl" placeholder="Dalam Bulan" required value="<!-- php echo nama -->">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">ID ibu</label>
                      <input type="text" class="form-control" id="idIbu" placeholder="id ibu" required value="<!-- php echo nama -->">
                    </div>

                    <br>
                    <h5 class="modal-title" id="exampleModalLabel">Update pemberian Vaksin</h5>
                    <br>

                    <!-- loop data vaksin yang belum -->
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Nama Vaksin</label>
                        <select class="form-control" id="selectVaksin">
                          <!-- loop daftar list -->
                          <option>vaksin 1</option>
                          <option>vaksin 2</option>
                          <option>vaksin 3</option>
                          <option>vaksin 4</option>
                          <option>vaksin 5</option>
                        </select>
                      </div>
                    
                    <div class="form-group">
                      <label for="formGroupExampleInput">Tanggal pemberian Vaksin</label> 
                      <input type="date" class="form-control" id="ttl" placeholder="Nama Vaksin" required value="<!-- php echo nama -->">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">ID antrian</label> 
                      <input type="text" class="form-control" id="idAntrian" placeholder="Nama Vaksin" required value="<!-- php echo nama -->">
                    </div>

                  </form>

                  </div>

                  <!-- button save modal -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>

                </div>
              </div>
            </div>

  <!-- Antrian -->
          <!-- verifikasiAntrian -->
          <div class="modal fade" id="verifikasiAntrian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Verifikasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  
                  <!-- form -->
                  <form>
                    <div class="formCreate">
                      <label for="formGroupExampleInput">ID Antrian</label>
                      <input type="text" class="form-control" id="idAntrian" placeholder="ID antrian" required>
                    </div>
                  </form>

                  </div>

                  <!-- button save modal -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
    </body>
</html>