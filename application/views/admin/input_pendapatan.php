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
                <a class="nav-link" href="<?php echo base_url('/c_pendapatan/viewPendapatan');?>"><i class="fa fa-share"></i> Pendapatan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/c_pengeluaran/viewPengeluaran');?>" > <i class="fa fa-inbox"></i> Pengeluaran</a> <!-- elsa -->
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
        <li class="breadcrumb-item active">Pendapatan</li>
        <!-- Breadcrumb Menu-->
      </ol>  
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5> </i> Tambah Pendapatan </h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-9">              
              
                <div class="panel-body">
                  <div class="form-horizontal">
                    <form action="<?php echo base_url(). 'c_pendapatan/addPendapatan'; ?>" enctype="multipart/form-data" method="post">
                      <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
                      <div class="row">
                        <div class="col-md-6">                       
                          <div class="form-group">
                            <label class="control-label">Kode</label>
                            <div class="">
                              <input class="form-control" type="text" name="kode" value="" required>
                            </div>
                            <div class="row">
                        <div class="col-md-12">                       
                          <div class="form-group">
                            <label class="control-label">Tanggal</label>
                            <div class="">
                              <input class="form-control" type="date" name="tgl" value="" required>
                            </div>
                          </div>
                          <div class="row">
                        <div class="col-md-12">                       
                          <div class="form-group">
                            <label class="control-label">Keterangan</label>
                            <div class="">
                              <input class="form-control" type="text" name="keterangan" value="" required>
                            </div>
                          </div>
                      <div class="col-md-12">                       
                          <div class="form-group">
                            <label class="control-label">Jumlah</label>
                            <div class="">
                              <input class="form-control" type="number" name="jlh" value="" required>
                            </div>
                          </div>
                            <!-- <div class="panel-body">
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Form Tambah Data</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" method="POST">
                                                <div class="form-group">
                                                    <label>Kode</label>
                                                    <input class="form-control" name="kode" placeholder="Input Kode" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Tanggal</label>
                                                    <input class="form-control" type="date" name="tgl" />
                                                </div>
                                                <div>
                                                    <label>Keterangan</label>
                                                    <textarea class="form-control" rows="3" name="ket"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Jumlah</label>
                                                    <input class="form-control" type="number" name="jml" />
                                                </div> -->
                                        </div>
                                        <div class="modal-footer">
                                        <a class="btn btn-danger" href="<?php echo base_url('c_pendapatan/viewPendapatan')?>"><i class="fa fa-close"></i> Batal</a>
                                            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="panel-body">
                                <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">Form Ubah Data</h4>
                                            </div>
                                            <div class="modal-body" id="modal_edit">
                                                <form role="form" method="POST">
                                                    <div class="form-group">
                                                        <label>Kode</label>
                                                        <input class="form-control" name="kode" placeholder="Input Kode" id="kode" readonly />
                                                    </div>
                                                    <div>
                                                        <label>Keterangan</label>
                                                        <textarea class="form-control" rows="3" name="ket" id="ket"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tanggal</label>
                                                        <input class="form-control" type="date" name="tgl" id="tgl" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jumlah</label>
                                                        <input class="form-control" type="number" name="jml" id="jml" />
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                <button type="submit" name="ubah" class="btn btn-primary">Simpan</button>
                                                </form> -->

                                                <!-- <?php 
                    if(isset($_POST['simpan'])) {
                        $kode = $_POST['kode'];
                        $Tanggal = $_POST['tgl'];
                        $Keterangan = $_POST['ket'];
                        $Jumlah = $_POST['jml'];

                        $sql = mysqli_query($pendapatan, "INSERT INTO administrasi (kode, keterangan, tgl, jumlah, jenis, keluar) VALUES ('$Kode', '$Keterangan', '$Tanggal', '$Jumlah', 'masuk', 0)");

                        if($sql) {

                            echo "
                                <script>
                                alert('Data Berhasil Ditambahkan');
                                document.location.href = '';
                                </script>";   
                        }
                    }
                ?> -->
                         

                          <!-- <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-plus">Tambah</i></button>
                                <a class="btn btn-danger" href="<?php echo base_url('c_user/kelola_user')?>"><i class="fa fa-close"></i> Batal</a>
                              </div> -->
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
