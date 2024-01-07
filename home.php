

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      .container{
        margin-top: 40vh;
      }
      .navbar {
    background-color: black;
  }

  .navbar-brand,
  .navbar-nav .nav-link {
    color: white !important;
  }
    </style>
</head>
<body>
<!--nav-bar-->
<nav class="navbar navbar-expand-lg bg-dark text-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="warga.php">Warga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="iuran.php">Iuran kas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true"></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--akhir-nav-->

<!--project-->
<section id="project" class="mt-4"> <!-- Tambahkan class "mt-4" untuk memberi margin ke atas -->
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col">
                <h2>Iuran kas rt</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-3" style="width: 18rem">
                <div class="card">
                    <img src="komplek.jpg" class="card-img-top" alt="1" />
                    <div class="card-body">
                        <p class="card-text">Data warga.</p>
                        <a href="warga.php" class="btn btn-primary">Data warga</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3" style="width: 18rem">
                <div class="card">
                    <img src="iuran.jpg" class="card-img-top" alt="1" />
                    <div class="card-body">
                        <p class="card-text">iuran data</p>
                        <a href="iuran.php" class="btn btn-primary">Iuran kas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- AKHIR project-->


</body>
</html>