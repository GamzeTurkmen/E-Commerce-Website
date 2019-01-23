
	 <?php 
	  $this->load->view('_header');
	 
      ?> 
	  <div class="span9">
			<ul class="breadcrumb">
          	<li><a href="<?=base_url()?>">Home</a> <span class="divider">/</span></li>
          	<li class="active">Üye Hesap </li>
			</ul>
			</div>
      <?php 
	  $this->load->view('_uyesidebar');
      ?> 
		<section>
		
			
	        <div class="well well-small">
			
			<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
					
					<form class="form-horizontal" method="post" action="<?=base_url()?>uye/uye_guncelle/<?=$uye[0]->Id?>"> 
					<h2 class="title text-center">Üye Hesap Bilgileri</h2>
						   <?php if($this->session->flashdata("mesaj")) { ?>
						     <div class="callout callout-info">
						     <p> <?=$this->session->flashdata("mesaj")?></p>
						     </div>
						   <?php } ?>
	    				<div class="control-group">
				              <label class="control-label" for="inputFname">Adı Soyadı <sup>*</sup></label>
				              <div class="controls">
							  <input type="text" name="adsoy" value="<?=$uye[0]->adsoy?>" placeholder="Adınız Soyadınız ">
				            </div>
							
						<div class="control-group">
				              <label class="control-label" for="inputLname">Telefon<sup>*</sup></label>
				              <div class="controls">
							  <input type="text" name="tel" value="<?=$uye[0]->tel?>" placeholder="Telefon Numarası ">
				            </div>
							
						<div class="control-group">
				              <label class="control-label" for="inputEmail">Email <sup>*</sup></label>
				              <div class="controls">
							  <input type="text" name="email" value="<?=$uye[0]->email?>" placeholder="Email ">
				            </div>	
						
						<div class="control-group">
				              <label class="control-label" >Şifre <sup>*</sup></label>
				              <div class="controls">
							  <input type="password" name="sifre" value="<?=$uye[0]->sifre?>" placeholder="Şifre ">
				            </div>	
						
						<div class="control-group">
				              <label class="control-label" >Adres <sup>*</sup></label>
				              <div class="controls">
							  <input type="text" name="adres" value="<?=$uye[0]->adres?>" placeholder="adres ">
				            </div>	
						
						<div class="control-group">
				              <label class="control-label" >Şehir <sup>*</sup></label>
				              <div class="controls">
							  <input type="text" name="sehir" value="<?=$uye[0]->sehir?>" placeholder="Şehir ">
				            </div>	
						
						<div class="control-group">
				             
				              <div class="controls">
							  <input type="submit" name="submitAccount" value="BİLGİLERİ GUNCELLE" placeholder="exclusive shopBtn ">
				            </div>	
						 </div>
						</div>
						
						</form>
				</section>	
						
</div>
</div>
</div>    
</div>
</section>
	  
	  <?php 
	  $this->load->view('_footer');
      
      ?> 