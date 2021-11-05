 </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> <?= $settings->version; ?>
    </div>
    <strong>Copyright &copy; <?= date('Y',time()); ?> <?= $settings->title; ?>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
 
</div>
<!-- ./wrapper -->
<script src="<?= base_url();?>assets/theme/plugins/iCheck/icheck.min.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
    $(":input").keypress(function(event){
        if (event.which == '10' || event.which == '13') {
            event.preventDefault();
        }
    });
  });
</script>

<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url();?>assets/theme/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?= base_url();?>assets/theme/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?= base_url();?>assets/theme/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?= base_url();?>assets/theme/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?= base_url();?>assets/theme/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<!-- <script src="<?= base_url();?>assets/theme/bower_components/fastclick/fastclick.js"></script> -->
<!-- AdminLTE App -->
<script src="<?= base_url();?>assets/theme/dist/js/adminlte.min.js"></script>
<script src="<?= base_url();?>assets/theme/dist/js/demo.js"></script>
<script>
    $("#example1").DataTable();
</script>
</body>
</html>