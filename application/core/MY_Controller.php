<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller{
	
	public function view_admin($content, $data = array())
	{
		$layout['content'] = $this->load->view($content, $data, true);
		$this->load->view('layout/admin_layout', $layout);
	}
}