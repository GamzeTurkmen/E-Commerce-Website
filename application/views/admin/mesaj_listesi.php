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
          	<h3><i class="fa fa-angle-right"></i> Mesajlar</h3>
			
			<p  class="text-green"> <?=$this->session->flashdata("mesaj")?></p>
			
                <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><a href="<?=base_url()?>admin/mesajlar/ekle" class="btn btn-theme02"> <i class="fa fa-plus-square"></i>Kullanıcı Ekle </h4></a><?=$this->session->flashdata("mesaj") ?>
	                  	  	  
                             
                              <tr>
                                  
                                <th>Adı Soyadı</th>
								<th>Email</th>
								<th>Telefon</th>
								<th>Mesaj</th>
								<th>IP</th>
								<th>Tarih</th>
							    <th>Durum</th>
								<th>Detay</th>
								<th>Sil</th>
								 
							  </tr>
							 <?php
							 foreach ($veriler as $rs )
							 {
							?>
							<tr>
							<td><?=$rs->adsoy?></td>
							<td><?=$rs->email?></td>
							<td><?=$rs->tel?></td>
							<td><?=$rs->mesaj?></td>
							<td><?=$rs->IP?></td>
							<td><?=$rs->tarih?></td>
							<td><?=$rs->durum?></td>
                            <td><a href="<?=base_url()?>admin/mesajlar/detay/<?=$rs->Id?>"><i>Detay</i></td>
							 <td><a href="<?=base_url()?>admin/mesajlar/sil/<?=$rs->Id?>"><i>Sil<i></td>
                           <?php
							 }
							 ?>
						  </table>
						 
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
	  <?php
	  $this->load->view('admin/_footer');
	
		?>