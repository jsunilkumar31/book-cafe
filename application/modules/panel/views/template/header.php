<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $page_title; ?> | <?= $settings->title; ?></title>
  <link rel="icon" href="<?= base_url(); ?>assets/theme/uploads/logos/favicons/<?= $settings->favicon;?>" type="image/gif" sizes="16x16">

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
    <link href="<?= base_url();?>assets/theme/bower_components/select2/dist/css/select2.min.css" rel="stylesheet" />
  
  <link rel="stylesheet" href="<?= base_url();?>assets/theme/bower_components/bootstrap/dist/css/bootstrap.min.css">
  
  <?php if ($settings->toggle_rtl) { ?>
      <link rel="stylesheet" href="<?= base_url();?>assets/theme/bootstrap/css/bootstrap-rtl.css" rel="stylesheet" />
      <link rel="stylesheet" href="<?= base_url();?>assets/theme/dist/css/rtl.css">
  <?php } ?>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url();?>assets/theme/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url();?>assets/theme/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/theme/dist/css/custom.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/theme/plugins/iCheck/square/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?= base_url();?>assets/theme/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <!-- <link rel="stylesheet" href="<?= base_url();?>assets/theme/bower_components/jvectormap/jquery-jvectormap-1.2.2.css"> -->
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?= base_url();?>assets/theme/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url();?>assets/theme/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?= base_url();?>assets/theme/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/theme/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- <link rel="stylesheet" href="<?= base_url(); ?>assets/theme/bower_components/select2/select2.min.css"> -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  
 <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  




<!-- jQuery 2.2.3 -->
<script src="<?= base_url();?>assets/theme/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url(); ?>assets/theme/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>

<script src="<?= base_url(); ?>assets/theme/bower_components/jquery-ui/ui/position.js"></script>
<script type="text/javascript">
  baseUrl = "<?= base_url();?>";
  issue_conf = "<?= $settings->issue_conf; ?>";
</script>

<!-- DataTables -->

<script src="<?= base_url();?>assets/theme/dist/js/core.js"></script>
<script src="<?= base_url();?>assets/theme/bower_components/datatables.net/js/jquery.dataTables.js"></script>
<script src="<?= base_url();?>assets/theme/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- <script src="<?= base_url();?>assets/theme/bower_components/datatables/dataTables.bootstrap.min.js"></script> -->
<!-- <script src="<?= base_url();?>assets/theme/bower_components/select2/select2.min.js"></script> -->
<script src="<?= base_url();?>assets/theme/bower_components/select2/dist/js/select2.min.js"></script>
<script src='<?= base_url();?>assets/theme/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

<script src="<?= base_url();?>assets/theme/bower_components/morris.js/morris.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="<?= $body_class; ?>">
<!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Content will be loaded here from "remote.php" file -->
            </div>
        </div>
    </div>