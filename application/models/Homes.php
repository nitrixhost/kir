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

      //prefix
      $pref = 'tbl_';
     	$this->_kendaraan = $pref.'kendaraan';
      //load of array table
      $this->_periksa = 'periksa';
      $this->_tblsuspendi = $pref.'as_suspendi';
      $this->_ban = $pref.'ban';
      $this->_hasiluji = $pref.'hasil_uji';
      $this->_lain = $pref.'lainlain';
      $this->_mesin = $pref.'mesin';
      $this->_peralatan = $pref.'peralatan';
      $this->_peralatan2 = $pref.'peralatan_dua';
      $this->_rangka = $pref.'rangka';
      $this->_ruanggas = $pref.'ruang_gas';
      $this->_sistemkem = $pref.'sistem_kemudi';
      $this->_sistemkem2 = $pref.'sistem_kemudi_dua';
  	}


  	public function getData()
  	{
  		$this->db->select('Tahun_pembuatan');
  		$this->db->distinct();
  		$query = $this->db->get($this->_kendaraan);
  		return $query->result();
  	}

  	public function hitungMobThPem($tahun)
  	{
  		$query = $this->db->get_where($this->_kendaraan,array('Tahun_pembuatan'=>$tahun));
  		return count($query->result());
  	}


    /* cari data berdasarkan nouji kendaraan */
    public function searchNoUji($no)
    {
        $this->db->select('*');
        $this->db->from($this->_periksa);
        $this->db->join($this->_kendaraan,'tbl_kendaraan.id = periksa.id_kendaraan');
        $this->db->where('no_uji',$no);
        $query = $this->db->get();
        return $query->result();
    }

    /* cek kadaluarsa */
    public function cekKadaluarsa()
    {
        $querys = "select * from tbl_hasil_uji where untuk_di_perbaiki_sampai_dengan_tanggal = DATE(NOW() + INTERVAL 3 DAY)";
        $query = $this->db->query($querys);
        return $query->result();
    }

    /* cek kadaluarsa sekarang */
    public function cekKadaluarsaNow()
    {
       $querys = "select * from tbl_hasil_uji where untuk_di_perbaiki_sampai_dengan_tanggal = DATE(NOW() + INTERVAL 1 DAY)";
       $query = $this->db->query($querys);
       return $query->result();
    }

    /* cek hasil search */
    public function searchData($search)
    {
        $this->db->from($this->_periksa);
        $this->db->like('no_uji',$search);
        $this->db->or_like('tanggal_pemeriksaan',$search);
        $this->db->or_like('pelat_nomor',$search);
        
        $query = $this->db->get();
        return $query->result();
    }




}
