  <?php 
		$this->load->view('_header');
		
	?>
	<div class="span9">
			<ul class="breadcrumb">
			<li><a href="#"> Home</a><span class="divider">/</span></li>
			<li><a href="#"> Siparişler</a><span class="divider"></span></li>
		    </ul>
		<?php 
		
		$this->load->view('_uyesidebar');
	?>

  <section id="main-content">
        <section class="wrapper">
		<?php 
 if($this->session->flashdata("mesaj"))
 {?>
	
                  <button data-dismiss="alert" class="close close-sm" type="button">
                                      <i class="icon-remove"></i>
                                  </button>
                   <?=$this->session->flashdata("mesaj")?>
                
<?php 
 }?>
 
 <div class="col-lg-9">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">Numara</th>
					<th>Tarih</th>
                    <th>Adı</th>
                    <th>Tutar</th>
                    <th>Şehir</th>
					<th>Durumu</th>
					<th>Detay</th>
					<th>Sil</th>
					</tr>
                </thead>
                <tbody>
				<?php 
				$rn=0;
				foreach($veriler as $rs)
				{
					$rn++;
					?>
                  <tr>
                    <td style="width: 10px"><?=$rn?></td>
                    <td><?=$rs->tarih?></td>
                    <td><?=$rs->adsoy?></td>
					<td><?=$rs->tutar?>TL</td>
					<td><?=$rs->sehir?></td>
					<td>
					<?php if($rs->siparisdurumu=="kargoda")
					{?>
				       <a href="<?=$rs->kargo?>" target="_blank" class="btn btn-success btn-xs" >Kargo Takip </a>
					<?php }?>
					<?=$rs->siparisdurumu?>
					</td>
					
					<td> <a href="<?=base_url()?>Uye/siparisdetay/<?=$rs->Id?>" class="btn btn-success btn-xs"> <span class="fa fa-edit"> </span> Detay <a/>
                  <td><a href="<?=base_url()?>uye/siparissiil/<?=$rs->Id?>" onclick="return confirm('İptal Edilecek Emin Misiniz?')" class="btn btn-block btn-danger btn-xs"><i class="fa fa-remove"></i>İptal</a></td>
				  </tr>
             <?php 
				}
				?>
                </tbody>
              </table>
           
          </div>
      </div>
</div>
	</div>
	</div>
	</div>
<?php 
	  $this->load->view('_footer');
	
	?>
			