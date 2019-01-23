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
          	<h3><i class="fa fa-angle-right"></i> Ürünler Listesi</h3>
			
			<p  class="text-green"> <?=$this->session->flashdata("mesaj")?></p>
			
                <div class="row mt">
                  <div class="col-md-25">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><a href="<?=base_url()?>admin/Urunler/urun_ekle" class="btn btn-theme02"> <i class="fa fa-plus-square"></i>Yeni Ürün Ekle</h4></a><?=$this->session->flashdata("mesaj") ?>
	                  	  	  
                             
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Id</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Adı</th>
                                  <th><i class="fa fa-bookmark"></i> Kategori</th>
                                  <th><i class=" fa fa-edit"></i> A.Fiyat</th>
								  <th>S.Fiyat</th>
								  <th>Resim</th>
								  <th>Galeri</th>
								  <th>Durum</th>
								  <th>Düzelt</th>
								  <th>Sil</th>
                              </tr>
                              
							  <?php
							  $rn=0;
							  foreach($veriler as $rs)
							  { 
							  $rn++;
							  ?>
                                <tr>
                                  <td style="width: 10px"> <?=$rn?></td>
                                  <td> <?=$rs->adi?></td>
                                  <td> <?=$rs->katadi?></td>
                                  <td> <?=$rs->afiyat ?></td>
								  <td><?=$rs->sfiyat ?></td>
								  <td>
								  <?php if($rs->resim){ ?>
								  <a href="<?=base_url()?>admin/urunler/resim_yukle/<?=$rs->Id?>" ><img src="<?=base_url()?>uploads/<?=$rs->resim?>" height="30"></a>
								  
								  <?php } else { ?>
								  <a href="<?=base_url()?>admin/urunler/resim_yukle/<?=$rs->Id?>" class="btn btn-block btn-success btn-xs">Resim Yükle</a>
								  <?php } ?>
								 </td>
								 
								  <td>
								   <a href="<?=base_url()?>admin/urunler/galeri_yukle/<?=$rs->Id?>" class="btn btn-block btn-success btn-xs">Galeri Yükle</a>
								  </td>
								  <td><?=$rs->durum?></td>
								  <td><a href="<?=base_url()?>admin/urunler/duzenle/<?=$rs->Id?>" class="btn btn-block btn-info btn-xs"><i class="fa fa-edit"></i>Düzenle</a></td>
								  <td><a href="<?=base_url()?>admin/urunler/sil/<?=$rs->Id?>" class="btn btn-block btn-danger btn-xs" onclick="return confirm('Silmek istediğinize emin misiniz?')"><i class="fa fa-remove">Sil </i></a></td>
								  
							
								  
								  
								  
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