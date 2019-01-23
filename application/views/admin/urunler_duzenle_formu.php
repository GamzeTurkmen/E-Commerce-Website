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
          	<h3><i class="fa fa-angle-right"></i> Ürün Düzenleme Menüsü</h3>
			
			
			<div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Ürün Bilgilerini Giriniz
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="<?=base_url()?>admin/urunler/guncelle/<?=$veri[0]->Id?>">
                                        <div class="form-group">
                                            <label>Adı </label>
                                            <input class="form-control" type="text" name="adi" value="<?=$veri[0]->adi ?>" placeholder="Adı ">
                                            
                                        </div>
                                 
										<div class="form-group">
                                            <label >Açıklama</label>
                                            <textarea name="aciklama"  rows=10 cols=78><?=$veri[0]->aciklama?> </textarea>
                                        </div>
                                        
										<div class="form-group">
                                            <label class="col-sm-2 control-label" >Kategorisi</label>
                                            
											<div class="col-sm-15" >
											<select class="form-control" name="kategori">
											<option value="<?=$veri[0]->kategori?>"><?=$veri[0]->katadi?></option>
											 
											 <?php foreach($veriler as $rs) {?>
									         <option value="<?=$rs->Id?>"><?=$rs->adi?></option>
							                 <?php } ?>
											
											
											
											</select>  
										
                                        </div>
										</div>
										<div class="form-group">
                                            <label>A.Fiyat </label>
                                            <input class="form-control" type="text" name="afiyat" value="<?=$veri[0]->afiyat ?>" placeholder="afiyat ">
                                            
                                        </div>
										<div class="form-group">
                                            <label>S.Fiyat </label>
                                            <input class="form-control" type="text" name="sfiyat" value="<?=$veri[0]->sfiyat ?>" placeholder="sfiyat ">
                                            
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
	<script src="<?=base_url()?>assets/admin1/lib/jquery/jquery.js"></script>

                    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.10/ckeditor.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/epiceditor/0.2.2/js/epiceditor.min.js"></script>

            <!--Bootstrap -->
            <script src="<?=base_url()?>assets/admin1/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="<?=base_url()?>assets/admin1/lib/metismenu/metisMenu.js"></script>
            <!-- onoffcanvas -->
            <script src="<?=base_url()?>assets/admin1/lib/onoffcanvas/onoffcanvas.js"></script>
            <!-- Screenfull -->
            <script src="<?=base_url()?>assets/admin1/lib/screenfull/screenfull.js"></script>

                    <script src="<?=base_url()?>assets/admin1/lib/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.min.js"></script>
                    <script src="<?=base_url()?>assets/admin1/lib/pagedown-bootstrap/js/jquery.pagedown-bootstrap.combined.min.js"></script>

            <!-- Metis core scripts -->
            <script src="<?=base_url()?>assets/admin1/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="<?=base_url()?>assets/admin1/js/app.js"></script>

                <script>
                    $(function() {
						
                      CKEDITOR.replace('aciklama')
					  
					  $('.textarea').wysihtml5()
                    })
                </script>

            <script src="<?=base_url()?>assets/admin1/js/style-switcher.js"></script>