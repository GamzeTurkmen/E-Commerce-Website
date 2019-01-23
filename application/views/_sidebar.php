
<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
					   
				
								
					
						<div class="brands_products" ><!--brands_products-->
							<h2 style="color:#1E90FF">KATEGORİLER</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
								
								<?php  foreach ($kategoriler as $rs) { ?>
										<li><a  href="<?=base_url()?>Home/kategoriler/<?=$rs->Id?>"  ><span class="pull-right"><i class=""></i></span><?=$rs->adi?></a></li>
								    <?php } ?>	
							       
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2 style="color:#1E90FF">FİYAT ARALIĞI</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">TL 0</b> <b class="pull-right">TL 600</b>
							</div>
						</div><!--/price-range-->
						
						
					</div>
				</div>
			