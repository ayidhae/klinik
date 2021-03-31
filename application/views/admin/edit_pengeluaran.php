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
            <a class="nav-link" href=" <?php echo base_url('/c_dataPasien/inputPasien');?> "><i class="fa fa-home"></i> Kelola Data Pasien</a>
          </li>
          </li>  <!-- kelola user dan data pasien ayidha -->
          <li class="nav-item">
            <a class="nav-link" href=""><i class="fa fa-home"></i> Kelola Pesanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""><i class="fa fa-home"></i> Kelola Treatment</a>
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
            <a class="nav-link" href=" <?php echo base_url('/c_pendapatan/viewPendapatan');?> "><i class="fa fa-home"></i> pendapatan </a>
          </li>
          <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/c_pengeluaran/viewPengeluaran');?>" > <i class="fa fa-inbox"></i> Pengeluaran</a> <!-- elsa -->
              </li> <!-- elsa -->
              </li>
        </ul>
      </nav>
      <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
    <!-- Main content -->
    <main class="main">
      
     
      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item active">Edit Pengeluaran</li>
        <!-- Breadcrumb Menu-->
      </ol>
      <!-- /.conainer-fluid -->
<?php foreach($pengeluaran as $detail): ?>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
           <h3 class="panel-title pull-left">Edit Pengeluaran</h3>
            <a href="<?php echo site_url('/c_pengeluaran/viewPengeluaran');?>" class="btn btn-sm btn-success pull-right"><i class="fa fa-reply"></i> Kembali</a>       
        </div>
        <div class="row">
        <div class="col-md-9">
                <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>        
                <div class="panel-body">
                  <div class="form-horizontal">
                    <form action="<?php echo base_url().'c_pengeluaran/update_penegeluaran/'.$detail->Kode; ?>" method="post">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="control-label">Kode</label>
                            <div class="">
                            <Input name="kode" class="form-control" type="text" name="kode" value="<?php echo $detail->Kode ;?>" >
                            </div>
                            <div class="row">
                        <div class="col-md-12">                       
                          <div class="form-group">
                            <label class="control-label">Tanggal</label>
                            <div class="">
                              <Input name="tanggal" class="form-control" type="date" name="tgl" value="<?php echo $detail->Tanggal;?>" >
                            </div>
                          </div>
                          <div class="row">
                        <div class="col-md-12">                       
                          <div class="form-group">
                            <label class="control-label">Keterangan</label>
                            <div class="">
                              <Input name="keterangan" class="form-control" type="text" name="keterangan" value="<?php echo $detail->Keterangan;?>" >
                            </div>
                          </div>
                      <div class="col-md-12">                       
                          <div class="form-group">
                            <label class="control-label">Jumlah</label>
                            <div class="">
                              <Input name="jumlah" class="form-control" type="number" name="jlh" value="<?php echo $detail->Jumlah;?>" >
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                             <a href=""><button class="btn btn-primary"> <i class="fa fa-pencil">Simpan</i></button></a>
                              <a href="<?php echo base_url('c_pengeluaran/viewPengeluaran')?>" class="btn btn-danger"> Batal </a>
                            </div>
                          </div>
                      <?php endforeach; ?>
                    </form>
                    </div>  <!-- end form-horizontal -->
                    </div> <!-- end panel-body -->
                  </div>
                </div>
              </div>
            </div>
          </div>
      
</main>
</div>