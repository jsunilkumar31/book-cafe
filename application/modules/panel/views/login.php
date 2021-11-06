<?php if (isset($_SESSION['message'])) { ?>
    <?= $_SESSION['message']; ?>
<?php } ?>
<style>
@media (min-width: 768px){
  .col-md-5 {
      max-width: 47% !important;
  }
  
  .col-md-1 {
      max-width: 1% !important;
  }
}
</style>


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/front-theme/css/bootstrap.min.css">
<!-- Typography CSS -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/front-theme/css/typography.css">
<!-- Style CSS -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/front-theme/css/style.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/front-theme/css/responsive.css">

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script type="text/javascript">
    baseUrl = "<?= base_url(); ?>";
    issue_conf = "<?= $settings->issue_conf; ?>";
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-B63ZVZ84N6"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-B63ZVZ84N6');
</script>




<div class="main">
  <div class="col-md-6">
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
            <div class="col-xs-12" style="margin-top: 10px;">
                <a href="<?php echo base_url("new-member");?>"class="btn btn-primary btn-block btn-flat">Become a Member</a>
            </div>
            <!-- /.col -->
          </div>
          <?php echo form_close();?>  
      </div>
      <!-- /.login-box-body -->
    </div>
  <!-- /.login-box -->
  </div>
  <!-- creator Darshan ----
  --- new registration form starts-->
    <div class="col-md-1" style="border-left: 2px solid grey;height: 500px;margin-top: 80px;"></div>
    <div class="col-md-5" style="margin-top: 80px;">
      <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <marquee><p>Currently we are available in Bangalore only.</p></marquee>
            </div>
        </div>
        <section class="vertical-center-4 slider slideritems d-none d-sm-block">
          <a href="">
              <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe1.jpg">
          </a>
          <a href="">
              <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe2.jpg">
          </a>
          <a href="">
              <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe3.jpg">
          </a>
          <a href="">
              <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe4.jpg">
          </a>
          <a href="">
              <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe5.jpg">
          </a>
          <a href="">
              <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe6.jpg">
          </a>
          <a href="">
              <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe7.jpg">
          </a>
          <a href="">
              <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe8.jpg">
          </a>
          <a href="">
              <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe9.jpg">
          </a>
          <a href="">
              <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe10.jpg">
          </a>
        </section>
        <section class="vertical-center-4 slider slideritems d-block d-sm-none">
          <a href="">
              <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe_mini1.jpg" class="p-3 m-2" style="max-width:240px;">
          </a>
          <a href="">
              <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe_mini2.jpg" class="p-3 m-2" style="max-width:240px;">
          </a>
          <a href="">
              <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe_mini3.jpg" class="p-3 m-2" style="max-width:240px;">
          </a>
          <a href="">
              <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe_mini4.jpg" class="p-3 m-2" style="max-width:240px;">
          </a>
          <a href="">
              <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe_mini5.jpg" class="p-3 m-2" style="max-width:240px;">
          </a>
          <a href="">
              <img src="https://bookscafe.co.in/assets/front-theme/images/new_realeases/BooksCafe_mini6.jpg" class="p-3 m-2" style="max-width:240px;">
          </a>
        </section>
        <div class="row" style="text-align: center;">
            <div class="col-lg-12">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="<?= base_url('privacy-policy') ?>">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="<?= base_url('terms-of-service') ?>">Terms of Use</a></li>
                    <li class="list-inline-item"><a href="<?= base_url('damage-policy') ?>">Damage Policy</a></li>
                </ul>
            </div>
            <div class="col-lg-12">
                Copyright <?= date('Y') ?> <a href="<?= base_url() ?>"><?= $settings->title; ?></a> All Rights Reserved.
            </div>
        </div>
      </div>
    </div>
    <!--new registration form ends -->
  </div>
  </div>
</div>
  
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?=base_url();?>assets/front-theme/js/jquery.min.js"></script>
<script src="<?=base_url();?>assets/front-theme/js/bootstrap.min.js"></script>
<script src="<?=base_url();?>assets/front-theme/js/jquery.counterup.min.js"></script>
<!-- Slick JavaScript -->
<script src="<?=base_url();?>assets/front-theme/js/slick.min.js"></script>
<!-- Select2 JavaScript -->
<script src="<?=base_url();?>assets/front-theme/js/select2.min.js"></script>
<!-- Magnific Popup JavaScript -->
<script src="<?=base_url();?>assets/front-theme/js/jquery.magnific-popup.min.js"></script>
<!-- Custom JavaScript -->
<script src="<?=base_url();?>assets/front-theme/js/custom.js"></script>