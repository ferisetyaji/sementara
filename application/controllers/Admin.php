<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	public function index()
	{
		if($this->input->post('del')){
			$this->db->delete('tb_admin', array('id_admin' => $this->input->post('del')));
			redirect(site_url('admin'));
		}

		$data['admin'] = $this->M_crud->readby('tb_admin', 'id_admin');
		$this->view_admin('admin/admin', $data, 'alink', 'admin/tambah_admin');
	}

	public function tambah_admin()
	{
		if($this->input->post('save')){
			$this->db->insert('tb_admin', array(
				'nama_admin' => $this->input->post('name'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			));
			redirect(site_url('admin'));
		}

		$this->view_admin('admin/admin_form');
	}

	public function edit_admin($id)
	{
		if($this->input->post('save')){
			$this->M_crud->update('tb_admin', array(
				'nama_admin' => $this->input->post('name'),
				'username' => $this->input->post('username'),
			), array('id_admin' => $id));

			if($this->input->post('password')){
				$this->M_crud->update('tb_admin', array(
					'password' => $this->input->post('password')
				), array('id_admin' => $id));
			}
			redirect(site_url('admin'));
		}

		$data['admin'] = $this->M_crud->read('tb_admin', array('id_admin' => $id));
		$this->view_admin('admin/admin_form', $data);
	}

	public function barang()
	{
		if($this->input->post('del')){
			$this->db->delete('tb_barang', array('id_barang' => $this->input->post('del')));
			redirect(site_url('admin/barang'));
		}

		$data['barang'] = $this->M_crud->readby('tb_barang', 'id_barang');
		$this->view_admin('admin/barang', $data, 'alink', 'admin/tambah_barang');
	}

	public function tambah_barang()
	{
		if($this->input->post('save')){
			$this->db->insert('tb_barang', array(
				'nama_barang' => $this->input->post('nama'),
				'harga_barang' => $this->input->post('harga')
			));
			redirect(site_url('admin/barang'));
		}
		$this->view_admin('admin/barang_form');
	}

	public function edit_barang($id)
	{
		if($this->input->post('save')){
			$this->M_crud->update('tb_barang', array(
				'nama_barang' => $this->input->post('nama'),
				'harga_barang' => $this->input->post('harga')
			), array('id_barang' => $id));
			redirect(site_url('admin/barang'));
		}

		$data['barang'] = $this->M_crud->readby('tb_barang', 'id_barang');
		$this->view_admin('admin/barang_form', $data);
	}

	public function transaksi()
	{
		
	}
}
