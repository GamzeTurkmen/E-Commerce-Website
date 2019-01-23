			    <div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center" style="color:#1E90FF">YENİ ÜRÜNLER</h2>
						
						<?php
						foreach($yeni as $rs)
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
					

					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">GÜNCEL ÜRÜNLER</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
								
								    <?php
									foreach ($random as $rs)
									{?>
                                    <div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?=base_url()?>uploads/<?=$rs->resim?>" width="200" height="200" alt="" />
													<h2><?=$rs->sfiyat?>TL</h2>
													<p><?=$rs->resim?></p>
													<a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sepete Ekle</a>
												 
												</div>
												
												
											</div>
										</div>
									</div>
									<?php }?>
									
                                </div>
								
								<div class="item">	
								
                                   <?php
									foreach ($random as $rs)
									{?>
                                    <div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?=base_url()?>uploads/<?=$rs->resim?>" width="150" height="138"alt="" />
													<h2><?=$rs->sfiyat?>TL</h2>
													<p><?=$rs->resim?></p>
													<a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sepete Ekle</a>
												</div>
												
											</div>
										</div>
									</div>
									<?php }?>
									
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
		
	</div>
	