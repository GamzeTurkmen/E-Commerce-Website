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
          	<h3><i class="fa fa-angle-right"></i> Ürün Resim Ekleme</h3>
			
			
			<div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                    <div class="panel-heading">
                           <h3 class="box-title">Yüklenecek Resmi Seçiniz...</h3>
						   </div>
						   
						   <?php if($this->session->flashdata("mesaj")) { ?>
						   <div class="callout callout-warning">
						   <h4>Hata!!</h4>
						   <p> <?=$this->session->flashdata("mesaj")?></p>
						   </div>
						   <?php } ?>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" enctype="multipart/form-data"  action="<?=base_url()?>admin/urunler/resim_kaydet/<?=$id?>">
                                        <div class="form-group">
                                            
                                            <input  type="file"  name="resim" required class="form-control" placeholder="Yükleme için gözat">
                                            
                                        </div>
                            
										<div class="box-footer">
                                        
										<button type="submit" class="btn btn-info pull-right">Resmi Yükle </button>
										</div>

                                    </form>
									<img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" height="100" width="200">
									
                            </div>
                        </div>
                            </div>

		</section>
      </section><!-- /MAIN CONTENT -->
	  <?php
	  $this->load->view('admin/_footer');
	
		?>