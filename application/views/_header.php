<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title><?=$sayfa?><?=$veri[0]->adi?></title>
    
	<meta name="author" content="">
    <title>Home | GAMZE </title>
    <link href="<?=base_url()?>assets/admin2/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/admin2/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/admin2/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/admin2/css/price-range.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/admin2/css/animate.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/admin2/css/main.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/admin2/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?=base_url()?>/assets/admin2/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>assets/admin2/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>assets/admin2/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>assets/admin2/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>assets/admin2/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->


	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="<?=base_url()?>home/iletisim">İletişim</a></li>
							    <li><a href="<?=base_url()?>home/bize_yazin">Bize Yazın</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="" alt="" /></a>
						</div>
						
					</div>
					
					<div class="col-sm-8">
					
						
						<div class="shop-menu pull-right" >
							    
								<ul class="nav pull-right">
							     <?php
					            if($this->session->userdata("uye_session"))
					             { ?>
				              <li class="dropdown">
							  <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-lock"></i>
							  <?=$this->session->uye_session["adsoy"]?> <b class="caret"> </b></a>
							 
								<div class="dropdown-menu">
								<li><a href="<?=base_url()?>uye/hesabim"><i class="fa fa-user"></i> Hesap Bilgileri</a></li>
								<li><a href="<?=base_url()?>uye/sepetim"><i class="fa fa-star"></i> Sepetim</a></li>
								<li><a href="<?=base_url()?>uye/siparisler"><i class="fa fa-crosshairs"></i> Siparişlerim</a></li>
								<li><a href="<?=base_url()?>uye/cikis"><i class="fa fa-shopping-cart"></i>Çıkış</a></li>
					           
							   </li>
							   <?php  } 
							    else 
							      { ?>
							 
								
					          <li class="dropdown">
								
								<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Login<b class="caret"></b></a>
								<div class="dropdown-menu">
								<a href="<?=base_url()?>home/yeni_uye"> <label class="checkbox">Yeni Üye Kaydı</label></a>
								<a href="<?=base_url()?>uye/sifremi_unuttum"><label class="checkbox">Şifremi Unuttum</label></a>
								
								<form class="form-horizontal loginFrm" method="post" action="<?=base_url()?>home/login">
								<div class="control-group">
								  <input type="email" class="span2" name="eposta" id="inputEmail" placeholder="Email">
								  </div>
								<div class="control-group">
								  <input type="password" class="span2" name="sifre" id="inputPassword" placeholder="Password">
								  </div>
								<div class="control-group">
								  <label class="checkbox">
								  <input type="checkbox">Beni Hatırla
								  </label>
								  <button type="submit" class="shopBtn btn-block">Login Ol </button>
								  </div>
								  </form>
								  </div>
								  </li>
								  
							   <?php }
							   ?>
								  
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
							<?php
							 $anasayfa=null;
							 $hakkimizda=null;
							 $iletisim=null;
							 $bize_yazin=null;
							 
							 if ($menu=="anasayfa");
							         $anasayfa="active";
						     if ($menu=="hakkimizda");
							         $hakkimizda="active";
						     if ($menu=="iletisim");
							         $iletisim="active";
							 if ($menu=="bize_yazin");
							         $bize_yazin="active";
                             if ($menu=="uye");
							         $uye="active";
							 if ($menu=="sepetim");
							         $sepetim="active";
							 
							?>
								<li class="<?=$anasayfa?>"><a href="<?=base_url()?>" class="<?=$anasayfa?>">Anasayfa</a></li>
								<li class="<?=$hakkimizda?>"><a href="<?=base_url()?>home/hakkimizda">Hakkımızda</a></li>
								
								<li class="" ><a href="#">Kategoriler<i class="fa fa-angle-down"></i></a>
							    <ul  role="menu" class="sub-menu">
								<li><?php  foreach ($kategoriler as $rs) { ?>
									<a  href="<?=base_url()?>Home/kategoriler/<?=$rs->Id?>"><br><?=$rs->adi?></a>
								    <?php } ?></li>
									</ul>
								</li>
								<li><a href="<?=base_url()?>home/iletisim">İletişim</a></li>
								 <li><a href="<?=base_url()?>home/bize_yazin">Bize Yazın</a></li>
								
								
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	

	