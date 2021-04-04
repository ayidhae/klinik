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
            <a class="nav-link" href=""><i class="fa fa-home"></i> Kelola Treatment</a>
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
        <li class="breadcrumb-item active">Edit User</li>
        <!-- Breadcrumb Menu-->
      </ol>
      <!-- /.conainer-fluid -->
<?php foreach($user as $detail): ?>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
           <h3 class="panel-title pull-left">Edit User</h3>
            <a href="<?php echo site_url('/c_user/kelola_user');?>" class="btn btn-sm btn-success pull-right"><i class="fa fa-reply"></i> Kembali</a>       
        </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-9">
                <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>        
                <div class="panel-body">
                  <div class="form-horizontal">
                    <form action="<?php echo base_url(). 'c_user/update_user/'.$detail->username; ?>" method="post">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="control-label">Nama</label>
                            <div class="">
                              <input class="form-control" type="text" name="nama" value="<?php echo $detail->nama ;?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="sel1" >Hak akses</label>
                            <select name="hak_akses" class="form-control" id="sel1" value="<?php echo $detail->hak_akses ;?>">
                            <option value="admin">admin</option>
                            <option value="manajer">Manajer</option>
                            <option value="dokter">dokter</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label class="control-label">Username</label>
                            <div class="">
                              <input class="form-control" type="text" name="username" value="<?php echo $detail->username ;?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label">Password</label>
                            <div class="">
                              <input class="form-control" type="text" name="password" value="<?php echo $detail->password ;?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label">no hp</label>
                            <div class="">
                              <input class="form-control" type="text" name="no_hp" value="<?php echo $detail->no_hp 
                              ;?>">
                            </div>
                          </div>
                          
                          
                         
                           <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                             <a href=""><button class="btn btn-primary"> <i class="fa fa-pencil">Simpan</i></button></a>
                              <a href="<?php echo base_url('c_admin/kelola_user')?>" class="btn btn-danger"> Batal </a>
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