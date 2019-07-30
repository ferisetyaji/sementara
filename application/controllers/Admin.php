<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	private function in()
	{
		if(!$this->session->has_userdata('user')){
    		redirect(site_url('admin/login'));
    	}
	}

	public function index()
	{
		$this->in();
		if($this->input->post('del')){
			$this->db->delete('tb_admin', array('id_admin' => $this->input->post('del')));
			redirect(site_url('admin'));
		}

		$data['admin'] = $this->M_crud->readby('tb_admin', 'id_admin');
		$this->view_admin('admin/admin', $data, 'alink', 'admin/tambah_admin');
	}

	public function tambah_admin()
	{
		$this->in();
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
		$this->in();
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
		$this->in();
		if($this->input->post('del')){
			$this->db->delete('tb_barang', array('id_barang' => $this->input->post('del')));
			redirect(site_url('admin/barang'));
		}

		$data['barang'] = $this->M_crud->readby('tb_barang', 'id_barang');
		$this->view_admin('admin/barang', $data, 'alink', 'admin/tambah_barang');
	}

	public function tambah_barang()
	{
		$this->in();
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
		$this->in();
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
		$this->in();
		if($this->input->post('del')){
			$this->db->delete('tb_transaksi', array('id_transaksi' => $this->input->post('del')));
			redirect(site_url('admin/transaksi'));
		}

		$data['tr'] = $this->M_crud->readby('tb_transaksi', 'id_transaksi');
		$this->view_admin('admin/transaksi', $data, 'alink', 'admin/tambah_transaksi');
	}

	public function tambah_transaksi()
	{
		$this->in();
		if($this->input->post('save')){
			$this->db->insert('tb_transaksi', array());
			redirect(site_url('admin/transaksi'));
		}

		$this->view_admin('admin/transaksi_form');
	}

	public function edit_transaksi()
	{
		$this->in();
		if($this->input->post('save')){
			$this->M_crud->update('tb_transaksi', array(), array('id_transaksi' => $id));
			redirect(site_url('admin/transaksi'));
		}

		$data['tr'] = $this->M_crud->read('tb_transaksi', array('id_transaksi' => $id));
		$this->view_admin('admin/transaksi_form', $data);
	}

	public function login()
	{
		if($this->session->has_userdata('user')){
    		redirect(site_url('admin'));
    	}

		$error = '';
		if($this->input->post('save')){
			$admin = $this->M_crud->read('tb_admin', array('username' => $this->input->post('username')));
			if(!empty($admin)){
				if($admin->password == $this->input->post('password')){
					$this->session->set_userdata('user', $admin->id_admin);
					redirect(site_url('admin'));
				}else{
					$error = '<div class="alert alert-danger alert-sm" role="alert">Password anda salah.</div>';
				}
			}else{
				$error = '<div class="alert alert-danger alert-sm" role="alert">User tidak terdaftar.</div>';
			}
		}

		$data['error'] = $error;
		$this->load->view('login/login_form', $data);
	}

	public function logout()
	{
		$this->session->unset_userdata('user');
		redirect(site_url('admin/login'));
	}
}
