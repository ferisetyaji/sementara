<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_general extends CI_Model
{	
	function __construct(){
        parent::__construct();
    }

    function get_($table, $where1 = '',$where2 = '', $where3 = ''){
    	$q = "SELECT * FROM $table $where1 $where2 $where3";
    	$qx = $this->db->query($q);
    	return $qx->result();
    }

    function get_join($table, $join = '', $where1 = '', $where2 = ''){
    	$q = "SELECT * FROM $table $join $where1 $where2";
    	$qx = $this->db->query($q);
    	return $qx->result();
    }

    function get_colom($table, $kolom, $aksi1='', $aksi2='', $aksi3=''){
        $q = "SELECT $kolom FROM $table $aksi1 $aksi2 $aksi3";
    	$qx = $this->db->query($q);
    	return $qx->result();
    }

}