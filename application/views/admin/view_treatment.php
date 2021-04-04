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
        <li class="breadcrumb-item active">kelola treatment</li>

        <!-- Breadcrumb Menu-->
      </ol>
      <div class="container-fluid">
        <div class="card card-accent-success">
          <div class="card-header">
            <h3>  Kelola Treatment </h3>
             <a href="<?php echo base_url('c_kelola_treatment/inputTreatment')?>" class="btn btn-sm btn-success pull-right"><i class="fa fa-plus"> </i> tambah data </a>
          </div>
          <div class="card-body">
            
            <div>
              
              <table id="dataCustomer" class="table ">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Treatment</th>
                    <th>Kategor</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $treatment = json_decode(json_encode($treatment), true);                  
                  $no = 0;
                  foreach($treatment as $data):
                  $no++;
                  ?>
                  
                  <tr>
                    <td><?php  echo $no; ?></td>
                    <td><?php  echo $data['nama_treatment']; ?></td>
                    <td><?php echo $data['nama_kategori_treatment'];?></td> 
                    <td><?php echo $data['harga'];?></td> 
                         <td>
                         <a href="<?php echo base_url('/c_kelola_treatment/editTreatment/'.$data['id']);?>" class="btn btn-primary"> <i class="fa fa-pencil"></i> Edit</a>
                         <a href="<?php echo base_url('/c_kelola_treatment/deleteTreatment/'.$data['id']);?>" class="btn btn-danger"> <i class="fa fa-pencil"></i> Delete</a>
                         </td>
                       
                       
                  </tr>
                  <?php
                  endforeach;
                  ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    
              
             
        
</main>
</div>
</body>
          </div>
        </body>
      </div>
      
    </main>
  </div>
  
  <!-- /.conainer-fluid
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