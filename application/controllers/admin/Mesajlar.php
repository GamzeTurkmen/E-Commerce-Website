<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mesajlar extends CI_Controller {
	public function __construct()
    {
                parent::__construct();
                // Your own constructor code
				$this->load->helper('url');
				$this->load->library('session');
				$this->load->database();
				$this->load->model('Database_Model');
				
				if(!$this->session->userdata('admin_session')) 
				{
					$this->session->set_flashdata('mesaj','Giriş Yapmadınız.!');
					redirect(base_url()."admin/login");
					
                }					


				   }
	public function index()
	{
		$query=$this->db->query("select * from mesajlar order by adsoy");
	    $data["veriler"]=$query->result();
		
		$this->load->view('admin/mesaj_listesi',$data);
		
	
	}
	public function ekle()
	{
		$this->load->view('admin/mesaj_ekle');
	}
	public function kaydet()
	{
		$data=array(
		'adsoy'=>$this->input->post('adsoy'),
		'email'=>$this->input->post('email'),
		'sifre'=>$this->input->post('sifre'),
		'yetki'=>$this->input->post('yetki'),
		'durum'=>$this->input->post('durum')
		
		);
		$this->Database_Model->insert_data("mesajlar",$data);
		$this->session->set_flashdata("mesaj","Kullanici başarılı bir şekilde eklenmiştir");
		redirect(base_url().'admin/Mesajlar');
	}
	public function detay($id)
	{
	$this->db->query("UPDATE mesajlar SET durum='Okundu' WHERE Id=$id");
	$query=$this->db->query("Select * FROM Mesajlar WHERE Id=$id");	
	$data["veri"]=$query->result();
    $this->load->view('admin/mesaj_detay',$data);	
	}
	public function guncelle($id)
	{
		$data=array(
		'adminnotu'=>$this->input->post('adminnotu'),
		
		);
		$this->Database_Model->update_data("mesajlar",$data,$id);
		$this->session->set_flashdata("mesaj","Notunuz Güncellendi");
		redirect(base_url()."admin/mesajlar/detay/$id");
	}
	
	public function sil($id)
	{
		$this->db->query("DELETE FROM mesajlar WHERE Id=$id");
		
		$this->session->set_flashdata("mesaj",'Kullanici başarı ile silinmiştir');
		redirect(base_url().'admin/Mesajlar');
	}
	
	
	
}
?>