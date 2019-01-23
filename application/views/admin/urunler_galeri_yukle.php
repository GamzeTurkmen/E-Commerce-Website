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
          	<h2><i class="fa fa-angle-right"></i> Ürün Resim Galerisi Ekleme</h2>
			
			
			
               <div class="box box-info">
                    <div class="box-header with-border">
					
                      <h3 class="box-title">   Yüklenecek Resmi Seçiniz...</h3>
						   </div>
						   
						   <?php if($this->session->flashdata("mesaj")) { ?>
						   <div class="alert alert-info">
						   <p> <?=$this->session->flashdata("mesaj")?></p>
						   </div>
						   <?php } ?>
                        </div>
                             
                            <form class="form-horizontal" method="post" enctype="multipart/form-data"  action="<?=base_url()?>admin/urunler/galeri_kaydet/<?=$id?>">
							            <div class="box-body">
                                        <div class="form-group">
										<div class="col-sm-10">
                                            
                                            <input type="file"  name="resim" required class="form-control" placeholder="Yüklemek için gözat" >
                                         </div>   
                                        </div>
										</div>
                            
										<div class="box-footer">
                                        
										<button type="submit" class="btn btn-info pull-right">Resmi Yükle </button>
										</div>

                                    </form>
									<?php foreach($veriler as $rs) {?>
									<img src="<?=base_url()?>uploads/<?=$rs->resim?>" height="100">
									<a href="<?=base_url()?>admin/urunler/galeri_sil<?=$id?>/<?=$rs->Id?>" onclick="return confirm('Silinecek Emin Misin?')" > Sil </a>
									
									
                                    <?php } ?>
									</div>
                                   
						  </section>
                        

		
      
	  <?php
	  $this->load->view('admin/_footer');
	
		?>