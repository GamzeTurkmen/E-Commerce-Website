<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	 public function __construct()
        {
                parent::__construct();
				
				$this->load->model('Database_Model');
                $this->load->helper('url');
				if(!$this->session->userdata("admin_session"))
				 redirect(base_url().'admin/login');
        }
			

	public function index()
	{
		
		$this->load->view('admin/_content');
		
		
		
	}
	
	public function ayarlar()
	{
	    $query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		
		$this->load->view('admin/ayarlar',$data);
	}
	
	public function ayarlar_guncelle($id)
	{
		$data=array(
		'adi'=>$this->input->post('adi'),
		'smtpemail'=>$this->input->post('smtpemail'),
		'sehir'=>$this->input->post('sehir'),
		'tel'=>$this->input->post('tel'),
		'keywords'=>$this->input->post('keywords'),
		'description'=>$this->input->post('description'),
		'hakkimizda'=>$this->input->post('editor1'),
		'iletisim'=>$this->input->post('editor2')
		);
		
	    $this->Database_Model->update_data("ayarlar",$data,$id);
	$this->session->set_flashdata("mesaj","<p align='center'> Ayarlar güncellendi. </p>");
	    redirect(base_url().'admin/home/ayarlar');

	}
	
	

}
     
