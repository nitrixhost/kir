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
		$this->load->library(array('form_validation'));
		//load model
		$this->load->model(array('homes'));
		//load language
		$this->lang->load('universal');
		//load template
		$this->_template = $this->config->item('template_dir').'container';
		$this->_contan = $this->config->item('template_dir').'pages/';
	}

	public function index()
	{
		$data['title'] = $this->lang->line('title_home');
		$data['page'] = $this->_contan.'home';
		$this->load->view($this->_template,$data);
	}

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
}