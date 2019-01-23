<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	  public function __construct()
        {
                parent::__construct();
				$this->load->model('Database_Model');
                $this->load->helper('url');
				
		}
	
	
	public function index()

	{ 
	    $query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet" );
		$data["sepet"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM urunler WHERE grubu='kampanya'");
		$data["kampanya"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM urunler ORDER BY Id DESC LIMIT 6");
		$data["yeni"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM urunler ORDER BY RAND() LIMIT 3");
		$data["random"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM urunler ");
		$data["urunler"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		
		$data["sayfa"]="";
		$data["menu"]="anasayfa";
		
		$this->load->view('_header',$data);
		
		$this->load->view('_slider');
		$this->load->view('_sidebar');
	    $this->load->view('_content');
	    $this->load->view('_footer');
	} 
	public function hakkimizda()

	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Hakkımızda ||";
		$data["menu"]="hakkimizda";
		
		$this->load->view('_header',$data);
	    $this->load->view('_sidebar');
		$this->load->view('hakkimizda');
	    $this->load->view('_footer');
	} 
	
	public function iletisim()

	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="İletişim || ";
		$data["menu"]="iletisim";
		
		$this->load->view('iletisim',$data);
	    
	} 
	public function bize_yazin()

	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Bize Yazın || ";
		$data["menu"]="bize_yazin";
		
		$this->load->view('bize_yazin',$data);
	    
	} 
	
public function mesaj_kaydet()
{
//Form verilerini alma işlemi
$data=array(
'adsoy' => $this->input->post('adsoy'),
'email' => $this->input->post('email'),
'tel' => $this->input->post('tel'),
'mesaj' => $this->input->post('mesaj'),
'IP'   => $_SERVER['REMOTE_ADDR']

);
$this->db->insert("mesajlar",$data);
$adsoy=$this->input->post('adsoy');
$email=$this->input->post('email');
    //Email ayarlarını veritabanından okuma
$query=$this->db->get("ayarlar"); 
$data["veri"]=$query->result();
//Email Server Ayarları
$config=Array(
'protocol'=>'smtp',
'smtp_host' => $data["veri"][0]->smtpserver,
'smtp_port' => $data["veri"][0]->smtpport,
'smtp_user' => $data["veri"][0]->smtpemail,
'smtp_pass' => $data["veri"][0]->password,
'mailtype'=> 'html',
'charset' =>'utf-8',
'wordwrap'=>TRUE
);

$mesaj="Değerli : ".$adsoy."<br> Göndermiş olduğunuz mesaj alınmıştır.<br>En Kısa Sürede Size Dönüş Yapılacaktır,Teşekkür ederiz<br>";
$mesaj.="-------------------------------------------------<br>";
$mesaj.=$data["veri"][0]->adi."<br>";
$mesaj.=$data["veri"][0]->adres."<br>";
$mesaj.=$data["veri"][0]->sehir."<br>";
$mesaj.=$data["veri"][0]->tel."<br>";
$mesaj.=$data["veri"][0]->fax."<br>";
$mesaj.="Gönderdiğiniz Mesaj Aşağıdakş gibidir:<br>----------------------<br>";
$mesaj.=$this->input->post("mesaj");

//Email gönderme
$this->load->Library('email',$config);
$this->email->set_newLine("/r/n");
$this->email->from($data["veri"][0]->smtpemail);
$this->email->to($email);
$this->email->subject($data["veri"][0]->name."Form alındı mesajı");
$this->email->message($mesaj);
//send email
if($this->email->send())
$this->session->set_flashdata("email_sent","Email başarı ile gönderildi.");
else
{
$this->session->set_flashdata("email_sent","Email gönderiminde hata oluştı!!");
show_error($this->email->print_debugger()); //ayrıntılı hata dökümanı için
}





$this->session->set_flashdata("mesaj","Mesajınız gönderilmiştir.");
redirect(base_url().'Home/bize_yazin');

}
	
	public function Mesajlar()

	{
	    echo "Mesajlar sayfası";
	}
	
	public function login_ol()

	{
		
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Uye Login || ";
		$data["menu"]="uye";
		
		$this->load->view('login_ol',$data);
		
	}
	public function yeni_uye()

	{
		
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Uye Login || ";
		$data["menu"]="uye";
		
		$this->load->view('yeni_uye',$data);
		
	}
	public function login()

	{
		$email=$this->input->post("eposta");
		$sifre=$this->input->post("sifre");	
		
		//echo $email =$this->security->xss_clean($email);
		//echo $sifre =$this->security->xss_clean($sifre);
	    //exit();
		
		$this->load->model('Database_Model');
		$result =$this->Database_Model->login('uyeler',$email,$sifre);
		
		if($result)
		{
			
		$sess_array=array(
		'id'=>$result[0]->Id,
		'yetki'=>$result[0]->yetki,
		'email'=>$result[0]->email,
		'adsoy'=>$result[0]->adsoy,
		'resim'=>$result[0]->resim
		);
		
	    //print_r($sess_array);
		//echo "login oldu";
		//exit();
		
		$this->session->set_userdata("uye_session",$sess_array);
		redirect(base_url().'Home');
			
			
		}
		else
		{
			$this->session->set_flashdata("mesaj","Hatalı kullanıcı adı veya sifre!!");
			//echo "hata var";
			redirect(base_url()."home/login_ol");
		}
		
	}
	
	
	public function urundetay($id)
    {
		
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();
		$data["menu"]="urun";
		$data["sayfa"]=null;
		
		$data["veri"]=$this->Database_Model->get_urun($id);
		$query=$this->db->query("SELECT * FROM yorumlar WHERE urun_id=$id");
		$data["yorum"]=$query->result();
		$query=$this->db->query("SELECT * FROM urunler_resim WHERE urun_id=$id");
		$data["resimler"]=$query->result();
		
		
		$this->load->view('urun_detay',$data);
		
	}	
	public function  siparisler($durum)

	{
		
		$query=$this->db->query("SELECT * FROM siparis WHERE siparisdurumu='$durum'");
		$data["veriler"]=$query->result();
		
		
		
		$this->load->view('siparisler_listesi',$data);
		
	}
	public function kategoriler($id)

	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();
		$query=$this->db->query("SELECT * FROM kategoriler");
		$data["veri"]=$query->result();
		$data["sayfa"]="Kategoriler ||";
		$data["menu"]="kategoriler";
		
		$query=$this->db->query("SELECT * FROM kategoriler");
		$data["veri"]=$query->result();
		$data["veriler"]=$this->Database_Model->get_urunx($id);
		
		$this->load->view('kategori_content',$data);
	}
    public function yorum_kaydet()
	{
	   //form verileri alınacak
	   $data=array(
	   'adsoy' => $this->input->post('adsoy'),
	   'email' => $this->input->post('eposta'),
	   'yorum' => $this->input->post('yorum'),
	   'musteri_id' => $this->input->post('musteri_id'),
	   'urun_id' => $this->input->post('urun_id')
  
	   );
	   
	   $this->db->insert("yorumlar",$data);

		
		$query=$this->db->get("ayarlar"); //settings tablosunun vertabanından çek
		$data["veri"]=$query->result();
		$this->session->set_flashdata("mesaj","Yorumunuz gönderilmiştir."); 
		redirect(base_url().'home');
	}
	
		
	public function kayit_ol()
	{
		
			$data=array(
			'adsoy'=>$this->input->post('adsoy'),  //formdaki alanları veritabanıyla eşleştir.
			'email'=>$this->input->post('email'),
			'sifre'=>$this->input->post('sifre')
			);
			$this->db->insert("uyeler",$data);  //dataya eklediğimiz verileri insert ile veritabanına ekle
			$this->session->set_flashdata("mesaj","&emsp;&emsp;&emsp;&emsp;Kullanıcı kaydı başarıyla gerçekleştirildi..<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Lütfen Giriş Yapınız..</br>");
			redirect(base_url().'home/login_ol');
	}
	
	public function ekle_kaydet()
	{
		$data=array(
		'adsoy'=>$this->input->post('adsoy'),
		'email'=>$this->input->post('email'),
		'sehir'=>$this->input->post('sehir'),
		'tel'=>$this->input->post('tel'),
		'durum'=>$this->input->post('durum'),
		'yetki'=>$this->input->post('yetki'),
		'adres'=>$this->input->post('adres'),
		'sifre'=>$this->input->post('sifre')
		);
		$this->db->insert("uyeler",$data);
		$this->session->set_flashdata("mesaj","Üye kaydı gerçekleştirildi");
		redirect(base_url().'home/kayit_ol');
	} 
	   public function yorumlar($id)
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Yorumlarım || ";
		$data["menu"]="uye";
		$query=$this->db->query("SELECT * FROM yorumlar Where musteri_id=$id");
		$data["veriler"]=$query->result();
		
		$this->load->view('yorumlar',$data);
	}
	
		 public function yorum_ekle()
	{
		$data=array(
		'konu' => $this->input->post('konu'),
		'yorum' => $this->input->post('yorum'),
		'urun_id' => $this->input->post('urun_id'),
		'musteri_id' => $this->input->post('musteri_id'),
		'musteri_adi' => $this->input->post('musteri_adi'),
		);
		$this->load->model('Database_Model');
		$this->Database_Model->insert_data("yorumlar",$data);
		
		redirect(base_url().'home/urun_detay');
		
	}

		
	
	
		

}