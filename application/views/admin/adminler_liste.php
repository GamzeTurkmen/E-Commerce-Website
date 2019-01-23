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
          	<h3><i class="fa fa-angle-right"></i> ADMİNLER LİSTESİ</h3>
			

			
                <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><a href="<?=base_url()?>admin/uyeler/ad_ekle" class="btn btn-theme02"> <i class="fa fa-plus-square"></i>Admin Ekle</h4></a><?=$this->session->flashdata("mesaj") ?>
	                  	  	  
                             
                              <tr>
                                  <th><i class=""></i> No</th>
                                  <th class=""><i class=""></i> Adı Soyadı</th>
                                  <th><i class=""></i> Email</th>
                                 <th>Şifre</th>  
								  <th>Yetki</th>
								  <th>Durum</th>
								
								  
                              </tr>
                              
							  <?php
							  $sno=0;
							  foreach($veriler as $rs)
							  { $sno++;
							  ?>
                                <tr>
                                  <td><i class=""></i> <?=$sno?></td>
                                  <td class="hidden-phone"><i class=""></i> <?=$rs->adsoy ?></td>
                                  <td><i class=""></i> <?=$rs->email ?></td>
                                  
								  <td><?=$rs->sifre ?></td>
								  <td><?=$rs->yetki?></td>
								  <td><?=$rs->durum?></td>
								  
								  
								  
							
								  
								  
								  
                              </tr>
							  <?php } ?>
                              
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
	  <?php
	  $this->load->view('admin/_footer');
	
		?>