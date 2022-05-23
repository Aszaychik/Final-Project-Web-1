<?php  
    require 'functions.php';
    $admin_db = query("SELECT * FROM admin_peminjaman");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin List</title>
    <!-- Bootstrap Core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Boxicon CSS -->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" />
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body id="body-pd">
    <header class="header" id="header">
      <div class="header_toggle"><i class="bx bx-menu" id="header-toggle"></i></div>
      <div class="container-fluid navbar-dark w-25">
        <a href="" class="navbar-brand fw-bold">ASZAYCHIK</a>
      </div>
      <div class="container-fluid d-flex justify-content-end search-bar">
        <form class="d-flex w-50">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-light btn-dark" type="submit">Search</button>
        </form>
      </div>
      <div class="header_img rounded-circle"><img src="src/Kozeki Ui.jpg" alt="" /></div>
    </header>
    <div class="l-navbar" id="nav-bar">
      <nav class="nav">
        <div>
          <a href="#" class="nav_logo"> <i class="bx bx-layer nav_logo-icon"></i> <span class="nav_logo-name">ASZAYCHIK</span> </a>
          <div class="nav_list">
            <a href="index.html" class="nav_link"> <i class="bx bx-home nav_icon"></i> <span class="nav_name">HOME</span> </a>
            <a href="#" class="nav_link"> <i class="bx bx-disc nav_icon"></i> <span class="nav_name">Data Blu-ray</span> </a>
            <a href="admin-db.php" class="nav_link active"> <i class="bx bx-user nav_icon"></i> <span class="nav_name">Data Admin</span>
            <a href="peminjam-db.php" class="nav_link"> <i class="bx bx-group nav_icon"></i> <span class="nav_name">Data Peminjam</span> </a>
            <a href="#" class="nav_link"> <i class="bx bx-cart-alt nav_icon"></i> <span class="nav_name">Data Peminjaman</span> </a>
            <a href="#" class="nav_link"> <i class="bx bxs-hourglass nav_icon"></i> <span class="nav_name">Data Pengembalian</span> </a>
            <a href="#" class="nav_link"> <i class="bx bxs-report nav_icon"></i> <span class="nav_name">Laporan</span> </a>
          </div>
        </div>
        <a href="#" class="nav_link"> <i class="bx bx-log-out nav_icon"></i> <span class="nav_name">SignOut</span> </a>
      </nav>
    </div>
    <!--Container Main start-->
    <section class="jumbotron text-center text-light mt-5">
      <h1 class="mt-5">DATA ADMIN</h1>
      <div class="table-responsive">
        <table cellspacing="" cellpadding="" class="mt-5 mb-5 characters-table m-auto w-50">
        
          <tr class="bg-dark ">
              <th>No.</th>
              <th>Actions</th>
              <th>Id</th>
              <th>Name</th>
              <th>Gender</th>
              <th>Address</th>
              <th>Personal Number</th>
          </tr>
          <?php $i = 1 ;?>
          <?php foreach ($admin_db as $row): ?>
          <tr class="">
              <td><?= $i; ?></td>
              <td>
                  <a href=""><button class="btn btn-dark btn-landing">Update</button></a>
                  |
                  <a href="delete-admin.php?id=<?= $row["KD_ADMIN"];?>" onclick="return confirm('Are you sure ?');"><button class="btn btn-dark btn-landing">Delete</button></a>
              </td>
              <td><?= $row["KD_ADMIN"]; ?></td>
              <td><?= $row["NAMA_ADMIN"]; ?></td>
              <td><?= $row["JK_ADMIN"]; ?></td>
              <td><?= $row["ALMT_ADMIN"] ;?></td>
              <td><?= $row["NO_TLPADMIN"] ;?></td>
              </tr>
          <?php $i++; ?>
              <?php endforeach; ?>
            </table>
            <a href="insert-admin.php"><button class="btn btn-dark btn-landing">Insert</button></a>
      </div>
    </section>
    <!--Container Main end-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>