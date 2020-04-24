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
  Modal Anak      = (createAnak,updateAnak)
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
    <link rel="icon" href="<?= base_url('assets/ic_local_hospital_48px.1.svg') ?>" type="image/icon type">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/admin.js') ?>"></script>
    <title>Admin Panel | Dashboard</title>

  </head>
  <body>    
    
    <!--nav-->
    <div class="row m-1">
     <div class="col-3">
      <h1><img src="<?= base_url('assets/ic_local_hospital_48px.1.svg') ?>">PosyanQuy</h1>
      <p>Admin Panel<p>
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="v-pills-dashboard-tab" data-toggle="pill" href="#v-pills-dashboard" role="tab" aria-controls="v-pills-dashboard" aria-selected="true"><img src="<?= base_url('assets/ic_dashboard_24px.svg') ?>" style="height: 24px"> Dashboard</a>
        <a class="nav-link" id="v-pills-imunisasi-tab" data-toggle="pill" href="#v-pills-imunisasi" role="tab" aria-controls="v-pills-imunisasi" aria-selected="false"><img src="<?= base_url('assets/pill.svg') ?>" style="height: 24px"> Imunisasi</a>
        <a class="nav-link" id="v-pills-ibu-tab" data-toggle="pill" href="#v-pills-ibu" role="tab" aria-controls="v-pills-ibu" aria-selected="false"><img src="<?= base_url('assets/woman.svg') ?>" style="height: 24px"> Ibu</a>
        <a class="nav-link" id="v-pills-anak-tab" data-toggle="pill" href="#v-pills-anak" role="tab" aria-controls="v-pills-anak" aria-selected="false"><img src="<?= base_url('assets/child-solid.svg') ?>" style="height: 24px"> Anak</a>
        <a class="nav-link" id="v-pills-antrian-tab" data-toggle="pill" href="#v-pills-antrian" role="tab" aria-controls="v-pills-antrian" aria-selected="false"><img src="<?= base_url('assets/queue.svg') ?>" style="height: 24px"> Antrian</a>

        <hr>
        <!-- LOGOUT -->
        <a class="nav-link" id="v-pills-logout-tab"  href="#logout"  aria-selected="false"><img src="<?= base_url('assets/log-out.svg') ?>" style="height: 24px">Logout</a>
      
      </div>
      </div>

      <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">

          
          <!--Content Dashboard id='v-pills-dashboard-tab'-->
          <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
          <br>
          <h1><img src="<?= base_url('assets/ic_dashboard_24px.svg') ?>" style="height: 48px">Dashboard </h1>
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
                <h5 class="card-title">Create Imunisasi baru</h5>
                <p class="card-text">Tambahkan Imunisasi pada database</p>
                <br><Br>
                <button class="btn btn-outline-primary my-2 my-sm-0" data-toggle="modal" data-target="#createImunisasi" type="button">Tambah</button>
              </div>
            </div>
          </li>
          

          

          <!-- end Content -->
          </ul>
          </div>

          <!--Content Imunisasi id='v-pills-imunisasi-tab'-->
          <div class="tab-pane fade" id="v-pills-imunisasi" role="tabpanel" aria-labelledby="v-pills-imunisasi-tab">
          <br>
          <h1><img src="<?= base_url('assets/pill.svg') ?>" style="height: 48px">Imunisasi</h1>

          <nav class="navbar navbar-light bg-light justify-content-between">
          
          <!-- Load Ajax ya gan, call ke URL posyanquy/admin/imunisasi/search/{keyword} -->
          <script src='<?php echo base_url(); ?>admin/imunisasi/search/{keyword}' type='text/javascript' ></script>

          <form id="formSearchImunisasi" class="form-inline">
            <input class="form-control mr-sm-2" id="keyword" name="keyword" type="search" placeholder="Search" aria-label="Search">
            <!-- searchImunisasi -->
            <button class="btn btn-outline-primary my-2 my-sm-0" onclick="searchImunisasi()" type="submit">Search</button>
          </form>
            <!--createImunisasi-->
            <button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#createImunisasi" type="button">Tambah</button>
          </nav>

          <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nama</th>
              <th scope="col">Syarat umur</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Periode</th>
              <th scope="col">ID Kader</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            
            <?php foreach ($imunisasi as $row) { ?>
            <tr>
              <th scope="row"><?= $row->id ?></th>
              <td><?= $row->nama ?></td>
              <td><?= $row->syarat_umur ?></td>
              <td><?= $row->deskripsi ?></td>
              <td><?= $row->periode ?></td>
              <td><?= $row->id_kader ?></td>
              <td>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateImunisasi" onclick="getImunisasi(<?= $row->id ?>)">Edit</button>
                <a type="button" class="btn btn-danger" href="<?= site_url('admin/imunisasi/delete/' . $row->id) ?>" onClick="return confirm('Apakah Anda Yakin?')" >Delete</a>
              </td>
            </tr>
            <?php } ?>

          </tbody>
          </table>
          </div>

          

          

          <!--Content ibu id='v-pills-ibu-tab'-->
          <div class="tab-pane fade" id="v-pills-ibu" role="tabpanel" aria-labelledby="v-pills-ibu-tab">
          <br>
          <h1><img src="<?= base_url('assets/woman.svg') ?>" style="height: 48px">Ibu </h1>

          <nav class="navbar navbar-light bg-light justify-content-between">
          <!-- Load Ajax ya gan, call ke URL posyanquy/admin/ibu/search/{keyword} -->
          <script src='<?php echo base_url(); ?>admin/ibu/search/{keyword}' type='text/javascript' ></script>

          <form id="formSearchIbu" class="form-inline">
            <input class="form-control mr-sm-2" id="keyword" name="keyword" type="search" placeholder="Search" aria-label="Search">
            
            <!-- searchIbu -->
            <button class="btn btn-outline-primary my-2 my-sm-0" onclick="searchIbu()" type="submit">Search</button>

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
              <th scope="col">Email</th>
              <th scope="col">Password</th>
              <th scope="col">List Anak</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            
            <?php foreach ($ibu as $row) { ?>
            <tr>
              <th scope="row"><?= $row->id ?></th>
              <td><?= $row->nama ?></td>
              <td><?= $row->alamat ?></td>
              <td><?= $row->email ?></td>
              <td><?= $row->password ?></td>
              <td>
                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#lihatAnak" onclick="getAnakByIbu(<?= $row->id ?>)">Lihat</button>
              </td>
              <td>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateIbu" onclick="getIbu(<?= $row->id ?>)">Edit</button>
                <a type="button" class="btn btn-danger" href="<?= site_url('admin/ibu/delete/' . $row->id) ?>" onClick="return confirm('Apakah Anda Yakin?')" >Delete</a>
              </td>
            </tr>
            <?php } ?>
            

          </tbody>
          </table>
          </div>

          <!--Content anak id='v-pills-anak-tab'-->
          <div class="tab-pane fade" id="v-pills-anak" role="tabpanel" aria-labelledby="v-pills-anak-tab">
          <br>
          <h1><img src="<?= base_url('assets/child-solid.svg') ?>" style="height: 48px">Anak </h1>

          <nav class="navbar navbar-light bg-light justify-content-between">
          <!-- Load Ajax ya gan, call ke URL posyanquy/admin/anak/search/{keyword} -->
          <script src='<?php echo base_url(); ?>admin/anak/search/{keyword}' type='text/javascript' ></script>

          <form id="formSearchAnak" class="form-inline">
            <input class="form-control mr-sm-2" id="keyword" name="keyword" type="search" placeholder="Search" aria-label="Search">
            
            <!-- searchIbu -->
            <button class="btn btn-outline-primary my-2 my-sm-0" onclick="searchAnak()" type="submit">Search</button>

          </form>

            <!--createAnak-->
            <button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#createAnak" type="button">Tambah</button>

          </nav>

          <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nama</th>
              <th scope="col">Tempat Lahir</th>
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">Berat Badan (kg)</th>
              <th scope="col">ID ibu</th>
              <th scope="col">History Vaksin</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            
            <?php foreach ($anak as $row) { ?>
            <tr>
              <th scope="row"><?= $row->id ?></th>
              <td><?= $row->nama ?></td>
              <td><?= $row->tempat_lahir ?></td>
              <td><?= $row->tanggal_lahir ?></td>
              <td><?= $row->berat_badan ?></td>
              <td><?= $row->id_ibu ?></td>
              <td>
                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#historyVaksin" onclick="getHistoryVaksinByAnak(<?= $row->id ?>)">Lihat</button>
              </td>
              <td>

                <!-- UPDATE VAKSIN -->
                <div class="card-body flex-column d-flex">
                  <button type="button" class="btn btn-light" data-toggle="modal" data-target="#updateVaksinAnak" onclick="">Update Vaksin</button>
                </div>

                <!-- UPDATE DATA ANAK -->
                <div class="card-body flex-column d-flex">
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateAnak" onclick="getAnak(<?= $row->id ?>)">Edit</button>
                </div>

                <!-- DELETE -->
                <div class="card-body flex-column d-flex">
                  <a type="button" class="btn btn-danger" href="<?= site_url('admin/anak/delete/' . $row->id) ?>" onClick="return confirm('Apakah Anda Yakin?')" >Delete</a>
                </div>

              </td>
            </tr>
            <?php } ?>

          </tbody>
          </table>
          </div>

          

          

          <!--Content antrian id='v-pills-antrian-tab'-->
          <div class="tab-pane fade" id="v-pills-antrian" role="tabpanel" aria-labelledby="v-pills-antrian-tab">
          <br>
          <h1><img src="<?= base_url('assets/queue.svg') ?>" style="height: 48px">Antrian </h1>

          <nav class="navbar navbar-light bg-light justify-content-between">
          <!-- Load Ajax ya gan, call ke URL posyanquy/admin/imunisasi/antrian/{keyword} -->
          <script src='<?php echo base_url(); ?>admin/imunisasi/antrian/{keyword}' type='text/javascript' ></script>

          <form id="formSearchAntrian" class="form-inline">
            <input class="form-control mr-sm-2" id="keyword" name="keyword" type="date" placeholder="Search" aria-label="Search">
            
            <!-- searchAntrian -->
            <button class="btn btn-outline-primary my-2 my-sm-0" onclick="searchAntrian()" type="submit">Search</button>

          </form>

          </nav>
         

          <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID antrian</th>
              <th scope="col">Waktu</th>
              <th scope="col">ID ibu</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            
            <?php foreach ($antrian as $row) { ?>
            <tr>
              <th scope="row"><?= $row->id ?></th>
              <td><?= $row->waktu ?></td>
              <td><?= $row->id_ibu ?></td>
              <td>
                <a type="button" class="btn btn-danger" href="<?= site_url('admin/antrian/delete/' . $row->id) ?>" onClick="return confirm('Apakah Anda Yakin?')" >Delete</a>
              </td>
            </tr>
            <?php } ?>
            

          </tbody>
          </table>
          </div>

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
                  <form id="formCreateImunisasi" method="POST" action="<?= site_url('admin/imunisasi/create') ?>">
                    <div class="formCreate">
                      <label for="formGroupExampleInput">Nama</label>
                      <input type="text" class="form-control" name="namaVaksin" id="namaVaksin" placeholder="Nama Imunisasi" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Deskripsi</label>
                      <textarea type="text" class="form-control" name="deskripsiVaksin" id="deskripsiVaksin" placeholder="Vaksin apa | Deskripsi" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Syarat Umur</label>
                      <input type="text" class="form-control" name="syaratUmur" id="syaratUmur" placeholder="Dalam Bulan" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Periode</label>
                      <input type="date" class="form-control" name="periodeVaksin" id="periodeVaksin" placeholder="dd-mm-yyyy" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">ID kader</label>
                      <input type="number" class="form-control" name="idKader" id="idKader" placeholder="13011xxxxx" required>
                    </div>

                  </form>

                  </div>

                  <!-- button save modal -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" form="formCreateImunisasi" class="btn btn-primary">Save changes</button>
                  </div>

                </div>
              </div>
            </div>
            <!-- load ajax buat ngefill value nya ke form, call URL posyanquy/admin/imunisasi/get/{id} --> 
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
                  <form id="formUpdateImunisasi" method="POST" action="<?= site_url('admin/imunisasi/update') ?>">
                    <input type="hidden" id="idVaksin" name="idVaksin">
                    <div class="formCreate">
                      <label for="formGroupExampleInput">Nama</label>
                      <input type="text" class="form-control" name="namaVaksin" id="namaVaksin" placeholder="Nama Imunisasi" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Deskripsi</label>
                      <textarea type="text" class="form-control" name="deskripsiVaksin" id="deskripsiVaksin" placeholder="Vaksin apa | Deskripsi" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Syarat Umur</label>
                      <input type="text" class="form-control" name="syaratUmur" id="syaratUmur" placeholder="Dalam Bulan" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Periode</label>
                      <input type="date" class="form-control" name="periodeVaksin" id="periodeVaksin" placeholder="dd-mm-yyyy" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">ID kader</label>
                      <input type="number" class="form-control" name="idKader" id="idKader" placeholder="13011xxxxx" required>
                    </div>

                  </form>

                  </div>

                  <!-- button save modal -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" form="formUpdateImunisasi" class="btn btn-primary">Save changes</button>
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
                  <form id="formCreateIbu" method="POST" action="<?= site_url('admin/ibu/create') ?>">
                    <div class="formCreate">
                      <label for="formGroupExampleInput">Nama Ibu</label>
                      <input type="text" class="form-control" name="namaIbu" id="namaIbu" placeholder="Nama Ibu" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Alamat</label>
                      <textarea type="text" class="form-control" name="alamatIbu" id="alamatIbu" placeholder="alamat" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Email</label>
                      <input type="email" class="form-control" name="emailIbu" id="emailIbu" placeholder="ibu@email.com" required></input>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Password</label>
                      <input type="password" class="form-control" name="passwordIbu" id="passwordIbu" placeholder="password" required></input>
                    </div>

                  </form>

                  </div>

                  <!-- button save modal -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" form="formCreateIbu" class="btn btn-primary">Save changes</button>
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
                  <form id="formUpdateIbu" method="POST" action="<?= site_url('admin/ibu/update') ?>">
                    <input type="hidden" id="idIbu" name="idIbu">
                    <div class="form-group">
                      <label for="formGroupExampleInput">Nama</label> 
                      <input type="text" class="form-control" name="namaIbu" id="namaIbu" placeholder="Nama Ibu" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Alamat</label>
                      <textarea type="text" class="form-control" name="alamatIbu" id="alamatIbu" placeholder="alamat" required></textarea>
                    </div>

                  </form>

                  </div>

                  <!-- button save modal -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" form="formUpdateIbu" class="btn btn-primary">Save changes</button>
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

                  <!-- loop disini
                    <tr>
                      <th scope="row">1</th>
                      <td>Annisa</td>
                      <td>14/4/2020</td>
                      <td>14</td>
                    </tr>
                  -->

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
        <!-- MODAL #updateVaksinAnak-->
        <div class="modal fade" id="updateVaksinAnak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Vaksin Anak | Create History vaksin </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  
                  <!-- form -->
                  <form id="formUpdateVaksinAnak" method="POST" action="<?= site_url('admin/anak/update') ?>">

                    <!-- loop data vaksin yang belum -->
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Nama Vaksin</label>
                        <select class="form-control" id="selectVaksin">

                          <!-- loop daftar list -->
                          <?php foreach ($imunisasi as $row) { ?>
                            <option><?= $row->nama ?></option>
                          <?php }?>

                        </select>
                      </div>
                    
                    <div class="form-group">
                      <label for="formGroupExampleInput">Tanggal</label> 
                      <input type="date" class="form-control" name="tanggalHistory" id="tanggalHistory" placeholder="Tanggal" required>
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
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                  <!-- loop disini
                    <tr>
                      <th scope="row">1</th>
                      <td>dd/mm/yyyy</td>
                      <td>hepatitis B</td>
                      <td><button type="button" class="btn btn-danger" href="#modul delete php" onClick="return confirm('Apakah Anda Yakin?')" >Delete</button></td>
                    </tr>
                  -->

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
                    <h5 class="modal-title" id="exampleModalLabel">Form Ibu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  
                  <!-- form -->
                  <form id="formCreateAnak" method="POST" action="<?= site_url('admin/anak/create') ?>">
                    <div class="formCreate">
                      <label for="formGroupExampleInput">Nama</label>
                      <input type="text" class="form-control" name="namaAnak" id="namaAnak" placeholder="Nama Anak" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Berat Badan (kg) </label>
                      <input type="number" class="form-control" name="bbAnak" id="bbAnak" placeholder="contoh 1" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Tanggal Lahir</label>
                      <input type="date" class="form-control" name="ttl" id="ttl" placeholder="Dalam Bulan" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Tempat Lahir</label>
                      <input type="text" class="form-control" name="ttl1" id="ttl1" placeholder="Nama Kota" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">ID ibu</label>
                      <input type="text" class="form-control" name="idIbu" id="idIbu" placeholder="id Ibu" required>
                    </div>
                  </form>

                  </div>

                  <!-- button save modal -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" form="formCreateIbu" class="btn btn-primary">Save changes</button>
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
                  <form id="formUpdateAnak" method="POST" action="<?= site_url('admin/anak/update') ?>">
                    <input type="hidden" id="idAnak" name="idAnak">
                    <div class="formCreate">
                      <label for="formGroupExampleInput">Nama</label>
                      <input type="text" class="form-control" name="namaAnak" id="namaAnak" placeholder="Nama Anak" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Berat Badan (kg) </label>
                      <input type="number" class="form-control" name="bbAnak" id="bbAnak" placeholder="contoh 1" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Tanggal Lahir</label>
                      <input type="date" class="form-control" name="ttl" id="ttl" placeholder="Dalam Bulan" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Tempat Lahir</label>
                      <input type="text" class="form-control" name="ttl1" id="ttl1" placeholder="Nama Kota" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">ID ibu</label>
                      <input type="text" class="form-control" name="idIbu" id="idIbu" placeholder="id Ibu" required>
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