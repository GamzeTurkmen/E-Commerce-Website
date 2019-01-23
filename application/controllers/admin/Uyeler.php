<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uyeler extends CI_Controller {

	 public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
				$this->load->model('Database_Model');
				
				if(!$this->session->userdata('admin_session'))
				 redirect(base_url().'admin/login/');
        
		}
			

	public function index()
	{
		$query=$this->db->query("SELECT * FROM uyeler ORDER BY adsoy");
		$data["veriler"]=$query->result();
		$this->load->view('admin/uyeler_liste',$data);
		
	} 
	public function ekle()
	{
		
		$this->load->view('admin/uyeler_ekle');
		
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
		redirect(base_url().'admin/uyeler');
	} 
    public function duzenle($id)
	{
		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=$id");
		$data["veri"]=$query->result();
		$this->load->view('admin/uyeler_duzenle_formu',$data);
	}	
	public function guncelle($id)
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
		$this->load->model('Database_Model');
		$this->Database_Model->update_data("uyeler",$data,$id);
		
		redirect(base_url().'admin/uyeler');
	} 
	public function sil($id)
	{
		$this->db->query("DELETE FROM uyeler WHERE Id=$id");
		redirect(base_url().'admin/uyeler');
		
	}	
	public function adminler_liste()
	{
	    $query=$this->db->query("SELECT * FROM admin");
		$data["veriler"]=$query->result();
		$this->load->view('admin/adminler_liste',$data);
	} 
	
	public function ad_ekle()
	{
		
		$this->load->view('admin/adminler_ekle');
		
	}
    public function admin_ekle()
	{
		$data=array(
		'adsoy'=>$this->input->post('adsoy'),
		'email'=>$this->input->post('email'),
		
		'sifre'=>$this->input->post('sifre'),
		'durum'=>$this->input->post('durum'),
		'yetki'=>$this->input->post('yetki')

		
		);
		$this->db->insert("admin",$data);
		$this->session->set_flashdata("mesaj","Admin kaydı gerçekleştirildi");
		redirect(base_url().'admin/uyeler/adminler_liste');
	} 
		
	
}


?>