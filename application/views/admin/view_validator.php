<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
  <header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <style type="text/css">
      body { font-family: sans-serif; }
    </style>
    <ul class="nav navbar-nav d-md-down-none">
      <li class="nav-item px-3">
        <a class="nav-link" href="<?php echo base_url('/c_logistik/home');?>">Dashboard</a>
      </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          Selamat datang <?php echo $this->session->userdata('username');?>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-header text-center">
            <strong>Account</strong>
          </div>
          <a class="dropdown-item" href="<?php echo base_url('/c_user/viewProfile');?>"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username');?></a>
          <a class="dropdown-item" href="<?php echo base_url('c_user/keluar'); ?>"><i class="fa fa-sign-out"></i> Logout</a>
        </div>
      </li>
    </ul>
  </header>
  <div class="app-body">
  <?php $this->load->view("admin/sidebar.php") ?>
  <!-- Main content -->
  <main class="main">
    <!-- Breadcrumb -->

    <ol class="breadcrumb">
      <li class="breadcrumb-item">Home</li>
      <li class="breadcrumb-item"><a href="#">Admin</a></li>
      <li class="breadcrumb-item active">Validator</li>

    <!-- Breadcrumb Menu-->
    </ol>
    <div class="container-fluid">
      <div class="card card-accent-success">
        <div class="card-header">
          <h3>  Kelola Validator Pasien  </h3>
        </div>
        <div class="card-body">

        <div>

        <table id="dataCustomer" class="table ">
          <thead>
            <tr>
              <th>No</th>
              <th>Tanggal</th>
              <th>Nama</th>
              <th>Service</th>
              <th>Harga</th>
              <th>Berkas</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>1 April 2021</td>
              <td>Syifa</td>
              <td>Konsultasi, Treatment Muka</td>
              <td>50000</td>
              <td> 
                <button type="button" class="btn btn-success open-image" data-toggle="modal" data-target="#exampleModal" data-url="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search/jcr_content/main-pars/image/visual-reverse-image-search-v2_intro.jpg"><i class="fa fa-money"></i></button>
                <button type="button" class="btn btn-success open-image" data-toggle="modal" data-target="#exampleModal" data-url="https://image.shutterstock.com/image-photo/white-transparent-leaf-on-mirror-600w-1029171697.jpg"><i class="fa fa-user"></i></button>
              </td>
              <td>
                <button type="button" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></button>
                <button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button>
              </td>
            </tr>
          </tbody>
        </table>
        </div>
      </div>
    </div>
  </main>
  </div>
</body>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
        <img id="image-container" class="col-md-12" src="" alt="">
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>