<?php 
	  $this->load->view('_header');
	    $this->load->view('_sidebar');
     
          
          	
        ?>  

			    <div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">ÜRÜNLER</h2>
						
						<?php
						foreach($veriler as $rs)
						{ ?>
						
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										
											<img src="<?=base_url()?>uploads/<?=$rs->resim?>" width="100" height="100" alt="" />
											<h2><?=$rs->sfiyat?>TL</h2>
											<p><?=$rs->adi?></p>
											<a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sepete Ekle</a>
										
										<div class="product-overlay">
											<div class="overlay-content">
												<h2><?=$rs->sfiyat?>TL</h2>
												<p><?=$rs->adi?></p>
												<a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sepete Ekle</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						<?php } ?>
						
					</div><!--features_items-->
					

					
					
				</div>
			</div>
		</div>
		
	</div>
	  <?php 
	  $this->load->view('_footer');
      
          
          	
        ?> 
	