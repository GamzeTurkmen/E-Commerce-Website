<?php
$this->load->view('_header');
$this->load->view('_uyesidebar');
?>
  <section id="main-content">
        <section class="wrapper">
		<div class="span9">
			<ul class="breadcrumb">
			<li><a href="#"> Home</a><span class="divider"></span></li>
			<li><a href="#"> Ürün</a><span class="divider"></span></li>
			<li class="active">Detay </li>
		    </ul>
	         <div class="col-lg-9">
			
				
				
			
			<table class="table table-bordered">
			 <tr>
			 <th style="width: 10px">Nr</th>
			 <th>Adı</th>
			 <th>Fiyat</th>
			 <th>Miktar</th>
			 <th>Tutar</th>
			 <th>İptal</th>
			 </tr>
			 <?php 
			 $rn=0;
			 $toplam=0;		  
		      foreach ($veriler as $rs)
				    { 
					$rn++;
					$toplam+=$rs->tutar;
					?>
					
             <tr>
			 <td style="width: 10px"><?=$rn?></td>
			 <td><?=$rs->adi?></td>
			 <td><?=$rs->adet?></td>
			 <td><?=$rs->fiyat?>TL</td>
			 
			 <td><?=$rs->tutar?>TL</td>
			 <td><a href="<?=base_url()?>uye/siparissil/<?=$rs->Id?>" onclick="return confirm('İptal Edilecek Emin Misiniz?')" class="btn btn-block btn-danger btn-xs"><i class="fa fa-remove"></i>İptal</a></td>
			
			 </tr> 
				 
				 
				
		
                    <?php
					}
					?>	
					Sipariş Toplamı : <?=$toplam?>TL				
							</table>
					</div>
					</div>
				</div>
				</div>
				</div>
<?php
$this->load->view('_footer');
?>