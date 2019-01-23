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
          	<h3><i class="fa fa-angle-right"></i> Mesaj</h3>
           
			<?php  
			if ($this->session->flashdata('mesaj'))
			{
		     ?>
			 <div class="alert alert-success alert-dismissable">
			 <button type="button" class="close" data-dismissable="true">&times;</button>
			  <?=$this->session->flashdata('mesaj');?>
			</div>
			
			<?php 
			} ?>
			
			
                <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
					  <div class="panel-heading">
					  Mesaj Detay Bilgileri
					  </div>
                          <table class="table table-striped table-advance table-hover">
	                  	         <tr>      
								  <th class="hidden-phone"><i></i> Adı Soyadı</th>
                                  <td><?=$veri[0]->adsoy?></td>
								  </tr>
								  <tr>
							      <th><i class=""></i> Email</th>
                                   <td><?=$veri[0]->email?></td>
								 </tr>
								  <tr>
								  <th><i class=""></i> Telefon</th>
								  <td><?=$veri[0]->tel?></td>
								  </tr>
								  <tr>
								  <th>Mesaj</th>
								  <td><?=$veri[0]->mesaj?></td>
								  </tr>
								  <tr>
								  <th>Tarih</th>
								  <td><?=$veri[0]->tarih?></td>
								  </tr>
								  <tr>								  
								  <th>IP</th>
								  <td><?=$veri[0]->IP?></td>
								  </tr>
								  <tr>
								  <th>Durum</th>
								  <td><?=$veri[0]->durum?></td>
								  </tr>
								  <tr>
								  <th>Detay</th>
								 
								  </tr>
								  <tr>
								  <th>Notunuz</th>
								  <td>
								  <form action="<?=base_url()?>admin/mesajlar/guncelle/<?=$veri[0]->Id?>" method="post">
								 
								 <textarea name="adminnotu"  rows=10 cols=78><?=$veri[0]->adminnotu?> </textarea>
								 <br>
								 <button type="submit"  value="GUNCELLE">GUNCELLE</button>
								 </br>
								 </form>
								 </td>
								  </tr>
                              
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
	  <?php
	  $this->load->view('admin/_footer');
	
		?>