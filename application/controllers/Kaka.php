<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kaka extends MY_Controller {

	public function index()
	{
		$this->view_admin('admin/dashboard');
	}
}
