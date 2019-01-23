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
		  <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
		  <li><a href="#">Siparişler</a></li>
		  <li>Sipariş Listesi</li>
		  </ol>		
                <div class="">
                    
                         <h4>Sipariş Listesi </h4>
						 </div>						 
						 <br>
						 <div class="box-body">
						   <table class="table table-bordered">	
       <br>
			 <tr>
			 <th style="">Nr</th>
			 
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
					$rs++;
					$toplam+=$rs->tutar;
					?>
					
             <tr>
			 <td style="width: 10px"><?=$rn?></td>
			 <td><?=$rs->adi?></td>
			 <td><?=$rs->fiyat?>TL</td>
			 <td><?=$rs->adet?></td>
			 <td><?=$rs->tutar?>TL</td>
			 <td><a href="#" onclick="return confirm('İptal Edilecek Emin Misiniz?')" class="btn btn-block btn-danger btn-xs"><i class="fa fa-remove"></i>İptal</a></td>
			
			 </tr> 		
                    <?php
					}
					?>	
					</table>
					<br>
					Sipariş Toplamı : <?=$toplam?> TL
	                </br>
         </div>    
        <form method="post" action="<?=base_url()?>admin/siparisler/guncelle/<?=$siparisid?>">
		<br>
		
		İşlem:
		<select name="siparisdurumu" class="form-control">
		<option><?=$veri[0]->siparisdurumu?></option>
		<option>onaylandi</option>
		<option>Iptal</option>
		<option>kargoda</option>
		<option>tamamlandi</option>
		</select>
		Açıklama :
		<textarea  class="form-control" name="aciklama" rows=5 cols=100 ><?=$veri[0]->aciklama?></textarea>
		
		<button type="submit" class="shopBtn" value=""> GUNCELLE </button>
		
		</form>  	   
	                  	  	  
                             
        							
					</div>
					</div>
				</div>
		
