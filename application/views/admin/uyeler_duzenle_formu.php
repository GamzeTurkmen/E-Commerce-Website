<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
	  <?php
	  $this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		?>
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Üye Düzenleme Menüsü</h3>
			
			
			<div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Üye Bilgilerini Giriniz
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="<?=base_url()?>admin/uyeler/guncelle/<?=$veri[0]->Id?>">
                                        <div class="form-group">
                                            <label>Adı Soyadı</label>
                                            <input class="form-control" type="text" name="adsoy" value="<?=$veri[0]->adsoy ?>" placeholder="Adı Soyadı">
                                            
                                        </div>
                                 <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" value="<?=$veri[0]->email?>" name="email" type="email" placeholder="Email">
                                            
                                        </div>
                                            <div class="form-group">
                                            <label>Password</label>
											<input class="form-control" value="<?=$veri[0]->sifre?>"type="password" name="sifre" placeholder="Şifre">
                                        </div>
										<div class="form-group">
                                            <label>Telefon</label>
                                            <input class="form-control" name="tel" value="<?=$veri[0]->tel?>" type="text" placeholder="Telefon">
                                        </div>
                                        <div class="form-group">
                                            <label>Adres</label>
                                            <input class="form-control" name="adres" value="<?=$veri[0]->adres?>" type="text" placeholder="Adres">
                                        </div>
										<div class="form-group">
                                            <label >Şehir</label>
                                            
											<div class="col-sm-15" >
											<select class="form-control" name="sehir">
											<option><?=$veri[0]->sehir?></option>
											<option>Ankara</option>
											<option>İstanbul</option>
											<option>Gaziantep</option>
											<option>Karabük</option>
											<option>Bolu</option>
											</select>  
										
                                        </div>
										</div>
										
										<div class="form-group">
                                            <label>Yetki</label>
                                           
											<div class="col-sm-15" >
											<select class="form-control" name="yetki" >
											<option><?=$veri[0]->yetki?></option>
											<option>uye</option>
											<option>satici</option>
											<option>yorumcu</option>
											<option>yazar</option>
										
											</select>  
										</div>
                                        </div>
										<div class="form-group">
                                            <label>Durum</label>
                                            
											<div class="col-sm-15" >
											<select class="form-control"name="durum">
											<option><?=$veri[0]->durum?></option>
											<option>Aktif</option>
											<option>Pasif</option>
											
											</select>  
										</div>
                                        </div>
										<div class="box-footer">
                                        
										<button type="submit" class="btn btn-info pull-right">Güncelle </button>
										</div>

                                    </form>
                            </div>
                        </div>
                            </div>

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
	  <?php
	  $this->load->view('admin/_footer');
	
		?>