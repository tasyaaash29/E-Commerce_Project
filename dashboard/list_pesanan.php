<?php 
    require_once 'dbkoneksi.php';
?>
<?php
    $sql = "SELECT * FROM pesanan";
    $rs = $dbh->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Product - Sz Box Store</title>
        <link rel="shortcut icon" href="../images/logo2.png" type="image/x-icon">
        
    <!-- Icon -->
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed" style="background-color: #E1AD01;">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="../home.php"><h5>Sz Box Store</h5></a>
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
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="../index.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-arrow-left"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="list_produk.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-shopping-bag"></i></div>
                                Produk
                            </a>
                            <a class="nav-link" href="list_merk.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Merk
                            </a>
                            <a class="nav-link active" href="list_pesanan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                                Daftar Pesanan
                            </a><br><br>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid px-4">
                    <div class="jumbotron jumbotron-fluid" style="background-color: cream; height: 150px; padding: 20px; margin: 10px;">
                        <div class="container" style="background: url(../img/banner/banner3.png); padding-bottom: 2px;  padding-top: 25px;">
                            <h1 class="mt-4 text-black">List pesanan</h1>
                        </div>
                </div>

                
                <table class="table table-light text-center" width="100%" border="1" cellspacing="2" cellpadding="2">
                    <thead>
                        <tr class="table-primary">
                            <th>Id</th>
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Tujuan</th>
                            <th>Produk</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($rs as $row)
                        { ?>

                            <tr>
                                <td><?=$nomor?></td>
                                <td><?=$row['id']?></td>
                                <td><?=$row['tanggal']?></td>
                                <td><?=$row['nama']?></td>
                                <td><?=$row['alamat']?></td>
                                <td><?=$row['jumlah']?></td>
                                <td><?=$row['produk']?></td>
                                <td><?="$ " . number_format($row ['harga'], 2, ',', '.');?></td>
                                <td><?=$row['pesanan']?></td>

                                <td class=>
                                    <a class="btn btn-danger" href="delete_produk.php?iddel=<?=$row['id']?>"
                                    onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['nama']?>?')) {return false}"
                                    >Delete</a>
                                </td>
                            </tr>
                        <?php 
                        $nomor++;  
                        }
                        ?>
                    </tbody>
                </table>  

                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                     <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Aulya Natasya</div>
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
        <script>
          function showLoginAlert() {
            alert("Anda Yakin Akan Logout?");
          }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>