<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yorumlar extends CI_Controller {
	
    public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->model('Database_Model');
				$this->load->helper('url');
				
				if(!$this->session->userdata("admin_session")) //login olup olmadığı kontrolü
					redirect(base_url().'admin/login');
        }


	public function index()
	{
		$query=$this->db->query("SELECT * FROM yorumlar ORDER BY adsoy"); //query sorgusu yapıldı sonuçlar query'e atıldı
		$data["veriler"]=$query->result();
		$this->load->view('admin/yorumlar_liste',$data);
		  
	}
	public function ekle()
	{
		$this->load->view('admin/not_ekle');  
	}
	
   public function ekle_kaydet()
	{
	   //form verileri alınacak
	   $data=array(
	   'adsoy' => $this->input->post('adsoy'),
	   
	   );
	   
	   $this->db->insert("yorumlar",$data);
	   $this->session->set_flashdata("mesaj","Not kaydedildi!");
	   redirect(base_url().'admin/yorumlar');
	}
	
	public function detay($id)
	{
	    
		$query=$this->db->query("SELECT * FROM yorumlar WHERE Id=$id");
		$data["veri"]=$query->result();
		$this->load->view('admin/yorum_detay',$data);
		
		
	}
	
	
	public function duzenle($id)
	{
	    $query=$this->db->query("SELECT * FROM yorumlar WHERE Id=$id");
		$data["veri"]=$query->result();
		
		$this->load->view('admin/yorumlar_duzenle_formu',$data);
	}
	
	 public function durum_guncelle($id)
	{
	   //form verileri alınacak
	   $data=array(
	   'durum' => $this->input->post('durum')
	     );
		 $this->db->query("UPDATE  yorumlar SET durum ='Yayinlandi' WHERE Id=$id");
	 
	   $this->Database_Model->update_data("yorumlar",$data,$id);
	   $this->session->set_flashdata("mesaj","Yorum yayınlandı!");
	   redirect(base_url().'admin/yorumlar');
	}
	
	public function sil($id)
	{
	    $this->db->query("DELETE FROM yorumlar WHERE Id=$id");
		$this->session->set_flashdata("mesaj","Mesaj bilgileri silindi!");
		 redirect(base_url().'admin/yorumlar');
		
		
	}
	
	
}
?>