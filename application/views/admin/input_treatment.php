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
         <li class="nav-item nav-dropdown"> 
          <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-user"></i>Kelola User</a>          
            <ul class="nav-dropdown-items">   
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/c_user/kelola_user');?>"><i class="fa fa-user"></i> User Internal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/c_user/kelola_pasien');?>" > <i class="fa fa-user"></i> User Pasien</a> <!-- elsa -->
              </li>
        </ul>
          <li class="nav-item">
            <a class="nav-link" href=" <?php echo base_url('/c_dataPasien/inputPasien');?> "><i class="fa fa-home"></i> Kelola Data Pasien</a>
          </li>
          </li>  <!-- kelola user dan data pasien ayidha -->
          <li class="nav-item">
            <a class="nav-link" href=""><i class="fa fa-home"></i> Kelola Pesanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('c_kelola_treatment/inputTreatment');?>"><i class="fa fa-home"></i> Kelola Treatment</a>
          </li>
          </li>  <!-- kelola pesanan dan treatment syifa -->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('c_keuangan/inputKeuangan');?>"><i class="fa fa-home"></i> Keuangan</a>
          </li>
          </li>  
      </nav>
      <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
    <!-- Main content -->
    <main class="main">
      <!-- Breadcrumb -->
   
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item active">input Treatment</li>

        <!-- Breadcrumb Menu-->
      </ol>
        <!-- Breadcrumb Menu-->
     
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5> </i> Tambah Treatment</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-9">              
                
                <div class="panel-body">
                  <div class="form-horizontal">
                    <form action="<?php echo base_url(). 'c_kelola_treatment/simpanTreatment'; ?>" enctype="multipart/form-data" method="post">
                      <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
                      <div class="row">
                        <div class="col-md-6">                       
                          <div class="form-group">
                            <label class="control-label">Nama Treatment</label>
                            <div class="">
                              <input class="form-control" type="text" name="nama_treatment" value="" required>
                            </div>
                          </div>
                           
                           <div class="form-group">
                            <label for="sel1" >Kategori Treatment</label>
                            <select name="id_kategori_treatment" class="form-control" id="sel1">
                              <?php 
                              foreach ($kategori as $data) {
                              ?>
                            <option value="<?php echo $data->id_kategori_treatment ?>"><?php echo $data->nama_kategori_treatment ?></option>
                            <?php
                          }
                          ?>
                            </select>
                            
                          </div>
                         
                             <div class="row">
                        <div class="col-md-12">                       
                          <div class="form-group">
                            <label class="control-label">Harga</label>
                            <div class="">
                              <input class="form-control" type="text" name="harga" value="" required>
                            </div>
                          </div>
                         </div>
                         

                          <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-plus">Tambah</i></button>
                                <a class="btn btn-danger" href="<?php echo base_url('c_kelola_treatment/kelola_treatment')?>"><i class="fa fa-close"></i> Batal</a>
                              </div>
                            </div>                          
                        </div>                      
                      </div>                      
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
