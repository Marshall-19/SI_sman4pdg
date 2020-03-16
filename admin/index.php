<?php include 'components/koneksi.php' ?>
<!DOCTYPE html>
<html>
<!-- head -->
<?php include 'components/head.php' ?>

<body class="hold-transition sidebar-mini layout-fixed">

  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <?php include 'components/navbar.php' ?>

      <!-- SEARCH FORM -->
      <!-- Right navbar links -->

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.html" class="brand-link">
        <span style="align-content: center" class="brand-text font-weight-light">SMA NEGERI 4 PADANG</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <!-- Sidebar Menu -->
        <?php include 'components/sidebar.php' ?>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <?php include 'content.php' ?>

  </div>
  <!-- ./wrapper -->

  <?php include 'components/script.php' ?>

</body>

</html>