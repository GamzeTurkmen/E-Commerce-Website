<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
	 <?php 
	  $this->load->view('_header');
	         	
        ?>  
<section id="main-content">
		<div class="span9">
			<ul class="breadcrumb">
          	<li><a href="<?=base_url()?>">Home</a> <span class="divider"></span></li>
          	<li class="active">Bize Yazınız </li>
			</ul>
			</div>
<?php 
	  
	    $this->load->view('_uyesidebar');       	
        ?>		
		
			
	        <div class="well well-small">
			
			<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Bize Yazın</h2>
						   <?php if($this->session->flashdata("mesaj")) { ?>
						     <div class="alert alert-info">
						     <p> <?=$this->session->flashdata("mesaj")?></p>
						     </div>
						   <?php } ?>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="<?=base_url()?>home/mesaj_kaydet">
				            <div class="form-group col-md-6">
				              <input type="text" name="adsoy" class="form-control" required="required" placeholder="Adınız Soyadınız ">
				            </div>
							<div class="form-group col-md-6">
				               <input type="text" name="tel" class="form-control" required="required" placeholder="Telefon No">
				            </div>
				            <div class="form-group col-md-12">
				              <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				            <input type="text" name="subject" class="form-control" required="required" placeholder="Konu">
				            </div>
				            <div class="form-group col-md-12">
				            <textarea name="mesaj" id="message" required="required" class="form-control" rows="8" placeholder="Mesajınız"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				             <label class="control-label">    <input type="submit" name="submit" class="btn btn-primary pull-right" value=" MESAJI GONDER">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p>E-Shopper Inc.</p>
							<p>935 W. Webster Ave New Streets Chicago, IL 60614, NY</p>
							<p>Newyork USA</p>
							<p>Mobile: +2346 17 38 93</p>
							<p>Fax: 1-714-252-0026</p>
							<p>Email: info@e-shopper.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>
            
			
			
        </div>
		</section>
			
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
	  
	  <?php 
	  $this->load->view('_footer');
      
          
          	
        ?> 