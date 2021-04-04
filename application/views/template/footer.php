  <footer class="app-footer">
    <span><a href="http://be-telu.co.id/">KLINIK KECANTIKAN UTSUKUSHI</a> © 2021 </span>
  <!--   <span class="ml-auto">Powered by <a href="http://coreui.io"></a></span> -->
  </footer>

  <!-- Bootstrap and necessary plugins -->
  <script src="<?php echo base_url('asset/node_modules/jquery/dist/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('asset/node_modules/popper.js/dist/umd/popper.min.js');?>"></script>
  <script src="<?php echo base_url('asset/node_modules/bootstrap/dist/js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('asset/node_modules/pace-progress/pace.min.js');?>"></script>

  <!--  Data Tables -->
  <script src="<?php echo base_url('asset/dataTables/datatables.min.js');?>"></script>
  <script src="<?php echo base_url('asset/dataTables/DataTables-1.10.16/js/jquery.dataTables.js');?>"></script>
  

  <!-- Plugins and scripts required by all views -->
  <script src="<?php echo base_url('asset/node_modules/chart.js/dist/Chart.min.js');?>"></script>

  <!-- CoreUI main scripts -->

  <script src="<?php echo base_url('asset/js/app.js');?>"></script>

  <script>
  $(document).on("click", ".open-image", function () {
      var url = $(this).data('url');
      document.getElementById("image-container").src = url;
  });
  </script>
  </body>
</html>