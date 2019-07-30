<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller{
	
	public function view_admin($content, $data = array(), $btn = null, $alink = null)
	{
		$layout['user_data'] = $this->M_crud->read('tb_admin', array('id_admin' => $this->session->userdata('user')));
		$layout['btn_alink'] = site_url($alink);
		$layout['btn_add'] = $btn;
		$layout['content'] = $this->load->view($content, $data, true);
		$this->load->view('layout/admin_layout', $layout);
	}
}