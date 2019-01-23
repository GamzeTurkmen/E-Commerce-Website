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
          	<h3><i class="fa fa-angle-right"></i> YORUMLAR</h3>
			
			<p  class="text-green"> <?=$this->session->flashdata("mesaj")?></p>
			
                <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><a href="<?=base_url()?>admin/yorumlar" class="btn btn-theme02"> <i class="fa fa-plus-square"></i>Üye Ekle</h4></a><?=$this->session->flashdata("mesaj") ?>
	                  	  	  
                             
                              <tr>
                                  <th><i class=""></i> No</th>
                                  <th class=""><i class=""></i> Adı Soyadı</th>
                                  <th><i class=""></i> Email</th>
								   <th><i class=""></i> Yorum</th>
                                   
								  <th>Durum</th>
								  <th><i class=""></i> Detay</th>
								  <th>Düzenle</th>
								  <th>Sil</th>
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
                                  <td><i class=""></i> <?=$rs->yorum ?></td>
								  <td><?=$rs->durum?></td>
								  <td><a href="<?=base_url()?>admin/yorumlar/detay/<?=$rs->Id?>" class="btn btn-primary"><i class="glyphicon glyphicon-search">Detay</i></a></td>
								  <td><a href="<?=base_url()?>admin/yorumlar/duzenle/<?=$rs->Id?>" class="btn btn-primary"><i class="glyphicon glyphicon-search">Düzenle</i></a></td>
								  <td><a href="<?=base_url()?>admin/yorumlar/sil/<?=$rs->Id?>" class="btn btn-danger" onclick="return confirm('Silmek istediğinize emin misiniz?')"><i class="glyphicon glyphicon-home">Sil </i></a></td>
								  
							
								  
								  
								  
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