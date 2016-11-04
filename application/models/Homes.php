<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
**
* Home model
* @author Alfin Syamsuddin
* copyright 2016
*/
class Homes extends CI_Model {

	/*konstruktor */
  	function __construct()
  	{
     	parent::__construct();
     	$this->_tbl = 'tbkendaraan';
  	}


  	public function getData()
  	{
  		$this->db->select('Tahun_pembuatan');
  		$this->db->distinct();
  		$query = $this->db->get($this->_tbl);
  		return $query->result();
  	}

  	public function hitungMobThPem($tahun)
  	{
  		$query = $this->db->get_where($this->_tbl,array('Tahun_pembuatan'=>$tahun));
  		return count($query->result());
  	}







}
