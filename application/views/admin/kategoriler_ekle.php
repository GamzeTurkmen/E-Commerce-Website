<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
	  <?php
	  $this->load->view('admin\_header');
		$this->load->view('admin\_sidebar');
		?>
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Ürün Ekleme</h3>
			
			
			<div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Ürün Bilgilerini Giriniz
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="<?=base_url()?>admin/urunler/ekle_kaydet">
                                        <div class="form-group">
                                            <label>Ürün Adı</label>
                                            <input class="form-control" type="text" name="adi" placeholder="Adı">
                                            
                                        </div>
                                 <div class="form-group">
                                            <label>Kodu</label>
                                            <input class="form-control" name="kodu" type="text" placeholder="Kodu">
                                            
                                        </div>
                                            <div class="form-group">
                                            <label>Türü</label>
											<input class="form-control" type="text" name="turu" placeholder="Türü">
                                        </div>
										<div class="form-group">
                                            <label>Kategori</label>
                                            <select class="form-control" name="kategori">
											<option>AKILLI YAŞAM</option>
											<option>BEYAZ EŞYA</option>
											<option>BILGISAYAR/TABLET</option>
											<option>ELEKTRIKLI EV ALETLERI</option>
											<option>FOTO & KAMERA</option>
											<option>KLIMA & ISITICI</option>
											<option>OYUN&OYUN KONSOLLARI</option>
											<option>TELEFON</option>
											<option>TV</option>
											<option>YAZICILAR/TARAYICILAR</option>
											</select>
								       	 </div>								
                                        <div class="form-group">
                                            <label>Alış Fiyatı</label>
                                            <input class="form-control" name="adres" type="text" placeholder="Adres">
                                        </div>
										<div class="form-group">
                                            <label >Şehir</label>
                                            
											<div class="col-sm-15" >
											<select class="form-control" name="sehir">
											<option>Ankara</option>
											<option>İstanbul</option>
											<option>Gaziantep</option>
											<option>Karabük</option>
											<option>Bolu</option>
											</select>  
										
                                        </div>
										</div>
										
										
                                        </div>
										<div class="form-group">
                                            <label>Durum</label>
                                            
											<div class="col-sm-15" >
											<select class="form-control"name="durum">
											<option>Aktif</option>
											<option>Pasif</option>
											
											</select>  
										</div>
                                        </div>
										<div class="box-footer">
                                        <button type="submit" class="btn btn-default">Vazgeç </button>
										<button type="submit" class="btn btn-info pull-right">Kaydet </button>
										</div>

                                    </form>
                            </div>
                        </div>
                            </div>

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
	  <?php
	  $this->load->view('admin\_footer');
	
		?>