<?php if (isset($_SESSION['message'])) { ?>
    <?= $_SESSION['message']; ?>
<?php } ?>
<div class="main">
<div class="col-md-12">
<div class="login-box">
  <div class="login-logo">
      <a href="<?php echo base_url(); ;?>">
        <img src="<?= base_url(); ?>assets/uploads/logos/<?= $settings->logo; ?>" style="max-width: 160px;">
      </a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"><?= lang('login_title_subheading'); ?></p>

    <?php 
          echo form_open('panel/login'); 
      ?>
      <div class="form-group has-feedback">
          <input type="text" placeholder="<?= lang('login_email'); ?>" name="identity" id="identity" class="form-control">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
            <input type="password" placeholder="<?= lang('login_password'); ?>" name="password" id="password" class="form-control">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
             <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?><?= lang('remember_me'); ?>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          
        </div>
        <div class="col-xs-6">
            <button type="submit" class="btn btn-primary btn-block btn-flat"><?= lang('login_in'); ?></button>
        </div>
        <div class="col-xs-6">
            <a href="<?php echo base_url();?>"class="btn btn-primary btn-block btn-flat">Home Page</a>
        </div>
        <!-- /.col -->
      </div>
      <?php echo form_close();?>  
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
</div>

</div>
    

<script src="<?= base_url();?>assets/theme/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
