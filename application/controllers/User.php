<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin');
		$this->load->model('M_user');
		$this->load->model('M_auth');

	}

	public function index()
	{
		$data['syarat'] = $this->db->get('syarat')->result_array();
		$data['menu'] = $this->M_admin->menu();
		$this->load->view('user/index', $data);
	}

	public function order()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('kode_order', 'Kode', 'trim|required');
		$this->form_validation->set_rules('user_id', 'Id', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('tlp', 'Telp', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		// $this->form_validation->set_rules('tgl_pem', 'Tgl1', 'trim|required');
		$this->form_validation->set_rules('tgl_peng', 'Tgl2', 'trim|required');
		$this->form_validation->set_rules('orderan', 'Order', 'trim|required');
		$this->form_validation->set_rules('harga', 'Harga', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data = [
				'id_paket' => htmlspecialchars($this->input->post('id_paket', true)),
			];
			// redirect('konsumen/bayar/'.$data['kode_booking'], $data);
			redirect('User/pesan/'.$data['id_paket'], $data);
		}else{
			$this->M_user->add_order();
			$this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
				  Selamat Akun Telah Terdaftar, Silahkan Login!!
				</div>');
			$data = [
				'user_id' => htmlspecialchars($this->input->post('user_id', true)),
			];
			redirect('User/konfirmasi/'.$data['user_id'], $data);
		}
	}
	public function pesan($id)
	{
		if ($this->M_auth->is_logged_in()) {
			$where = array('id_paket' => $id);
			$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
			$data['paket'] = $this->M_user->show_paket($where, 'tb_paket')->result();
			$data['syarat'] = $this->db->get('syarat')->result_array();
			// $data['menu'] = $this->M_admin->menu();
			$this->load->view('user/pesan', $data);
		}else{
			redirect('auth/index');
		}
	}
	public function konfirmasi($id)
	{
		if ($this->M_auth->is_logged_in()) {
			$where = array('user_id' => $id);
			$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
			$data['paket'] = $this->M_user->show_order($where, 'tb_order')->result();
			$data['syarat'] = $this->db->get('syarat')->result_array();
			// $data['menu'] = $this->M_admin->menu();
			$this->load->view('user/konfirmasi', $data);
		}else{
			redirect('auth/index');
		}
	}

	public function add_konfirmasi()
	{
		$this->form_validation->set_rules('kode_order', 'Kode', 'trim|required');
		$this->form_validation->set_rules('user_id', 'Id', 'trim|required');
		$this->form_validation->set_rules('rek_from', 'From', 'trim|required');
		$this->form_validation->set_rules('rek_to', 'To', 'trim|required');
		$this->form_validation->set_rules('rek_nama', 'Rekn', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');
		$this->form_validation->set_rules('tgl', 'Tgl', 'trim|required');
		$this->form_validation->set_rules('nominal', 'Nomin', 'trim|required');
		$this->form_validation->set_rules('tagihan', 'Tagihan', 'trim|required');
		$this->form_validation->set_rules('sisa', 'Sisa', 'trim|required');
		// $this->form_validation->set_rules('bukti', 'Bukti', 'trim|required');

		// $this->form_validation->set_rules('gambar', 'Gambar', 'trim|required');
		if ($this->form_validation->run() == false) {
			$data = [
				'user_id' => htmlspecialchars($this->input->post('user_id', true)),
			];
			redirect('User/konfirmasi/'.$data['user_id'], $data);
		}else{
			$config['upload_path'] = 'assets/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']     = '3000';
			$config['max_width'] = '2000';
			$config['max_height'] = '2000';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('bukti')) {
				echo $this->upload->display_errors();
			}else{
				$file = $this->upload->data('file_name');
				// $file = $this->upload->data();
			// $image = $file['file_name'];

			// $data = [
			// 	'nama' => htmlspecialchars($this->input->post('nama', true)),
			// 	'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
			// 	'kategori' => htmlspecialchars($this->input->post('kategori', true)),
			// 	'harga' => htmlspecialchars($this->input->post('harga', true)),
			// 	'gambar' => $image

			// ];
			// $this->db->insert('tb_paket', $data);
			// $this->M_user->add_konfirmasi();
			$user_id = $this->input->post('user_id');
			$data = array(
			'user_id' => $user_id
		);

			$this->M_user->add_konfirmasi($file);
			$this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
				  Selamat Akun Telah Terdaftar, Silahkan Login!!
				</div>');
			redirect('user/selesai/'.$data['user_id'], $data);
			}
		}
	
	}
	public function selesai($id)
	{
		if ($this->M_auth->is_logged_in()) {
			$where = $this->uri->segment(3);
			$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
			$data['selesai'] = $this->M_user->selesai($where);
			$data['syarat'] = $this->db->get('syarat')->result_array();
			// $data['menu'] = $this->M_admin->menu();
			$this->load->view('user/selesai', $data);
		}else{
			redirect('auth/index');
		}
	}



}
