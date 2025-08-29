<?php
if($this->session->userdata('id_admin')!=null){ redirect(base_url('admin')); }
?>
<?php foreach($website->result() as $iden); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <link rel="icon" href="<?php echo base_url($iden->logo_website); ?>">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>dist/css/AdminLTE.min.css">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>dist/css/skins/_all-skins.min.css">
  <!-- Java Script -->
  <script src="<?php echo base_url('assets/'); ?>js/jquery-3.1.0.min.js"></script>
  <style>
    .bordere{
      /*border-top: 3px solid #f39c12;
      border-bottom: 3px solid #f39c12;
      border-left: 3px solid #2c3e50;
      border-right: 3px solid #2c3e50;
      border-radius: 10px;*/
    }
  </style>
   <!-- Izi Alert-->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>izi/dist/css/iziToast.min.css">
  <script type="text/javascript" src="<?php echo base_url('assets/'); ?>izi/dist/js/iziToast.min.js"></script>
  <!-- Sweet Alert css -->
  <link href="<?php echo base_url('assets/'); ?>plugins/sweet-alert/sweetalert2.min.css" rel="stylesheet" type="text/css" />
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<?php ?>
<body style="/*background-color: #1abc9c;*/background:url('<?php echo base_url('assets/dist/img/backlogin.jpeg'); ?>')
no-repeat center center fixed; background-size: cover;
 -webkit-background-size: cover; 
 -moz-background-size: cover; -o-background-size: cover;">
 <div class="row">
<div class="login-box bordere">
  <div class="login-logo">
    <h2 style="color:#fff;">Login Admin<p style="font-size: 18px;"><?php echo $iden->nama_website; ?></p></h2>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="text-center"><img src="<?php echo base_url($iden->logo_website); ?>" alt="" style="height:100px;"></p>
    <p class="login-box-msg" style="font-size:100%;">Masukkan Username dan Password</p>  
    <form method="post" id="loginform">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username" required="" autocomplete="off" autofocus="">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" required="" autocomplete="off">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
    <button type="submit" class="btn btn-primary btn-block btn-flat">Login <i class="glyphicon glyphicon-log-in"></i></button>
    </form>
    <hr>
    <p class="text-center"><b>Versi 2.1</b></p>
  </div>
  <!-- /.login-box-body -->
</div>
</div>
<script>
  $('#loginform').submit(function(e){
    var data = $("#loginform").serialize();
    $.ajax({
    type : 'POST',
    url : '<?php echo base_url('welcome/login'); ?>',
    data : data,
    cache: false, 
    success : function(response){
       if(response=="admin"){
          iziToast.show({timeout:4000,color:'green',title: 'Anda Dialihkan Ke Dashboard Admin...',position: 'topRight',pauseOnHover: true,transitionIn: false});
          setTimeout('window.location.href = "<?php echo base_url('admin') ?>";',4000);
       }
       else{
          iziToast.show({timeout:4000,color:'red',title: 'Username Atau Password Salah',position: 'topRight',pauseOnHover: true,transitionIn: false});
       }
    }
    });
    return false;
  });
</script>
<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('assets/'); ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('assets/'); ?>bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/'); ?>plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select").select2();
  });
</script>
<!-- Select2 -->
<script src="<?php echo base_url('assets/'); ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- Sweet Alert Js  -->
<script src="<?php echo base_url('assets/'); ?>plugins/sweet-alert/sweetalert2.min.js"></script>
<script>
</script>
</body>
</html>

