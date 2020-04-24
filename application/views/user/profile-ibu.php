<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Profil Ibu - PosyanQuy</title>
</head>

<body>
    <!-- Navbar -->
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/brand.svg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">Profile</span></a>
                    <a class="nav-item nav-link " href="form-antrian.html">Daftar Antrian</a>
                </div>
            </div>
        </div>
    </nav> -->
    <!-- Akhir Navbar-->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container mt-5">
            <div class="row">
                <div class="col-3">
                    <img src="<?php echo base_url('assets/user.svg')?>" alt="">
                </div>

                <div class="col-9 p-5 mt-4">
                    <h4 class="display-4"><?php echo $ibu->nama ?></h4>
                    <p class="lead"><?php echo $umur ?></p>
                    <p class="lead"><?php echo $ibu->alamat?></p>
                    <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo site_url('member/logout')?>'">Logout</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Table data Anak -->
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>TTL</th>
                    <th>Berat Badan (Kg)</th>
                    <th>Detail Imunisasi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0; foreach ($anak as $row) { ?>
                <tr>
                    <td><?php echo ++$i ?></td>
                    <td><?php echo $row->nama ?></td>
                    <td><?php echo $row->tanggal_lahir ?></td>
                    <td><?php echo $row->berat_badan ?></td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#exampleModalCenter">
                            Lihat
                        </button>
                    </td>
                </tr>
                <?php } ?>
                
            </tbody>
        </table>
    </div>
    <!-- Akhir Table data Anak -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Detail Imunisasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-9 p-5 mt-4">
                            <h3>Ceklis Imunisasi <br>TBA</h3>
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Nama Vaksin</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-success">
                                        <td>COVID-69</td>
                                        <td>Sudah</td>
                                    </tr>

                                    <tr class="table-danger">
                                        <td>SMADAV</td>
                                        <td>Belum</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Modal -->

</html>