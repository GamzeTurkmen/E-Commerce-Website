<?php
$this->load->view('_header');
$this->load->view('_uyesidebar');
?>
<br> <br><br>

<div class="col-sm-6 padding-left">
		<div class="container">

			<div class="table-responsive cart_info">
				<div class="col-sm-9 padding-left">
				<table class="table table-bordered">
			 <tr>
			 	 <h4>Sepetim</h4>
			 <th style="width: 10px">No</th>
			 <th>Ürün</th>
			 <th>Adı</th>
			 <th>Fiyat</th>
			 <th>Miktar</th>
			 <th>Tutar</th>
			 <th>Sil</th>
			 </tr>
			 <?php 
			 $rn=0;
			 $toplam=0;		  
		      foreach ($veriler as $rs)
				    { 
					$rn++;
					$tutar=$rs->satfiyat * $rs->adet;
					$toplam+=$tutar;
					?>	
                  
				  <tr>
			  	   <td style="width: 10px"><?=$rn?></td>
		            
					<!--<a href="<?=base_url()?>home/urundetay/<?=$rs->urun_id?>">-->
						<td>
				   <img src="<?=base_url()?>uploads/<?=$rs->urunresim?>" height="100" width="100"/></td>
			      <td><?=$rs->urunadi?></td>
			      <td><?=$rs->satfiyat?></td>
			      <td><?=$rs->adet?></td>
			     <td><?=($rs->satfiyat * $rs->adet)?>TL </td>
			     <td><a href="<?=base_url()?>uye/sepetsil/<?=$rs->Id?>" onclick="return confirm('Silinecek Emin Misin?')" class="btn btn-block btn-danger btn-xs"><i class="fa fa-remove"></i>Sil</a></td>
                  </tr>
				  <?php  } ?>
				
        </table>
          <h3>Toplam:<?=$toplam?></h3>
        <form method="post" action="<?=base_url()?>uye/satinal"	>
		
		<input type="hidden" name="toplam" value="<?=$toplam?>">
		<button type="submit" class="shopBtn" value="Sepete Ekle"> Satın Al </button>
		
		</form>
		</div>
		</div>
		</div>
		</div>
		 
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->


</div>
</div>
<br>
<br>
<?php
$this->load->view('_footer');

?>