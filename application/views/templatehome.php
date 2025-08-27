<?php foreach($website->result() as $iden); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="keywords" content="<?php echo $iden->nama_website; ?>"/>
<meta name="description" content="<?php echo $iden->nama_website; ?>"/>
<meta name="copyright" content="<?php echo $iden->nama_website; ?>">
<meta name="language" content="Indonesia">
<meta name="robots" content="index,follow" />
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Copyright" content="<?php echo $iden->nama_website; ?>" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="revisit-after" content="7" />
<meta name="webcrawlers" content="all" />
<meta name="rating" content="general" />
<meta name="spiders" content="all" />
<meta itemprop="name" content="<?php echo $iden->nama_website; ?>" />
<meta itemprop="description" content="<?php echo $iden->nama_website; ?>" />
<meta property="og:title" content="<?php echo $ogtitle; ?>">
<meta property="og:description" content="<?php echo $ogdescription; ?>">
<meta property="og:image" content="<?php echo $ogimage; ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title><?php echo $title; ?></title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/home'); ?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/home'); ?>/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/home'); ?>/css/edua-icons.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/home'); ?>/css/animate.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/home'); ?>/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/home'); ?>/css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/home'); ?>/css/cubeportfolio.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/home'); ?>/css/settings.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/home'); ?>/css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/home'); ?>/css/style.css">



<link rel="icon" href="<?php echo base_url($iden->logo_website); ?>">
  <!-- Java Script -->
  <script src="<?php echo base_url('assets/'); ?>js/jquery-3.1.0.min.js"></script>
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Sweet Alert css -->
  <link href="<?php echo base_url('assets/'); ?>plugins/sweet-alert/sweetalert2.min.css" rel="stylesheet" type="text/css" />
  <!-- Izi Alert-->
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>izi/dist/css/iziToast.min.css">
  <script type="text/javascript" src="<?php echo base_url('assets/'); ?>izi/dist/js/iziToast.min.js"></script>
  <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5d09dc39bac9570012973e14&product=inline-share-buttons' async='async'></script>
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
<!--Loader-->
<div class="loader">
  <div class="bouncybox">
      <div class="bouncy"></div>
    </div>
</div>

<!--Header-->
<header>
  <nav class="navbar navbar-default navbar-sticky bootsnav">
    <div class="container"> 
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="#">
        <img src="<?php echo base_url($iden->logo_menu); ?>" class="logo logo-scrolled" alt="" style="width:220px;height:45px;">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOut">
          <?php foreach($menu->result() as $menuhead){ 
            if($menuhead->onoff!='off'){
            $submenu= $this->Msubmenu->submenudarimenu($menuhead->id_menu);
            if($submenu->num_rows() > 0){
              echo '
              <li class="dropdown">
                <a href="'.$menuhead->link_menu.'" class="dropdown-toggle" data-toggle="dropdown" >'.$menuhead->nama_menu.'</a>
                <ul class="dropdown-menu">';
                  foreach($submenu->result() as $sub){
                    echo '<li><a href="'.$sub->link_submenu.'">'.$sub->nama_submenu.'</a></li>';
                  }
                echo '
                </ul>
              </li>';
            }
            else {
              echo '<li><a href="'.$menuhead->link_menu.'">'.$menuhead->nama_menu.'</a></li>';
            }
          }}
          ?>
        </ul>
      </div>
    </div>   
  </nav>
</header>

<!--Search-->
<?php echo "<!-- TemplateHome Loaded -->"; ?>

<div id="search">
  <button type="button" class="close">X</button>
  <form>
    <input type="search" value="" placeholder="Search here...."  required/>
    <button type="submit" class="btn btn_common blue">Search</button>
  </form>
</div>
<!-- Content -->
<?php echo $_content; ?>

<!--FOOTER-->
<footer class="padding-top" style="background-color:#2c3e50;">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 footer_panel bottom25">
        <h3 class="heading bottom25">Kegiatan Lain Kami<span class="divider-left"></span></h3>
        <p>Cari tahu kegiatan kami yang lain di media sosial dan youtube.</p>
        <ul class="social_icon top25">
          <li><a href="<?php echo $iden->facebook; ?>" class="facebook"><i class="fa fa-facebook"></i></a></li>
          <li><a href="<?php echo $iden->twitter; ?>" class="twitter"><i class="icon-twitter4"></i></a></li>
          <li><a href="<?php echo $iden->youtube; ?>" class="youtube"><i class="icon-youtube"></i></a></li>
          <li><a href="<?php echo $iden->instagram; ?>" class="instagram"><i class="icon-instagram"></i></a></li>
        </ul>
      </div>
      <div class="col-md-4 col-sm-4 footer_panel bottom25">
        <h3 class="heading bottom25">Link Terkait<span class="divider-left"></span></h3>
        <ul class="links">
          <?php foreach($linkterkait->result() as $linkter){ ?>
          <li><a href="<?php echo $linkter->link_linkterkait; ?>"><i class="icon-chevron-small-right"></i><?php echo $linkter->nama_linkterkait; ?></a></li>
          <?php } ?>
        </ul>
      </div>
      <div class="col-md-4 col-sm-4 footer_panel bottom25">
        <h3 class="heading bottom25">Akses Cepat <span class="divider-left"></span></h3>
        <p class=" address"><i class="icon-map-pin"></i><?php echo $iden->alamat_desa; ?></p>
        <p class=" address"><i class="icon-phone"></i><?php echo $iden->tlp_desa; ?></p>
        <p class=" address"><i class="icon-mail"></i><a href="mailto:<?php echo $iden->email_desa; ?>"><?php echo $iden->email_desa; ?></a></p>
      </div>
    </div>
  </div>
</footer>
<div class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <p>Copyright &copy; <?php echo date('Y'); ?> <a href="#."><?php echo $iden->nama_website; ?></a>. all rights reserved.</p>
      </div>
    </div>
  </div>
</div>
<!--FOOTER ends-->



<script src="<?php echo base_url('assets/home'); ?>/js/jquery-2.2.3.js"></script>
<script src="<?php echo base_url('assets/home'); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/home'); ?>/js/bootsnav.js"></script>
<script src="<?php echo base_url('assets/home'); ?>/js/jquery.appear.js"></script>
<script src="<?php echo base_url('assets/home'); ?>/js/jquery-countTo.js"></script>
<script src="<?php echo base_url('assets/home'); ?>/js/jquery.parallax-1.1.3.js"></script>
<script src="<?php echo base_url('assets/home'); ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url('assets/home'); ?>/js/jquery.cubeportfolio.min.js"></script>
<script src="<?php echo base_url('assets/home'); ?>/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url('assets/home'); ?>/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo base_url('assets/home'); ?>/js/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo base_url('assets/home'); ?>/js/revolution.extension.navigation.min.js"></script>
<script src="<?php echo base_url('assets/home'); ?>/js/revolution.extension.parallax.min.js"></script>
<script src="<?php echo base_url('assets/home'); ?>/js/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo base_url('assets/home'); ?>/js/revolution.extension.video.min.js"></script>
<script src="<?php echo base_url('assets/home'); ?>/js/wow.min.js"></script>
<script src="<?php echo base_url('assets/home'); ?>/js/functions.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url('assets/'); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url('assets/'); ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Sweet Alert Js  -->
<script src="<?php echo base_url('assets/'); ?>plugins/sweet-alert/sweetalert2.min.js"></script>

</body>
</html>
