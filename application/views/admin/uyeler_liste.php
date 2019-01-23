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
          	<h3><i class="fa fa-angle-right"></i> ÜYE LİSTESİ</h3>
			
			<p  class="text-green"> <?=$this->session->flashdata("mesaj")?></p>
			
                <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><a href="<?=base_url()?>admin/uyeler/ekle" class="btn btn-theme02"> <i class="fa fa-plus-square"></i>Üye Ekle</h4></a><?=$this->session->flashdata("mesaj") ?>
	                  	  	  
                             
                              <tr>
                                  <th><i class=""></i> No</th>
                                  <th class=""><i class=""></i> Adı Soyadı</th>
                                  <th><i class=""></i> Email</th>
                                  <th><i class=""></i> Telefon</th>
								  <th>Şehir</th>
								  <th>Yetki</th>
								  <th>Durum</th>
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
                                  <td class=""><i class=""></i> <?=$rs->adsoy ?></td>
                                  <td><i class=""></i> <?=$rs->email ?></td>
                                  <td><i class="hidden-phone"></i> <?=$rs->tel ?></td>
								  <td><?=$rs->sehir ?></td>
								  <td><?=$rs->yetki?></td>
								  <td><?=$rs->durum?></td>
								  <td><a href="<?=base_url()?>admin/uyeler/duzenle/<?=$rs->Id?>" class="btn btn-primary"><i class="glyphicon glyphicon-search">Düzenle</i></a></td>
								  <td><a href="<?=base_url()?>admin/uyeler/sil/<?=$rs->Id?>" class="btn btn-danger" onclick="return confirm('Silmek istediğinize emin misiniz?')"><i class="glyphicon glyphicon-home">Sil </i></a></td>
								  
							
								  
								  
								  
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