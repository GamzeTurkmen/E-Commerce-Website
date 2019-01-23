<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uye extends CI_Controller {
	
    public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->model('Database_Model');
				$this->load->helper('url');
				
				if(!$this->session->userdata("uye_session")) //login olup olmadığı kontrolü
					redirect(base_url().'home/login_ol');
        }


	public function index()
	{
		$query=$this->db->query("SELECT * FROM ayarlar"); //query sorgusu yapıldı sonuçlar query'e atıldı
		$data["veri"]=$query->result();
		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=".$this->session->uye_session["id"]); //query sorgusu yapıldı sonuçlar query'e atıldı
		$data["uye"]=$query->result();
		
		
		$data["sayfa"]="uye paneli / ";
		$data["menu"]="uye";
		$this->load->view('hesabim',$data); 
		
	}
	public function cikis()
	{
		$this->session->unset_userdata("uye_session");
		redirect(base_url().'home/login_ol');
		
	}
	public function hesabim()
	{
		$query=$this->db->query("SELECT * FROM ayarlar"); //query sorgusu yapıldı sonuçlar query'e atıldı
		$data["veri"]=$query->result();
        $data["sayfa"]="Uye Hesabı || ";
		$data["menu"]="uye";
		
		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=".$this->session->uye_session["id"]); //query sorgusu yapıldı sonuçlar query'e atıldı
		$data["uye"]=$query->result();
		$this->load->view('hesabim',$data); 
		
	}
	public function uye_guncelle()
	{
	   //form verileri alınacak
	   $data=array(
	   'adsoy' => $this->input->post('adsoy'),
       'sehir' => $this->input->post('sehir'),
	   'tel' => $this->input->post('tel'),
	   'adres' => $this->input->post('adres'),
       'sifre' => $this->input->post('sifre')
	   );
	   $id=$this->session->uye_session["id"];
	  
	   $this->Database_Model->update_data("uyeler",$data,$id);
	   $this->session->set_flashdata("mesaj","Üye bilgileriniz güncellendi.");
	   redirect(base_url().'uye/hesabim');
	}
	public function sepete_ekle()
	{
	   //form verileri alınacak
	   $data=array(
	   'urun_id' => $this->input->post('urunid'),
       'adet' => $this->input->post('miktar'),
	   'musteri_id' => $this->session->uye_session["id"]
	   );
	   //print_r($data);
	   //exit();
	   //aynı ürün eklendiyse kontrol edilip o ürünün miktar kısmı artırılması yeterli
	  
	   $this->db->insert("sepet",$data);
	  
	   $this->session->set_flashdata("mesaj","<p align='center'>Ürün sepete eklendi.</p>");
	   redirect(base_url().'home/urundetay/'.$this->input->post('urunid'));
	}
	public function sepetim()
	{
		$query=$this->db->query("SELECT * FROM sepet"); //query sorgusu yapıldı sonuçlar query'e atıldı
		$data["sepet"]=$query->result();
		$query=$this->db->query("SELECT * FROM ayarlar"); //query sorgusu yapıldı sonuçlar query'e atıldı
		$data["veri"]=$query->result();
        $data["sayfa"]="Sepetim || ";
		$data["menu"]="sepetim";
		
		$id=$this->session->uye_session["id"];
		$data['veriler']=$this->Database_Model->sepet_urunler($id);
		//print_r($data);
		$this->load->view('sepet',$data); 
		
	}
	
    public function sepetsil($id)
	{
		$this->db->query("DELETE FROM sepet WHERE Id=$id"); 
	    $this->session->set_flashdata("mesaj","<p align='center'>**Ürün sepetten silindi**.</p>");
        redirect(base_url().'uye/sepetim');
    }
	
    public function satinal()
	{
		$query=$this->db->query("SELECT * FROM ayarlar"); //query sorgusu yapıldı sonuçlar query'e atıldı
		$data["veri"]=$query->result();
        $data["sayfa"]="Satın Alma || ";
		$data["menu"]="uye";
		
		$data["toplam"]=$this->input->post('toplam');
		$id=$this->session->uye_session["id"];
		
		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=$id");
		$data["uye"]=$query->result();
		
		$this->load->view('satinalma',$data); 
		
	}
	
	public function siparis_tamamla()
	{
	   
	  $data=array(
	   'adsoy' => $this->input->post('adsoy'),
       'musteri_id' => $this->session->uye_session["id"],
	   'adres' => $this->input->post('adres'),
	   'sehir' => $this->input->post('sehir'),
       'tel' => $this->input->post('tel'),
	   'tutar' => $this->input->post('toplam'),
	   'IP' => $_SERVER['REMOTE_ADDR']
	   );
	   
	   //VERİLERİ SİPARİŞTABLOSUNA EKLE
	   $this->db->insert("siparis",$data);
	   $siparis_id=$this->db->insert_id(); //insert komutu girilen kaydın id'sini alır
	   
	   //sepetteki ürünleri sipariş ürünlerine ekle
	   $id=$this->session->uye_session["id"];
	   
	   //sepetteki ürünleri siparis ürünler tablosuna aktarma
	    $veriler=$this->Database_Model->sepet_urunler($id);
		foreach ($veriler as $rs)
		{
			$data=array(
			'adi'=>$rs->urunadi,
			'fiyat'=>$rs->satfiyat,
			'musteri_id'=>$id,
			'urun_id'=>$rs->urun_id,
			'siparis_id'=>$siparis_id,
			'adet'=>$rs->adet,
			'tutar'=>$rs->adet*$rs->satfiyat
			);
			$this->db->insert("siparis_urunler",$data);
		}
		
		$this->db->query("DELETE FROM sepet WHERE musteri_id=$id");
		
		
		redirect(base_url().'uye/islemson');
	}
	
	public function islemson()
	{
		$query=$this->db->query("SELECT * FROM ayarlar"); 
		$data["veri"]=$query->result();
        $data["sayfa"]="İşlemSon || ";
		$data["menu"]="sepetim";
		
		//siparişinizin tamamlandığıa dair email
		$this->load->view('islemson',$data); 
		
	}
	public function siparisler()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();
		$query=$this->db->query("SELECT * FROM ayarlar"); //query sorgusu yapıldı sonuçlar query'e atıldı
		$data["veri"]=$query->result();
        $data["sayfa"]="Siparislerim || ";
		$data["menu"]="uye";
		
		$query=$this->db->query("SELECT * FROM siparis WHERE musteri_id=".$this->session->uye_session["id"]);
		$data["veriler"]=$query->result();
		$this->load->view('siparislerim',$data); 
		
	}
	  public function siparissil($id)
	{
		$this->db->query("DELETE FROM siparis_urunler WHERE Id=$id"); 
	    $this->session->set_flashdata("mesaj","<p align='center'>Siparisiniz silindi*.</p>");
        redirect(base_url().'uye/siparisler');
    }
	  public function siparissiil($id)
	{
		$this->db->query("DELETE FROM siparis WHERE Id=$id"); 
	    $this->session->set_flashdata("mesaj","<p align='center'>Siparisiniz silindi*.</p>");
        redirect(base_url().'uye/siparisler');
    }
	public function siparisdetay($siparis_id)
	{
		$query=$this->db->query("SELECT * FROM ayarlar"); //query sorgusu yapıldı sonuçlar query'e atıldı
		$data["veri"]=$query->result();
        $data["sayfa"]="Siparis Detayı || ";
		$data["menu"]="uye";
		
		$id=$this->session->uye_session["id"];
		$query=$this->db->query("SELECT * FROM siparis_urunler WHERE siparis_id=$siparis_id");
		$data["veriler"]=$query->result();
		
		$this->load->view('siparis_detay',$data); 
		
	}


    public function mesajlarim($id)
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Mesajlarım || ";
		$data["menu"]="uye";
		
		$query=$this->db->query("SELECT * FROM mesajlar Where musteri_id=$id");
		$data["veriler"]=$query->result();
		
		$this->load->view('mesajlar',$data);
	}
		public function yorum_kaydet()
	{
		$data=array(
		'adsoy'=>$this->input->post('adsoy'),
		'email'=>$this->input->post('email'),
		'yorum' => $this->input->post('yorum'),
		'musteri_id' => $this->input->post('musteri_id'),
		'urun_id' => $this->input->post('urun_id')
		
		);
		$this->db->insert("yorumlar",$data);
		$data["veri"]=$query->result();
		$this->session->set_flashdata("mesaj","Yorumunuz gonderilmiştir."); 
		redirect(base_url().'urundetay');
	} 	
	
	
}
