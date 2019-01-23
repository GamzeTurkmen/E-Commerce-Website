<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
	 <?php 
	  $this->load->view('_header');
	   $this->load->view('_uyesidebar');
     
          
          	
        ?>  	
		<section id="main-content">
		<div class="span9">
			<ul class="breadcrumb">
          	<li><a href="<?=base_url()?>">Home</a> <span class="divider"></span></li>
          	<li class="active">Ödeme Sayfası </li>
			</ul>
			
	        <div class="well well-small">
			
			<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<form class="form-horizontal" method="post" action="<?=base_url()?>uye/siparis_tamamla">
						   <?php if($this->session->flashdata("mesaj")) { ?>
						     <div class="alert alert-info">
						     <p> <?=$this->session->flashdata("mesaj")?></p>
						     </div>
						   <?php } ?>
						
                    <div class="control-group">	
					Teslimat Bilgileri
					<br>
					<label class="control-label" for="inputFrame">Adınız Soyadınız</label>
       <div class="controls">
       <input type="text" name="adsoy" value="<?=$uye[0]->adsoy?>" placeholder="Adınız Soyadınız">
        </div>
         </div>
        <div class="control-group">
<label class="control-label" for="inputFrame">Telefon Numarası</label>
<div class="controls">
<input type="text" name="tel" value="<?=$uye[0]->tel?>" placeholder="Telefon Numaranız">
</div>
</div>
<div class="control-group">
<label class="control-label">Adres</label>
<div class="controls">
<input type="text" name="adres" value="<?=$uye[0]->adres?>" placeholder="Adres">
</div>
</div>
<div class="control-group">
<label class="control-label">Şehir</label>
<div class="controls">
<select name="sehir" style="width:140px" value="<?=$uye[0]->il?>">
<option value="">İl Seçin</option>
<option value="İstanbul">İstanbul</option>
<option value="Ankara">Ankara</option>
<option value="İzmir">İzmir</option>
<option value="Gaziantep">Gaziantep</option>
</select>
</div>
</div>
					
		            <div class="control-group">	
					<label class="control-label" for="inputFname">Toplam Tutar </label>
					<div class="controls">
					 <input type="text" name="toplam"  readonly value="<?=$toplam?>">
	    		    </div>
					</div>
					
					
					KREDİ KARTI BİLGİLERİ</br>
		            <div class="control-group">	
					<div class="controls">
					
					<input type="submit" name="submitAccount"  value="Siparisi Tamamla" class="exclusive shopBtn">
	    		    </div>
					</div>
					</div>
					</form>
					
					
				</div>
</div>
</div>				
					
					
					
					
					
					
					
					
					
					
					
	    		
	  
	  <?php 
	  $this->load->view('_footer');
      
          
          	
        ?> 