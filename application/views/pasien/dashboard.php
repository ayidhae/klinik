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
        <a class="nav-link" href="<?php echo base_url('/c_customer/home');?>">Dashboard</a>
      </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          Welcome <?php echo $this->session->userdata('username');?>
        </a>
        <!--  <img src="" class="img-avatar" alt="Customer">
      </a> -->
      <div class="dropdown-menu dropdown-menu-right">
        
        
        <div class="dropdown-header text-center">
          <strong>Settings</strong>
        </div>
        <!-- <a class="dropdown-item" href="<?php echo base_url('c_customer/viewProfile'); ?>"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username');?>
        </a></a> -->
        <!--    <a class="dropdown-item" href="<?php echo base_url('c_pasien/updateProfile'); ?>"><i class="fa fa-wrench"></i> Settings</a> -->
        <a class="dropdown-item" href="<?php echo base_url('/c_pasien/viewProfile');?>"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username');?></a>
        <a class="dropdown-item" href="<?php echo base_url('c_pasien/keluar'); ?>"><i class="fa fa-sign-out"></i> Logout</a>
      </div>
    </li>
  </ul>
</header>
<div class="app-body">
  <div class="sidebar">
    <nav class="sidebar-nav">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/c_customer/home');?>"><i class="icon-speedometer"></i>customer Dashboard </a>
        </li>
        <li class="nav-title">
          Menu
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" <?php echo base_url('/c_customer/home');?> "><i class="fa fa-home"></i> Home</a>
          
        
          
          
      <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
    <!-- Main content -->
    <main class="main">
      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href=" <?php echo base_url('/c_pasien/home');?> "> Home</a></li>
        <li class="breadcrumb-item"><a href="#"> Halaman Pasien</a></li>
        
        <!-- Breadcrumb Menu-->
      </ol>
      
     <!--  
      <div class="container-fluid">
        <H1>Data Barang</H1>
        <body>
          <div class="row">
            <?php foreach($barang as $detail): ?>
            <div class="col-sm-3 col-md-3">
              <div class="card">
                <div class="card-header">
                  <h3> <?=$detail->namabarang?></h3>
                </div>
                <div class="card-body">
                  <img src="<?php echo base_url('asset/img/barang/').$detail->gambar; ?>" alt="menu" style="height: 200px; width: 200px;">
                  <div>
                    <p> <?=$detail->jenis ?> </p>
                    <p> <?=$detail->spesifikasi_barang ?> </p>
                    <p> <?=$detail->harga_but ?> </p>
                  
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </body>
      </div>
      
    </main>
  </div> -->
  
  <!-- /.conainer-fluid -->
</main>
</div>
<!--Start of Tawk.to Script-->
<!--  <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ac440b44b401e45400e5212/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script> -->
<!--End of Tawk.to Script-->
</body>
</body>
</div>