<html>
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
  </head>
  <body>
  <!-- nav -->     
  <div class="container">
      <div class="row"></div></div>
          <nav class="navbar navbar-light bg-white fixed-top shadow p-3 mb-5 bg-white rounded" style="height: 100px;">
              <a class="navbar-brand"><img src="<?php echo base_url('assets/ic_local_hospital_48px.1.svg')?>" alt="icon"><b>PosyanQuy</b></a>
              <ul class="nav justify-content-end">
                  <li class="nav-item">
                    <a class="nav-link active" href="<?php echo site_url('index')?>">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('imunisasi')?>">Imunisasi</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url('article/0')?>">Article</a>
                    </li>
                  <li class="nav-item">
                    <a class="btn btn-primary" href="<?php echo site_url('login')?>">Login</a>
                  </li>
              </ul>
          </nav>
      </div>
  </div>
  </body>
</html>