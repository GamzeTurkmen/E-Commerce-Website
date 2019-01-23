
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
						
						
						   <?php
						    $say=0;
							$aktf=null;
							foreach($kampanya as $rs)
							{ $say++;
							   if ($say==1)
								   $aktf="active";
							   else
								   $aktf=null;
							?>
						
                            <div class="item <?=$aktf?>">
								<div class="col-sm-6">
									<h1><span>TURKMEN</span>-GROUP</h1>
									<h2><?=$rs->adi?></h2>
									<p><span><?=$rs->sfiyat?>TL</span> </p>
									<button type="button" style="background-color:#7FFFD4" class="btn btn-default get">İNCELE</button>
								</div>
								<div class="col-sm-6">
								     <a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>">
									<img src="<?=base_url()?>uploads/<?=$rs->resim?>" width="300" height="350" class="girl img-responsive" alt="" /></a>
									
								</div>
							</div>
							
							<?php }?>
							
							
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
		
