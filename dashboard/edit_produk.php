<?php
require_once 'dbkoneksi.php';
?>

<?php 
    $_idedit = $_GET['idedit'];
    if(!empty($_idedit)){
        // edit
        $sql = "SELECT * FROM produk WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_idedit]);
        $row = $st->fetch();
    }else{
        // new data
        $row = [];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Dashboard - SB Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
  <link href="css/styles.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
      <div class="input-group">
        <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
      </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#!">Settings</a></li>
          <li><a class="dropdown-item" href="#!">Activity Log</a></li>
          <li>
            <hr class="dropdown-divider" />
          </li>
          <li><a class="dropdown-item" href="#!">Logout</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="index.html">
              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
              Dashboard
            </a>
            <a class="nav-link active" href="list_produk.php">
              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
              Produk
            </a>
            <a class="nav-link" href="index.html">
              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
              Merk
            </a>
            <a class="nav-link" href="index.html">
              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
              Pemesanan
            </a>
      </nav>
    </div>
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4">
          <h1 class="mt-4">Form Produk</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Form Produk</li>
          </ol>
        </div>
        <div class="container">
          <form method="POST" action="proses_produk.php">
            <div class="form-group row">
              <label for="nama" class="col-4 col-form-label">Nama</label>
              <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control" value="<?=$row['nama'];?>">
              </div>
            </div><br>
            <div class="form-group row">
              <label for="stok" class="col-4 col-form-label">Stok</label>
              <div class="col-8">
                <input id="stok" name="stok" type="text" class="form-control" value="<?=$row['stok'];?>">
              </div>
            </div><br>
            <div class="form-group row">
              <label for="harga" class="col-4 col-form-label">Harga</label>
              <div class="col-8">
                <input id="harga" name="harga" type="text" class="form-control" value="<?=$row['harga'];?>">
              </div>
            </div><br>
            <div class="form-group row">
              <label for="kategori_produk_id" class="col-4 col-form-label">Merk</label>
              <div class="col-8">
                <?php
                $sqlkategori_produk_id = "SELECT * FROM kategori_produk";
                $rskategori_produk_id = $dbh->query($sqlkategori_produk_id);
                ?>
                <select id="kategori_produk_id" name="kategori_produk_id" class="custom-select">
                  <?php
                  foreach ($rskategori_produk_id as $rowkategori_produk_id) {
                  ?>
                    <option value="<?= $rowkategori_produk_id['id'] ?>"><?= $rowkategori_produk_id['nama'] ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
            </div>
        </div><br>
        <div class="form-group row">
              <label for="foto" class="col-4 col-form-label">Link Foto</label>
              <div class="col-8">
                <input id="foto" name="foto" type="text" class="form-control">
              </div>
            </div><br>
            <div class="form-group row">
              <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
              <div class="col-8">
                <input id="deskripsi" name="deskripsi" type="text" class="form-control">
              </div>
            </div><br>
        <div class="form-group row">
          <div class="offset-4 col-8">
            <input name="proses" type="submit" class="btn btn-primary" value="Update" />
            <input type="hidden" name="idedit" value="<?=$_idedit;?>">
          </div>
        </div>
        </form>
    </div>
    </main>
    <div>
      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy;Aulya Natasya</div>
            <div>
              <a href="#">Privacy Policy</a>
              &middot;
              <a href="#">Terms &amp; Conditions</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="assets/demo/chart-area-demo.js"></script>
  <script src="assets/demo/chart-bar-demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
  <script src="js/datatables-simple-demo.js"></script>
</body>

</html>