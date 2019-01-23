<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
	  <?php
	  $this->load->view('admin/_header');
	  $this->load->view('admin/_sidebar');
	  ?>
	  <script src="//cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> SİTE AYARLARI</h3>
          	<div class="row mt">
          		
          	</div>
			 <?php if($this->session->flashdata("mesaj")) { ?>
						   <div class="alert alert-info">
						   <p> <?=$this->session->flashdata("mesaj")?></p>
						   </div>
						   <?php } ?>
			
			
			<section class="content">		
        <div class="col-md-6">
		<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#genel" data-toggle="tab">Genel</a></li>
              <li><a href="#email" data-toggle="tab" data-toggle="tab">Email</a></li>
              <li><a href="#sosyal" data-toggle="tab" data-toggle="tab">Sosyal</a></li>
			  <li><a href="#hakkimizda" data-toggle="tab" data-toggle="tab">Hakkımızda</a></li>
			  <li><a href="#iletisim" data-toggle="tab" data-toggle="tab">İletişim</a></li>
			  
            </ul>
			
			<form method="post" action="<?=base_url()?>admin/home/ayarlar_guncelle/<?=$veri[0]->Id?>" class="form-horizontal" >
            <div class="tab-content">
              <div class="active tab-pane" id="genel">
               <h4> Genel Ayarlar</h4>
			   <form class="form-horizontal">
			   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Adı</label>

                    <div class="col-sm-10">
                      <input type="text" name="adi" value="<?=$veri[0]->adi?>" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Description</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="description" value="<?=$veri[0]->description?>" id="inputEmail" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Keywords</label>

                    <div class="col-sm-10">
                      <input type="text"  name="keywords" value="<?=$veri[0]->keywords?>"class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Adres</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" name="adres" value="<?=$veri[0]->adres?>"id="inputExperience" placeholder="Experience"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Telefon</label>

                    <div class="col-sm-10">
                      <input type="text"  name="tel" value="<?=$veri[0]->tel?>" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>
				    <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Şehir</label>

                    <div class="col-sm-10">
                      <input type="text"  name="sehir" value="<?=$veri[0]->sehir?>" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>
		
			   
              
                </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="email">
                <h4> Email Ayarları</h4>
				 <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Smtp Server</label>

                    <div class="col-sm-10">
                      <input type="text" name="smtpserver" value="<?=$veri[0]->smtpserver?>" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Smtp Email</label>

                    <div class="col-sm-10">
                      <input type="text" name="smtpemail" value="<?=$veri[0]->smtpemail?>"     class="form-control" id="inputEmail" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Port</label>

                    <div class="col-sm-10">
                      <input type="text" name="smtpport" value="<?=$veri[0]->smtpport?>" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Şifre</label>

                    <div class="col-sm-10">
                      <input type="password" name="password" value="<?=$veri[0]->password?>" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  
                 </div>
                   
                

              <div class="tab-pane" id="sosyal">
			  <h4>Sosyal Medya Ayarları</h4>
                <form class="form-horizontal">
				 
                  <div class="form-group">
				 
                 <label for="inputName" class="col-sm-2 control-label">Facebook</label>
                  
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="Facebook">
                    </div>
					
					
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Instagram</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Instagram">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Twitter</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Twitter">
                    </div>
                  </div>
                  
                  
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Pinterest</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="Pinterest">
                    </div>
                  </div>
				  </div>
				  
				  <div class="tab-pane" id="hakkimizda">
			     <h4>Hakkımızda Bilgileri</h4>
				  
				 <textarea name="editor1" id="editor1" rows="15" cols="80">
				  <?=$veri[0]->hakkimizda?>
				  </textarea>
				 
				 <script>
				 
				  CKEDITOR.replace('editor1');
				  
				 </script>
				 </div>
				  <div class="tab-pane" id="iletisim">
			     <h4>İletişim Sayfası Bilgileri</h4>
				  
				 <textarea name="editor2" id="editor2" rows="15" cols="80">
				  <?=$veri[0]->iletisim?>
				  </textarea>
				 
				 <script>
				 
				  CKEDITOR.replace('editor2');
				  
				 </script>
				 </div>
				 
                  </div>
				  <div class="row">
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Güncelle</button>
                    </div>
                  </div>
				 </div> 
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
         
		
		</section>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
	  
	  
	  <?php
	     $this->load->view('admin/_footer');
	  
	  ?>