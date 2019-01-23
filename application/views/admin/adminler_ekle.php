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
          	<h3><i class="fa fa-angle-right"></i> Admin Ekleme</h3>
			
			
			<div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Admin Bilgilerini Giriniz
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="<?=base_url()?>admin/uyeler/admin_ekle">
                                        <div class="form-group">
                                            <label>Adı Soyadı</label>
                                            <input class="form-control" type="text" name="adsoy" placeholder="Adı Soyadı">
                                            
                                        </div>
                                 <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" type="email" placeholder="Email">
                                            
                                        </div>
                                            <div class="form-group">
                                            <label>Şifre</label>
											<input class="form-control" type="password" name="sifre" placeholder="Şifre">
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
										
										<div class="form-group">
                                            <label>Yetki</label>
                                           
											<div class="col-sm-15" >
											<select class="form-control" name="yetki" >
											<option>admin</option>
											
										
											</select>  
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