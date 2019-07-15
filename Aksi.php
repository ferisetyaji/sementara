<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_umum');
	}

	public function index()
	{
		$mahasiswa = $this->M_umum->read_array('tb_mahasiswa', array('id_mahasiswa' => $this->session->userdata('id')));
		$profesi = array('Pegawai', 'Non Pegawai');
		$atribut = array('jenis_kelamin', 'umur', 'lama_studi', 'ipk', 'profesi_ayah', 'profesi_ibu', 'wajib_minat', 'nilai_wajib_minat_1', 'nilai_wajib_minat_2', 'nilai_wajib_minat_3', 'nilai_wajib_minat_4');

		$jp = count($profesi);
		foreach ($profesi as $p_item) {
			$jn = [];
			
			foreach ($atribut as $n_item) {
				$an = $this->M_umum->read('tb_alumni', array($n_item => $mahasiswa[$n_item]), array('profesi_sekarang' => $p_item));

				if(!empty($an)){
					if($an->profesi_sekarang == $p_item){
						$jn[] = '1';
					}
					var_dump(count($an));
				}
			}

			$n = count($jn);
			var_dump($n);
			$phl = [];
			$m = 0;
			foreach ($atribut as $a_item) {
				$at = $this->M_umum->read_id2('tb_alumni', array($a_item => $mahasiswa[$a_item]), array('profesi_sekarang' => $p_item));
				$nc = 0;
				foreach ($at as $at_item) {
					if(!empty($at_item[$a_item])){
						$nc++;
					}
				}

				$phl[] = $nc/$n;
			}
			
			$phs = array_product($phl);
			$ph = $n/$m;
			$hasil = $phs*$ph;
		}
	}
}