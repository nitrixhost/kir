<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

/* HOME Controller */


	function __construct()
	{
		//boot init
		parent::__construct();
		//load helper
		$this->load->helper(array('form', 'url'));
		//load library
		$this->load->library(array('form_validation','uji'));
		//load model
		$this->load->model(array('homes'));
		//load language
		$this->lang->load('universal');
		//load template
		$this->_template = $this->config->item('template_dir').'container';
		$this->_contan = $this->config->item('template_dir').'pages/';
	}

	/** halaman index ***/
	public function index()
	{
		$data['title'] = $this->lang->line('title_home');
		$data['page'] = $this->_contan.'home';
		$this->load->view($this->_template,$data);
	}

	/** fungsi mengambil data chart */
	public function datachart()
	{
		//dapatkan legend y axis
		$data = $this->homes->getData();
		//$das = array();	
		foreach($data as $kim){
			$da[] = $kim->Tahun_pembuatan;
			//hitung jumlah mobil berdasarkan tahun pembuatan
			$das[] = $this->homes->hitungMobThPem($kim->Tahun_pembuatan);
		}
		$k = array("labels"=> $da,"data"=>$das);
		echo json_encode($k);
	}

	/* ajax post buat blanko*/
	public function searchBlanko()
	{
		//tampung semua postingan
		$post = $this->input->post();
		//jika kosong
		if(empty($post))
			$this->session->set_flashdata('error',$this->lang->line('error_nodata'));
			//redirect('home');
		//temukan semua data
		$data['datas'] = $this->uji->cekUji($post['nouji']);
		if($data['datas'] == null)
			$this->session->set_flashdata('error',$this->lang->line('error_noquery'));
			//redirect('home');
		$data['page'] = $this->_contan.'blanko';
		$data['title'] = $this->lang->line('title_print_blanko');
		$this->load->view($this->_template,$data);
	}
}