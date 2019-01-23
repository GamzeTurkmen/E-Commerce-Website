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
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
											</select>
								       	 </div>								
                                        <div class="form-group">
                                            <label>Alış Fiyatı</label>
                                            <input class="form-control" name="adres" type="text" placeholder="Alış">
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
	  $this->load->view('admin/_footer');
	
		?>