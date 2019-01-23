<!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"> <img src="<?=base_url()?>uploads/<?=$this->session->admin_session["resim"] ?>" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?=$this->session->admin_session["adsoy"] ?></h5>
              	  	
                  <li class="mt">
                      <a href="<?=base_url()?>admin">
                          <i class="fa fa-dashboard"></i>
                          <span>Anasayfa</span>
                      </a>
                  </li>
                   <li class="sub-menu">
                      <a href="<?=base_url()?>admin/uyeler">
                          <i class="fa fa-dashboard"></i>
                          <span>Üyeler</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="<?=base_url()?>admin/urunler" >
                          <i class="fa fa-users"></i>
                          <span>Ürünler</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Siparişler</span>
                      </a>
                      <ul class="sub">
					     <li><a  href="<?=base_url()?>admin/Siparisler/liste/yeni"><i class="fa fa-circle-o"></i>Yeni</a></li>
                          <li><a  href="<?=base_url()?>admin/Siparisler/liste/onaylandi"><i class="fa fa-circle-o"></i>Onaylananlar</a></li>
						  <li><a  href="<?=base_url()?>admin/Siparisler/liste/Iptal"><i class="fa fa-circle-o"></i>İptal Edlenler</a></li>
                          <li><a  href="<?=base_url()?>admin/Siparisler/liste/tamamlandi"><i class="fa fa-circle-o"></i>Tamamlananlar</a></li>
                          <li><a  href="<?=base_url()?>admin/Siparisler/liste/kargoda"><i class="fa fa-circle-o"></i>Kargodakiler</a></li>
                      </ul>
                  </li>
                 
				  <li>
                      <a href="<?=base_url()?>admin/mesajlar" >
                          <i class="fa fa-th"></i>
                          <span>Mesajlar</span>
                      </a>
                      
                  </li>
				  <li>
                      <a href="<?=base_url()?>admin/Yorumlar" >
                          <i class="fa fa-th"></i>
                          <span>Yorumlar</span>
                      </a>
                      
                  </li>
				  
				  
				  <li>
                      <a href="<?=base_url()?>admin/login" >
                          <i class=""></i>
                          <span>Login</span>
                      </a>
                      
                  </li>
                        
                 
                       
                  <li>
                      <a href="<?=base_url()?>admin/home/ayarlar" >
                          <i class="fa fa-tasks"></i>
                          <span>Ayarlar</span>
                      </a>
                      
                  </li>
                  <li class="">
                      <a href="<?=base_url()?>admin/uyeler/adminler_liste" >
                          <i class="fa fa-th"></i>
                          <span>Adminler</span>
                      </a>
                      
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Information</span>
                      </a>
                      
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      