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
					  YORUM DETAY BİLGİLERİ
					  </div>
                          <table class="table table-striped table-advance table-hover">
	                  	         <form method="post" action="<?=base_url()?>admin/yorumlar/durum_guncelle/<?=$veri[0]->Id?>">    
								 
								  <div class="form-group">
								  <th>Durum</th>
								  <td><?=$veri[0]->durum?></td>
								  <option>Okundu</option>
								  </tr>
								  
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