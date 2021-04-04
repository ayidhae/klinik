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
        <li class="breadcrumb-item active">kelola pemesanan</li>

        <!-- Breadcrumb Menu-->
      </ol>
      <div class="container-fluid">
        <div class="card card-accent-success">
          <div class="card-header">
            <h3>  Kelola Pemesanan  </h3>
             <a href="<?php echo base_url('c_user/inputUser')?>" class="btn btn-sm btn-success pull-right"><i class="fa fa-plus"> </i> tambah data </a>
          </div>
          <div class="card-body">
            
            <div>
              
              <table id="dataCustomer" class="table ">
                <thead>
                  <tr>
                     <th>No</th>
                    <th>Nama</th>
                     <th>hak_akses</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>No hp</th>
                    <th>action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $customer_user = json_decode(json_encode($user), true);                  
                  $no = 0;
                  foreach($customer_user as $user):
                  $no++;
                  ?>
                  
                  <tr>
                    <td><?php  echo $no; ?></td>
                    <td><?php  echo $user['nama']; ?></td>
                        <td><?php  echo $user['hak_akses']; ?></td>
                    <td><?php echo $user['username'];?></td> 
                       <td><?php echo $user['password'];?></td>   
                         <td><?php echo $user['no_hp'];?></td>                                       
                    <td>  
                       
                        <a href="<?php echo base_url('/c_user/edit_user/'.$user['username']);?>" class="btn btn-primary"> <i class="fa fa-pencil"></i> Edit</a>

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
</body>
</div>