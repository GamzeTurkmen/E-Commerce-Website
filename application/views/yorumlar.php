<?php 
        $this->load->view('_header');
		$this->load->view('_uyesidebar');
?>   
            <div class="col-sm-9 padding-right">
				<div class="features_items"><!--features_items-->
				<h2 class="title text-center">YORUMLARIM</h2>
					<div class="span9">
                               <ul class="breadcrumb">
                               <li><a href="<?=base_url()?>">Uye</a> <span class="divider"></span></li>
	                           <li class="active">Yorumlarım</li>
                               </ul>  
	                    <div class="well well-small">
	                      
						    <div class="body table-responsive"> 
							
	                            <table class="table table-condensed">
       
                                <thead>
                                <tr>
                                <th>S.No</th>
				                <th>Tarih</th>
                                <th>Yorum</th>
                                </tr>
								
				                <?php 
								$sno=0;
								foreach($veriler as $rs)
				                  { 
				                    $sno++;
				                ?>
			                    <tr>
                                <td><?=$sno?></td>
								<td><?=$rs->tarih?></td>
				                <td><?=$rs->yorum?></td>
				         
							    </tr>
				                <?php } ?>	
                                </thead>
                                </table>
								
                               
		                       
		
                            </div>  
		                        
	                    </div>
                    </div>
						
						
			    </div><!--features_items-->
			</div>
		</div>
	</div>
</section>
 <?php 
$this->load->view('_footer');
?>