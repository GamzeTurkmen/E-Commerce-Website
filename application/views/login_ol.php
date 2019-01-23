<?php
$this->load->view('_header');

?>

    <div class="span9">
    <ul class="breadcrumb">
	  <li><a href="<?=base_url()?>">Home</a> <span class="divider"><span></li>
	  <li class="active">Üye Hesap </li>
	</ul>
	

	
    
             
            <?php if($this->session->flashdata("mesaj")) { ?>
             <div class="callout callout-info">			
	            <p><?=$this->session->flashdata("mesaj")?></p>
				</div>
			<?php } ?>
			<section id="form">
			       <div class="container">
			        <div class="row">
	    			<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h3>Üye Girişi </h3>
						<form method="post" action="<?=base_url()?>home/login_ol">
								
							<input type="email" name="email" placeholder="Email">
							<input type="password" name="sifre" placeholder="Şifre">
							<span>
								<input type="checkbox" class="checkbox">Oturumu açık tut
                            </span>
							<button type="submit" class="btn btn-default">GİRİŞ</button>
							  
						</form>
					</div><!--/login form-->
				</div>
	<div class="col-sm-1 padding-right" >
					<h2 class="or">DEĞİL</h2>
				</div>
				<div class="col-sm-4 padding-right">
					<div class="signup-form"><!--sign up form-->
						<h3>ÜYE OL</h3>
						<form class="form-horizontal"method="post" action="<?=base_url()?>home/ekle_kaydet">

		
							<input type="text" name="adsoy" placeholder="Adınız Soyadı">
							<input type="email" name="email" placeholder="Email Adresi">
							<input type="password" name="sifre" placeholder="Şifre">
							<button type="submit" class="btn btn-default">Kaydol</button>
                        </form>
 </div>
 
 </div>
 </div>
 </div>
</div>
	
</section>
</div>
	
	<?php
	$this->load->view('_footer');
	?>
	
	
	
	
	
	