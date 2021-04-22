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
          <li class="nav-item nav-dropdown"> 
          <a class="nav-link nav-dropdown-toggle" href="<?php echo base_url('/c_keuangan/inputKeuangan');?>"><i class="fa fa-file"></i>Keuangan</a>          
            <ul class="nav-dropdown-items">   
             
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
        <li class="breadcrumb-item active">input pasien</li>

        <!-- Breadcrumb Menu-->
      </ol>
        
            <!-- /.conainer-fluid -->
<?php foreach($keuangan as $detail): ?>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
           <h3 class="panel-title pull-left">Edit Keuangan</h3>
            <a href="<?php echo site_url('/c_keuangan/inputKeuangan');?>" class="btn btn-sm btn-success pull-right"><i class="fa fa-reply"></i> Kembali</a>       
        </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-9">
                <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>        
                <div class="panel-body">
                  <div class="form-horizontal">
                    <form action="<?php echo base_url(). 'c_keuangan/update_keuangan/'.$detail->id_keuangan; ?>" method="post">
                      <div class="row">
                       

                   <div class="col-md-10">                       

                        <div class="col-md-10">                       

                          <div class="form-group">
                            <label class="control-label">pendapatan</label>
                            <div class="">
                              <input class="form-control" type="text" name="pendapatan" value="<?php echo $detail->pendapatan ;?>" >
                            </div>
                          </div>
                          
                           <div class="col-md-10">                       
                          <div class="form-group">

                            <label class="control-label">jumlah pendapatan</label>
                            <div class="">
                              <input class="form-control" type="text" name="nama" value="<?php echo $detail->jumlah_pendapatan ;?>" >
                            </div>
                          </div>
                           
                          </div>
                            <div class="col-md-10">                       
                          <div class="form-group">
                            <label class="control-label">Pengeluaran</label>
                            <div class="">
                              <input class="form-control" type="text" name="pengeluaran" value="<?php echo $detail->pengeluaran ;?>" >
                            </div>
                          </div>
                          </div>
                               </div>
                            <div class="col-md-10">                       
                          <div class="form-group">
                            <label class="control-label">Jumlah Pengeluaran</label>
                            <div class="">
                              <input class="form-control" type="text" name="jumlah_pengeluaran" value="<?php echo $detail->jumlah_pengeluaran ;?>" >
                            </div>
                          </div>
                          </div>
                            <!-- <div class="col-md-10">                       
                          <div class="form-group">
                             <label class="control-label">contact</label>
                            <div class="">
                              <input class="form-control" type="text" name="contact" value="<?php echo $detail->contact ;?>" >
                            </div>
                          </div>
                               <div class="col-md-16">                       
                          <div class="form-group">
                            <label class="control-label">email</label>

                            <label class="control-label">pendapatan</label>

                            <div class="">
                              <input class="form-control" type="text" name="pendapatan" value="<?php echo $detail->pendapatan ;?>" >
                              
                            </div>
                          </div>
                          <div class="col-md-14">                       
                          <div class="form-group">
                             <label class="control-label">jumlah pendapatan</label>
                            <div class="">
                              <input class="form-control" type="" id="jumlah_pendapatan" name="jumlah_pendapatan" value="<?php echo $detail->jumlah_pendapatan ;?>" >

                            
                            </div>
                          </div>
                     <div class="col-md-14">                       
                          <div class="form-group">
                            <label class="control-label">pengeluaran</label>
                            <div class="">
                              <input class="form-control" type="text" name="pengeluaran" value="<?php echo $detail->pengeluaran ;?>" >
                            </div>
                          </div>
                          
                           <div class="col-md-14">                       
                          <div class="form-group">
                            <label class="control-label">jumlah pengeluaran</label>
                            <div class="">
                              <input class="form-control" type="" id="jumlah_pengeluaran" name="jumlah_pengeluaran" value="<?php echo $detail->jumlah_pengeluaran ;?>" >
                              
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label">Status</label>
                            <div>
                            <?php if ($detail->status=='aktif') {?>
                              <label class="radio-inline"><input type="radio" name="status" checked="<?= $detail->status=='aktif'?'checked':'';?>" value="aktif"> Aktif</input></label>
                              <label class="radio-inline"><input type="radio" name="status"  value="tidak aktif">Tidak Aktif</input></label>
                            <?php } else { ?>
                              <label class="radio-inline"><input type="radio" name="status"  value="aktif">Aktif</input></label>
                              <label class="radio-inline"><input type="radio" name="status" checked="<?= $detail->status=='aktif'?'checked':'';?>" value="tidak aktif"> Tidak Aktif</input></label>                    
                            <?php } ?>                                                    
                            </div>
                          </div> --> 
                    

                          <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> edit</button>
                                <a class="btn btn-danger" href="<?php echo base_url('c_keuangan/inputKeuangan')?>"><i class="fa fa-close"></i> Batal</a>
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
</div>
</div>