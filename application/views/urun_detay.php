<?php
$this->load->view('_header');
$this->load->view('_sidebar');
?>
              
					    
	                      
	                            
                <section>
				<div class="col-sm-8 padding-right">			
			 	  <?php if($this->session->flashdata("mesaj")) { ?>
						     <div class="alert alert-info">
						     <p> <?=$this->session->flashdata("mesaj")?></p>
						     </div>
						   <?php } ?>
				</div>

              	<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" alt="" />
								<h3 style="background-color:#1E90FF">ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
									
									    <div class="item active">
										  <a href=""><img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" width="200" height="100" alt=""></a>
		                                </div>
										
										
									    <?php
										   foreach($resimler as $rs)
										   {  ?>
										<div class="item">
	                                        <a href=""><img src="<?=base_url()?>uploads/<?=$rs->resim?>" width="200" height="100"  ></a>
											
                                        </div>
										<?php } ?>

										
									     <?php
										   foreach($resimler as $rs)
										   {  ?>
										<div class="item">
	                                        <a href=""><img src="<?=base_url()?>uploads/<?=$rs->resim?>" Width="200" height="100"></a> 
											
                                        </div>
										<?php } ?>
										
										
									     <?php
										   foreach($resimler as $rs)
										   {  ?>
										<div class="item">
	                                        <a href=""><img src="<?=base_url()?>uploads/<?=$rs->resim?>" width="200" height="100"></a>
											
                                        </div>
										<?php } ?>
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<form method="post" action="<?=base_url()?>uye/sepete_ekle">
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?=$veri[0]->adi?></h2>
								  <input type="hidden" name="urunid" value="<?=$veri[0]->Id?>" class="span6">
                                  <img src="images/product-details/rating.png" alt="" />
								<span>
								 <span 	style="color:#000000"><?=$veri[0]->sfiyat?> TL</span>
								    <label>Adet:</label>
									<input type="number" name="miktar" value="1" class="span8" min="1" max="<?=$veri[0]->stok?>">
									<button type="submit" style="background-color:#1E90FF" class="btn btn-fefault cart" value="Sepete Ekle">
										<i class="fa fa-shopping-cart"></i>
										Sepete Ekle
									</button>
								</span>
								</form>
								<p><b>Stok Sayısı:</b> <?=$veri[0]->stok?></p>
								<p><b>Ürün Durumu:</b> <?=$veri[0]->durum?></p>
								
								
							<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
						
					</div><!--/product-details-->
					
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#genel" data-toggle="tab">Ürün Açıklaması</a></li>
								<li><a href="#öneri" data-toggle="tab">Yorum Yap</a></li>
								<li><a href="#teknik" data-toggle="tab">Ürün Yorumları</a></li>
							
							</ul>
						</div>
						
						<div class="tab-content">
							<div class="tab-pane fade" id="genel" >
			                    <h4>Genel Açıklama</h4>
								<?=$veri[0]->aciklama?>
							</div>
							

							<div class="tab-pane fade" id="öneri" >
						      
								<div class="replay-box">
									<div class="row">
										<div class="col-sm-8">
											<h2>Bize yorum bırakın</h2>
											<form method="post" action="<?=base_url()?>home/yorum_kaydet">
											<input type="hidden" name="musteri_id" value="<?=$this->session->uye_session["id"]?>"/>
											<input type="hidden" name="urun_id" value="<?=$veri[0]->Id?>"/>
												<div class="blank-arrow">
													<label>Adınız</label>
												</div>
												<span>*</span>
												<input type="text" name="adsoy" placeholder="Adınız Soyadınız...">
												
												<div class="blank-arrow">
													<label>Email </label>
												</div>
												<span>*</span>
												<input type="email" name="eposta" placeholder="Email Adresiniz...">
											<div class="text-area">
												<div class="blank-arrow">
													<label>Yorumunuz:</label>
												</div>
												<span>*</span>
												<textarea name="yorum"  rows="6"></textarea>
												 <button type="submit" class="btn btn-primary m-t-15 waves-effect">Gönder</button>
											</div>
												
											</form>
									
										</div>
									</div>
								</div><!--/Repaly Box-->
							</div>
							<div class="tab-pane fade" id="teknik" >
							    
			                    <table class="table table-condensed">
       
                                <thead>
                                <tr>
								<th>#</th>
                               
				                <th>Yorum</th>
                                <th>Tarih</th>
                                </tr>
								
				                <?php 
								$sno=0;
								foreach($yorum as $rs)
				                  { $sno++;
				                    
				                ?>
			                    <tr>
                                <td><?=$sno?></td>
                                
				                <td><?=$rs->yorum?></td>
				                <td><?=$rs->tarih?></td>
							    </tr>
				                <?php } ?>	
                                </thead>
                                </table>
								
                               
		                       
			                </div>
						</div>
					</div><!--/category-tab-->
					
					            
	                    
                </div>

			</div>
	</div>
	
	</div>
	</div>
	</div>
</div>	
<?php
$this->load->view('_footer');
?>