<!--Header
<header>
  <nav class="navbar navbar-default navbar-fixed white bootsnav pushy">
    <div class="container"> 
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="#"><img src="<?php echo base_url($iden->logo_menu); ?>" alt="logo" class="logo logo-display" style="width:180px;height:40px;">
        <img src="<?php echo base_url($iden->logo_menu); ?>" class="logo logo-scrolled" alt="" style="width:180px;height:40px;">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOut">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Home</a>
            <ul class="dropdown-menu">
              <li><a href="index.html">Home 01</a></li>
              <li><a href="index2.html">Home 02</a></li>
              <li><a href="index3.html">Home 03</a></li>
              <li><a href="index4.html">Home 04</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>   
  </nav>
</header>-->

<!--Header-->
<header>
  <nav class="navbar navbar-default navbar-sticky bootsnav pushy">
    <div class="container"> 
      <div id="menu_bars" class="right" data-target="#navbar-menu">
        <span class="t1"></span>
        <span class="t2"></span>
        <span class="t3"></span>
      </div>
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="#">
        <img src="<?php echo base_url($iden->logo_menu); ?>" class="logo" alt="" style="width:180px;height:40px;">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOut">
          <?php foreach($menu->result() as $menuhead){ 
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
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>
</header>
