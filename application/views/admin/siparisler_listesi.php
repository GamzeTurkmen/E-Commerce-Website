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
		  
		  <ol class="breadcrumb">
		  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		  <li><a href="#">Siparisler</a></li>
		  <li><a href="#">Siparis Listesi</a></li>
		  </ol>
		  
		  
		  
		  
			
			
               
                  <div class="col-lg-12">
                         <div>
                         <h3>Siparis Listesi </h3>
						 </div>
						 
						 <div class="box-body">
						   <table class="table table-bordered">
						     
	                  	   
	                  	  	  
                             
                              <tr>
							      <th style="width: 10px">Nr</th>
								  
                                  <th>Tarih</th>
								  <th>Adı</th>
								  <th>Tutar</th>
								  <th>Şehir</th>
								  <th>Durum</th>
								  <th>Detay</th>
								  
                              </tr>
                              
							  <?php
							  $rn=0;
							  foreach($veriler as $rs)
							  {  $rn++;
							  ?>
                                <tr>
                                  <td style="width: 10px"><?=$rn?></td>
                                  <td> <?=$rs->tarih?></td>
                                  <td> <?=$rs->adsoy?></td>
                                  <td> <?=$rs->tutar?>TL</td>
								  <td><?=$rs->sehir ?></td>
								  <td><?=$rs->siparisdurumu ?></td>
								   <td><a href="<?=base_url()?>admin/siparisler/siparisdetay/<?=$rs->Id?>" class="btn btn-block btn-success btn-xs"><i class="fa fa-remove"></i>Detay</a></td>
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