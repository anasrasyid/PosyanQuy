<!doctype html>
<html lang="en">
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
    
        <title>PosyanQuy | Datang ke posyandu Quy</title>

    </head>
    <body>

        <!-- Content informasi imunisasi -->
        <div class="container" style="margin-top: 150px;margin-bottom: 150px;">
            <h1 class="display-4 d-flex justify-content-center">Informasi Imunisasi PosyanQuy</h1>
            <p class="card-text d-flex justify-content-center">Quy! berikan imunisasi kepada anak tepat pada umur yang dianjurkan🤏</p>
            <div class="container">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Periode</th>
                        <th scope="col">Syarat umur</th>
                    </tr>
                    </thead>
                    <tbody>
        
                    <!-- loop disini -->
                    <?php for ($i=0; $i < count($imunisasi); $i++) { ?>
                    
                    <tr>
                        <th scope="row"><?php echo ($i+1) ?></th>
                        <td><?php echo $imunisasi[$i]['nama'] ?></td>
                        <td><?php echo $imunisasi[$i]['Deskripsi'] ?></td>
                        <td><?php echo $imunisasi[$i]['Periode'] ?></td>
                        <td><?php echo $imunisasi[$i]['syarat_umur'] ?></td>
                    </tr>

                    <?php
                    }
                    ?>
                    
                    </tbody>
                    </table>
            </div>
        </div>     
    </body>
</html>