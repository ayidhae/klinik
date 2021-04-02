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
    </body>
    <!-- Main content -->
<main class="main">
   <ol class="breadcrumb">
      <li class="breadcrumb-item">Home</li>
      <li class="breadcrumb-item"><a href="#">Logistik</a></li>
   </ol>
   <div class="container-fluid">
      <div class="card card-accent-success">
         <div class="card-header">
          <?php
        if ($this->session->flashdata('msg')){
          echo $this->session->flashdata('msg');
        }
      ?>
      <h3 class="panel-title pull-left">
       Insert Pendapatan dan Pengeluaran
      </h3>
         </div>
         <ul class="nav navbar-right panel_toolbox">
         </ul>
         <div class="card-body">
      <form class="form-horizontal" method="post" action="<?php echo site_url('c_keuangan/addKeuangan');?>">
        <div class="form-group">
        <label class="control-label col-sm-2" for="pendapatan">pendapatan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="pendapatan" name="pendapatan" placeholder="keterangan" >
        </div>
        </div>
        <div class="form-group">
           <label class="control-label col-sm-2" for="jumlah_pendapatan">jumlah pendapatan</label>
        <div class="col-sm-10"> 
          <input type="text" class="form-control" id="jumlah_pendapatan" name="jumlah_pendapatan" placeholder="Hanya angka" >
        </div>
        </div> 
        <div class="form-group">
       <label class="control-label col-sm-2" for="pengeluaran">pengeluaran</label>
        <div class="col-sm-10"> 
          <input type="text" class="form-control" id="pengeluaran" name="pengeluaran" placeholder="keterangan" >
        </div>
        </div>
        <div class="form-group">
       <label class="control-label col-sm-2" for="jumlah_pengeluaran">jumlah pengeluaran</label>
        <div class="col-sm-10"> 
          <input type="text" class="form-control" id="jumlah_pengeluaran" name="jumlah_pengeluaran" placeholder="Hanya angka" >
        </div>
        </div>
        <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> simpan</button>
        </div>
        </div>
      </form>
      <br/>
      
<!-- dibawah untuk view daftar pesanan -->

      <table id="dataVendor" class="table ">
                <thead>
                  <tr>
                   <th class="text-center">NO</th>
                    <th class="text-center">ID</th>
                    <th class="text-center">TANGGAL</th>
                    <th class="text-center">PENDAPATAN </th>
                    <th class="text-center">PENGELUARAN</th>
                    <th class="text-right">JUMLAH</th>
                    <th class="text-right">JUMLAaH</th>
                    <th class="text-right">AKSI</th>
                   
                  </tr>
                </thead> 
                <tbody>
               
                  <?php
          if($keuangan->num_rows()>0){
            $no = 1;
            foreach ($keuangan->result() as $row) {
              echo'
              <tr>
                <td width="5%" class="text-center">'.$no++.'</td>
                <td class="text-center">'.$row->id_keuangan.'</td>
                <td class="text-center">'.$row->tanggal.'</td>
                 <td class="text-center">'.$row->pendapatan.'</td>
                     <td class="text-center">'.$row->pengeluaran.'</td>
                  <td class="text-center">'.$row->jumlah_pengeluaran.'</td>
                   <td class="text-center">'.$row->jumlah_pendapatan.'</td>
                   <td class="text-center">
                   <a href="'.site_url('c_keuangan/edit_keuangan/').'" class="btn btn-primary"> <i class="fa fa-pencil"></i> Edit </i></a>
                   <a href="'.site_url('c_keuangan/hapus_keuangan/').'" class="btn btn-primary"> <i class="fa fa-pencil"></i> Hapus </i></a>
                   </tr>';
            }
          }
          
          ?>
                </tbody>
              </table>
        
            
         </div>
     
  
      </div>
   </div>
</main>

        </div>
    </div>
</div>
</div>
