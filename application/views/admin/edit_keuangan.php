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
        <a class="nav-link" href="<?php echo base_url('/c_user/homeAdmin');?>">Dashboard</a>
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
          <a class="dropdown-item" href="<?php echo base_url('/c_user/form_update');?>"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username');?></a>
          <a class="dropdown-item" href="<?php echo base_url('c_user/keluar'); ?>"><i class="fa fa-sign-out"></i> Logout</a>
        </div>
      </li>
    </ul>
  </header>
   <div class="app-body">
    <div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/c_user/homeAdmin');?>"><i class="icon-speedometer"></i>Admin Dashboard </a>
          </li>
          <li class="nav-title">
            Menu
          </li>
          <li class="nav-item">
            <a class="nav-link" href=" <?php echo base_url('/c_user/homeAdmin');?> "><i class="fa fa-home"></i> Home</a>
          </li>
        </li>
          <li class="nav-item">
            <a class="nav-link" href=" <?php echo base_url('/c_user/kelola_user');?> "><i class="fa fa-user"></i> Kelola User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""><i class="fa fa-home"></i> Kelola Data Pasien</a>
          </li>
          </li>  <!-- kelola user dan data pasien ayidha -->
          <li class="nav-item">
            <a class="nav-link" href=""><i class="fa fa-home"></i> Kelola Pesanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""><i class="fa fa-home"></i> Kelola Treatment</a>
          </li>
          </li>  <!-- kelola pesanan dan treatment syifa -->
          <li class="nav-item nav-dropdown"> 
          <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-file"></i>Keuangan</a>          
            <ul class="nav-dropdown-items">   
              <li class="nav-item">
                <a class="nav-link" href=""><i class="fa fa-share"></i> Pendapatan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="" > <i class="fa fa-inbox"></i> Pengeluaran</a> <!-- elsa -->
              </li>
        </ul>
      </nav>
      <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
    <!-- Main content -->
 <?php
foreach($keuangan->result_array() as $row){
  $id_keuangan = $row['id_keuangan'];
  //$nama_pengadaan    = $row['nama_pengadaan'];
}
?>


<main class="main">
   <ol class="breadcrumb">
      <li class="breadcrumb-item">Home</li>
      <li class="breadcrumb-item"><a href="#">Admin</a></li>
      <li class="breadcrumb-item active">Edit keuangan</li>
   </ol>
   <div class="container-fluid">
      <div class="card card-accent-success">
         <div class="card-header">
      <h3 class="panel-title pull-left">
       Edit keuangan
      </h3>
      <a href="<?php echo site_url('c_keuangan/viewKeuangan');?>" class="btn btn-sm btn-success pull-right"><i class="fa fa-reply"></i> Kembali</a>
         </div>
         <ul class="nav navbar-right panel_toolbox">
         </ul>
         <div class="card-body">
          <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
      <form class="form-horizontal" method="post" action="<?php echo site_url('c_keuangan/edit_keuangan');?>">
        <div class="form-group">
        <label class="control-label col-sm-2" for="pendapatan">Pendapatan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="pendapatan" name="pendapatan"  value="<?php echo $detail->pe ;?>" readonly>
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="jumlah_pendapatan">Jumlah Pendapatan</label>
        <div class="col-sm-10"> 
          <input type="text" class="form-control" id="jumlah_pendapatan" name="jumlah_pendapatan" value="<?php echo $jumlah_pendapatan;?>" placeholder="Input jumlah_pendapatan" required>
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="pengeluaran">Pengeluaran</label>
        <div class="col-sm-10"> 
          <input type="text" class="form-control" id="pengeluaran" name="pengeluaran" value="<?php echo $pengeluaran;?>" placeholder="Input pengeluaran" required>
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="jumlah_pengeluaran">Jumlah Pengeluaran</label>
        <div class="col-sm-10"> 
          <input type="text" class="form-control" id="jumlah_pengeluaran" name="jumlah_pengeluaran" value="<?php echo $jumlah_pengeluaran;?>" placeholder="Input jumlah_pengeluaran" required>
        </div>
        </div>
     
        <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan </button>
 
        </div>
        </div>
      </form>

         </div>
     
  
      </div>
   </div>
</main>
</div>