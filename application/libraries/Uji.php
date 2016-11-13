<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
**
* Uji Library
* @author Alfin Syamsuddin
* copyright 2016
*/

class Uji {

	protected $CI;
    
    public function __construct()
    {
        $this->CI =& get_instance();
        //load library
        $this->CI->load->library(array('session'));
        //load language
        $this->CI->lang->load('universal');
        //load helper
        $this->CI->load->helper(array('url','cookie'));
        //load model
        $this->CI->load->model(array('homes'));
    }

    /**
    * Fungsi untuk menegcek uji
    * array
    */
    public function cekUji($uji)
    {
    	$data = $this->CI->homes->searchNoUji($uji);
    	return $data;
    }

    /**
    * Fungsi untuk mengecek tanggal perbaikan
    * array
    */
    public function cekExpired()
    {
        $data = $this->CI->homes->cekKadaluarsa();
        return $data;
    }

    /**
    * Fungsi untuk mengecek apakah hari ini ada yang expired
    * array
    */
    public function cekExpiredNow()
    {
        $data = $this->CI->homes->cekKadaluarsaNow();
        return $data;
    }



}