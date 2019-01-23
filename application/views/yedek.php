<?php
$this->load->view('_header');
$this->load->view('_sidebar');
?>
</div>
<section id="main-content">
		<div class="span9">
			<ul class="breadcrumb">
			<li><a href="<?=base_url()?>"> Home</a><span class="divider">/</span></li>
			
			<li class="active">Sepetim </li>
		    </ul>
	         <div class="well well-small">
			<?php  
			if ($this->session->flashdata('mesaj'))
			{
		     ?>
			 <div class="callout callout-info">
		
			<p> <?=$this->session->flashdata('mesaj');?></p>
			</div>
			
			<?php 
			} ?>
			<table class="table table-bordered">
			 <tr>
			 <th style="width: 10px">Nr</th>
			 <th>Date</th>
			 <th>Adı</th>
			 <th>Tutar</th>
			 <th>Durumu</th>
			 <th>Detay</th>
			
			 </tr>
			 <?php 
			 $rn=0;
			 		  
		      foreach ($veriler as $rs)
				    { 
					$rn++;
					
					?>	
                  
				  <tr>
			  	   <td style="width: 10px"><?=$rn?></td>
			      <td><?=$rs->tarih?></td>
			      <td><?=$rs->adsoy?></td>
			      <td><?=$rs->tutar?></td>
			     <td><?=$rs->sehir?></td>
			     <td>
				 <?php if($rs->siparisdurumu=="kargoda")
				 {
				 ?>
				<a href="<?=$rs->kargo?>" targer="_blank" class="btn btn-block btn-success btn-xs">
				 Kargo Takip</a> 
				 <?php
				 } ?>
				 <?=$rs->siparisdurumu?>
				 </td>
				 <td><a href="<?base_url()?>uye/siparisdetay/<?=$rs->Id?>" class="btn btn-block btn-success btn-xs"><i class="fa fa-remove"></i>
				 Detay</a></td>
                  </tr>
				  <?php  } ?>
				


           </div>
		
		</div>
		</div>
		</section>
		<?php
		$this->load->view('_footer');
		?>