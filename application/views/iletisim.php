
	 <?php 
	  $this->load->view('_header');
	  $this->load->view('_sidebar');
    ?>  	
		<section id="main-content">
		<div class="span9">
			<ul class="breadcrumb">
          	<li><a href="<?=base_url()?>">Home</a> <span class="divider"></span></li>
          	<li class="active">İletişim </li>
			</ul>
			
	        <div class="well well-small">
			<h3>İletişim Bilgileri</h3>
			
            <p> <?=$veri[0]->iletisim?></p>
			
		</section>	
        </div>
		
		<div>
		</div>
		
		</div>	
	
      
	  <?php 
	  $this->load->view('_footer');
      
       ?> 