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
        <!-- Content informasi imunisasi -->
        <div class="container" style="margin-top: 150px;margin-bottom: 150px;">
            <h1 class="display-4 d-flex justify-content-center">Informasi Imunisasi PosyanQuy</h1>
            <p class="card-text d-flex justify-content-center">Quy! berikan imunisasi kepada anak tepat pada umur yang dianjurkan🤏</p>
            <br>
            <div class="table-responsive-sm">
                <table class="table table-striped" id='tabel_imunisasi'>
                    <thead>
                    <tr>
                        <!-- <th scope="col"style="text-align: center">NO</th> -->
                        <th scope="col"style="text-align: center">Nama</th>
                        <th scope="col" style="width:55%">Deskripsi</th>
                        <th scope="col"style="text-align: center">Periode</th>
                        <th scope="col" style="text-align: center">Syarat umur (thn)</th>
                    </tr>
                    </thead>
                    <tbody>
        
                    <!-- loop disini -->
                    <?php $i = 0; foreach ($imunisasi as $row) { ?>
                    
                    <tr>
                        <!-- <th scope="row"><?= ++$i ?></th> -->
                        <td><?= $row->nama ?></td>
                        <td><?= $row->deskripsi ?></td>
                        <td style="text-align: center"><?= $row->periode ?></td>
                        <td style="text-align: center"><?= $row->syarat_umur ?></td>
                    </tr>

                    <?php } ?>
                    
                    </tbody>
                    </table>
            </div>
        </div>     
    </body>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>
 
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>
    
    <script>
    $(document).ready( function () {
        $('#tabel_imunisasi').DataTable({
            "lengthMenu": [[ 5, 10, 15, 20, "-1" ],[ 5, 10, 15, 20, "All" ]]
        });
    } );
    </script>
</html>