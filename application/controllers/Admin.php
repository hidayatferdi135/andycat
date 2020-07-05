<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin');
		$this->load->model('M_auth');

	}

	public function index()
	{
		if ($this->M_auth->is_logged_in()) {
			if ($this->M_auth->is_role() == 1) {
				$data['title'] = 'Andy Catering | Dashboard';
			$data['pemesanan'] = $this->db->get('tb_pemesanan')->result_array();
			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('admin/index', $data);
			$this->load->view('template/footer', $data);
			}else{
				redirect('auth/index');
			}
		}else{
			redirect('Auth/index');
		}
	}

	// paket
	public function paket()
	{
		if ($this->M_auth->is_logged_in()) {
			if ($this->M_auth->is_role() == 1) {
				$data['paket'] = $this->M_admin->paket();
			$data['title'] = 'Andy Catering | Paket';
			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('admin/paket', $data);
			$this->load->view('template/footer', $data);
			}else{
				redirect('auth/index');
			}
		}else{
			redirect('auth/index');
		}
	}
	public function add_paket()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');
		$this->form_validation->set_rules('harga', 'Harga', 'trim|required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
		// $this->form_validation->set_rules('gambar', 'Gambar', 'trim|required');
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Andy Catering | Tambah Paket';
			$data['kategori'] = $this->db->get('kategori')->result_array();
			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('admin/paket-add', $data);
			$this->load->view('template/footer', $data);
		}else{
			$config['upload_path'] = 'assets/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']     = '3000';
			$config['max_width'] = '2000';
			$config['max_height'] = '2000';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				echo $this->upload->display_errors();
			}else{

				// $file = $this->upload->data('file_name');
			// $image = $file['file_name'];

			// $data = [
			// 	'nama' => htmlspecialchars($this->input->post('nama', true)),
			// 	'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
			// 	'kategori' => htmlspecialchars($this->input->post('kategori', true)),
			// 	'harga' => htmlspecialchars($this->input->post('harga', true)),
			// 	'gambar' => $image

			// ];
			// $this->db->insert('tb_paket', $data);

			$this->M_admin->add_paket();
			$this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
				  Selamat Akun Telah Terdaftar, Silahkan Login!!
				</div>');
			redirect('admin/paket');
			}
		}
	
	}
	public function show_paket($id)
	{
		if ($this->M_auth->is_logged_in()) {
			if ($this->M_auth->is_role() == 1) {
				$where = array('id_paket' => $id);
			$data['paket'] = $this->M_admin->show_paket($where, 'tb_paket')->result();
			$data['title'] = 'Andy Catering | Edit Paket';
			$data['kategori'] = $this->db->get('kategori')->result_array();
			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('admin/paket-edit', $data);
			$this->load->view('template/footer', $data);
			}else{
				redirect('auth/index');
			}
		}else{
			redirect('auth/index');
		}
	}
	public function update_paket()
	{
		$id_paket = $this->input->post('id_paket');
		$nama = $this->input->post('nama');
		$deskripsi = $this->input->post('deskripsi');
		$kategori = $this->input->post('kategori');
		$harga = $this->input->post('harga');
		$gambar = $this->input->post('gambar');
		$old = $this->input->post('old');

		if (empty($gambar)) {
		    $data = array(
			'nama' => $nama,
			'deskripsi' => $deskripsi,
			'kategori' => $kategori,
			'harga' => $harga,
			'gambar' => $old,
			);

			$where = array(
				'id_paket' => $id_paket
			);

			$this->M_admin->update_paket($where, $data, 'tb_paket');
			// $this->session->set_flashdata('paket');
			redirect('Admin/paket');
		}else{
		   $data = array(
			'nama' => $nama,
			'deskripsi' => $deskripsi,
			'kategori' => $kategori,
			'harga' => $harga,
			'gambar' => $gambar,
			);

			$where = array(
				'id_paket' => $id_paket
			);

			$this->M_admin->update_paket($where, $data, 'tb_paket');
			// $this->session->set_flashdata('paket');
			redirect('Admin/paket');
		}

		// $config['upload_path'] = 'assets/';
		// $config['allowed_types'] = 'gif|jpg|png';
		// $config['max_size']     = '3000';
		// $config['max_width'] = '2000';
		// $config['max_height'] = '2000';

		// $this->load->library('upload', $config);
		// if (!$this->upload->do_upload('gambar')) {
		// 	echo $this->upload->display_errors();
		// }else{
		// $file = $this->upload->data();
		// $image = $file['file_name'];
	}
	public function delete_paket($id)
	{
		$where = array('id_paket' => $id);
		$this->M_admin->delete_paket($where, 'tb_paket');
		$this->session->set_flashdata('pesan', '
				  <script>
				    Swal.fire({
				    title: "SUCCESS",
				    text: "Data telah dihapus",
				    type: "success",
				    confirmButtonText: "Cool"
				    });
				  </script>
				');
		redirect('admin/paket');

	}

	// pelanggan
	public function pelanggan()
	{
		if ($this->M_auth->is_logged_in()) {
			if ($this->M_auth->is_role() == 1) {
				$data['title'] = 'Andy Catering | Pelanggan';
			$data['pelanggan'] = $this->db->get('tb_pelanggan')->result_array();
			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('admin/pelanggan', $data);
			$this->load->view('template/footer', $data);
			}else{
				redirect('auth/index');
			}
		}else{
			redirect('auth/index');
		}
	}
	public function show_pelanggan($id)
	{
		if ($this->M_auth->is_logged_in()) {
			if ($this->M_auth->is_role() == 1) {
				$where = array('id_pelanggan' => $id);
			$data['pelanggan'] = $this->M_admin->show_pelanggan($where, 'tb_pelanggan')->result();
			$data['title'] = 'Andy Catering | Edit Pelanggan';
			// $data['kategori'] = $this->db->get('kategori')->result_array();
			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('admin/pelanggan-edit', $data);
			$this->load->view('template/footer', $data);
			}else{
				redirect('auth/index');
			}
		}else{
			redirect('auth/index');
		}
	}
	public function update_pelanggan()
	{
		$id_pelanggan = $this->input->post('id_pelanggan');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$tlp = $this->input->post('tlp');
		$alamat = $this->input->post('alamat');
		$data = array(
			'nama' => $nama,
			'email' => $email,
			'tlp' => $tlp,
			'alamat' => $alamat,
		);

		$where = array(
			'id_pelanggan' => $id_pelanggan
		);

		$this->M_admin->update_pelanggan($where, $data, 'tb_pelanggan');
		// $this->session->set_flashdata('paket');
		redirect('Admin/pelanggan');
	}
	public function delete_pelanggan($id)
	{
		$where = array('id_pelanggan' => $id);
		$this->M_admin->delete_pelanggan($where, 'tb_pelanggan');
		$this->session->set_flashdata('pesan', '
				  <script>
				    Swal.fire({
				    title: "SUCCESS",
				    text: "Data telah dihapus",
				    type: "success",
				    confirmButtonText: "Cool"
				    });
				  </script>
				');
		redirect('admin/pelanggan');

	}

	// pemesanan
	public function pemesanan()
	{
		if ($this->M_auth->is_logged_in()) {
			if ($this->M_auth->is_role() == 1) {
				$data['title'] = 'Andy Catering | Pemesanan';
				$data['pemesanan'] = $this->db->get('tb_pemesanan')->result_array();
				$this->load->view('template/header', $data);
				$this->load->view('template/sidebar', $data);
				$this->load->view('template/topbar', $data);
				$this->load->view('admin/pemesanan', $data);
				$this->load->view('template/footer', $data);
			}else{
				redirect('auth/index');
			}
		}else{
			redirect('auth/index');
		}
	}
	public function show_pemesanan($id)
	{
		if ($this->M_auth->is_logged_in()) {
			if ($this->M_auth->is_role() == 1) {
				$where = array('id_pemesanan' => $id);
				$data['pemesanan'] = $this->M_admin->show_pemesanan($where, 'tb_pemesanan')->result();
				$data['title'] = 'Andy Catering | Edit Pemesanan';
				// $data['kategori'] = $this->db->get('kategori')->result_array();
				$this->load->view('template/header', $data);
				$this->load->view('template/sidebar', $data);
				$this->load->view('template/topbar', $data);
				$this->load->view('admin/pemesanan-edit', $data);
				$this->load->view('template/footer', $data);
			}else{
				redirect('auth/index');
			}
		}else{
			redirect('auth/index');
		}
	}
	public function update_pemesanan()
	{
		// $config['upload_path'] = 'assets/';
		// $config['allowed_types'] = 'gif|jpg|png';
		// $config['max_size']     = '3000';
		// $config['max_width'] = '2000';
		// $config['max_height'] = '2000';

		// $this->load->library('upload', $config);
		// if (!$this->upload->do_upload('bukti')) {
		// 	echo $this->upload->display_errors();
		// }else{
		// 	$file = $this->upload->data();
		// $image = $file['file_name'];

		$id_pemesanan = $this->input->post('id_pemesanan');
		$nama = $this->input->post('nama');
		$tgl = $this->input->post('tgl');
		$waktu = $this->input->post('waktu');
		$alamat = $this->input->post('alamat');
		$bukti = $this->input->post('bukti');


		$data = array(
			'nama' => $nama,
			'tgl' => $tgl,
			'waktu' => $waktu,
			'alamat' => $alamat,
			'bukti' => $bukti,

		);

		$where = array(
			'id_pemesanan' => $id_pemesanan
		);

		$this->M_admin->update_pemesanan($where, $data, 'tb_pemesanan');
		// $this->session->set_flashdata('paket');
		redirect('Admin/pemesanan');
	}
	public function delete_pemesanan($id)
	{
		$where = array('id_pemesanan' => $id);
		$this->M_admin->delete_pemesanan($where, 'tb_pemesanan');
		$this->session->set_flashdata('pesan', '
				  <script>
				    Swal.fire({
				    title: "SUCCESS",
				    text: "Data telah dihapus",
				    type: "success",
				    confirmButtonText: "Cool"
				    });
				  </script>
				');
		redirect('admin/pemesanan');

	}

	// custom
	public function custom()
	{
		if ($this->M_auth->is_logged_in()) {
			if ($this->M_auth->is_role() == 1) {
				$data['title'] = 'Andy Catering | Custom';
				$data['custom'] = $this->db->get('tb_custom')->result_array();
				$this->load->view('template/header', $data);
				$this->load->view('template/sidebar', $data);
				$this->load->view('template/topbar', $data);
				$this->load->view('admin/custom', $data);
				$this->load->view('template/footer', $data);
			}else{
				redirect('auth/index');
			}
		}else{
			redirect('auth/index');
		}
	}
	public function add_custom()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('harga', 'Harga', 'trim|required');
		$this->form_validation->set_rules('gambar', 'Gambar', 'trim|required');
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Andy Catering | Tambah Custom';
			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('admin/custom-add', $data);
			$this->load->view('template/footer', $data);
		}else{
			$this->M_admin->add_custom();
			$this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
				  Selamat Akun Telah Terdaftar, Silahkan Login!!
				</div>');
			redirect('admin/custom');
		}
	
	}
	public function show_custom($id)
	{
		if ($this->M_auth->is_logged_in()) {
			if ($this->M_auth->is_role() == 1) {
				$where = array('id_custom' => $id);
				$data['custom'] = $this->M_admin->show_custom($where, 'tb_custom')->result();
				$data['title'] = 'Andy Catering | Edit Custom';
				// $data['kategori'] = $this->db->get('kategori')->result_array();
				$this->load->view('template/header', $data);
				$this->load->view('template/sidebar', $data);
				$this->load->view('template/topbar', $data);
				$this->load->view('admin/custom-edit', $data);
				$this->load->view('template/footer', $data);
			}else{
				redirect('auth/index');
			}
		}else{
			redirect('auth/index');
		}
	}
	public function update_custom()
	{
		// $config['upload_path'] = 'assets/';
		// $config['allowed_types'] = 'gif|jpg|png';
		// $config['max_size']     = '3000';
		// $config['max_width'] = '2000';
		// $config['max_height'] = '2000';

		// $this->load->library('upload', $config);
		// if (!$this->upload->do_upload('image')) {
		// 	echo $this->upload->display_errors();
		// }else{
		// 	$file = $this->upload->data();
		// 	$image = $file['file_name'];

			$id_custom = $this->input->post('id_custom');
			$nama = $this->input->post('nama');
			$harga = $this->input->post('harga');
			$gambar = $this->input->post('gambar');
			$old = $this->input->post('old');
			if (empty($gambar)) {
				$data = array(
				'nama' => $nama,
				'harga' => $harga,
				'gambar' => $old,
			);

			$where = array(
				'id_custom' => $id_custom
			);

			$this->M_admin->update_custom($where, $data, 'tb_custom');
			// $this->session->set_flashdata('paket');
			redirect('Admin/custom');
			}else{
				$data = array(
				'nama' => $nama,
				'harga' => $harga,
				'gambar' => $gambar,
			);

			$where = array(
				'id_custom' => $id_custom
			);

			$this->M_admin->update_custom($where, $data, 'tb_custom');
			// $this->session->set_flashdata('paket');
			redirect('Admin/custom');
			}
		}
	public function delete_custom($id)
	{
		$where = array('id_custom' => $id);
		$this->M_admin->delete_custom($where, 'tb_custom');
		$this->session->set_flashdata('pesan', '
				  <script>
				    Swal.fire({
				    title: "SUCCESS",
				    text: "Data telah dihapus",
				    type: "success",
				    confirmButtonText: "Cool"
				    });
				  </script>
				');
		redirect('admin/custom');

	}

	// order

	public function order()
	{
		if ($this->M_auth->is_logged_in()) {
			if ($this->M_auth->is_role() == 1) {
				$data['title'] = 'Andy Catering | Order';
				$data['order'] = $this->db->get('tb_order')->result_array();
				$this->load->view('template/header', $data);
				$this->load->view('template/sidebar', $data);
				$this->load->view('template/topbar', $data);
				$this->load->view('admin/order', $data);
				$this->load->view('template/footer', $data);
			}else{
				redirect('auth/index');
			}
		}else{
			redirect('auth/index');
		}
	}
	public function add_order()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('tlp', 'Telp', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('tgl_pem', 'Tgl1', 'trim|required');
		$this->form_validation->set_rules('tgl_peng', 'Tgl2', 'trim|required');
		$this->form_validation->set_rules('orderan', 'Order', 'trim|required');
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Andy Catering | Tambah Order';
			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('admin/order-add', $data);
			$this->load->view('template/footer', $data);
		}else{
			$this->M_admin->add_order();
			$this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
				  Selamat Akun Telah Terdaftar, Silahkan Login!!
				</div>');
			redirect('admin/order');
		}
	
	}
	public function show_order($id)
	{
		if ($this->M_auth->is_logged_in()) {
			if ($this->M_auth->is_role() == 1) {
				$where = array('id_order' => $id);
				$data['order'] = $this->M_admin->show_order($where, 'tb_order')->result();
				$data['title'] = 'Andy Catering | Edit Order';
				// $data['kategori'] = $this->db->get('kategori')->result_array();
				$this->load->view('template/header', $data);
				$this->load->view('template/sidebar', $data);
				$this->load->view('template/topbar', $data);
				$this->load->view('admin/order-edit', $data);
				$this->load->view('template/footer', $data);
			}else{
				redirect('auth/index');
			}
		}else{
			redirect('auth/index');
		}
	}
	public function update_order()
	{
		$id_order = $this->input->post('id_order');
		$nama = $this->input->post('nama');
		$tlp = $this->input->post('tlp');
		$alamat = $this->input->post('alamat');
		$tgl_pem = $this->input->post('tgl_pem');
		$tgl_peng = $this->input->post('tgl_peng');
		$orderan = $this->input->post('orderan');
		$harga = $this->input->post('harga');

		$data = array(
			'nama' => $nama,
			'tlp' => $tlp,
			'alamat' => $alamat,
			'tgl_pem' => $tgl_pem,
			'tgl_peng' => $tgl_peng,
			'orderan' => $orderan,
			'harga' => $harga,

		);

		$where = array(
			'id_order' => $id_order
		);

		$this->M_admin->update_order($where, $data, 'tb_order');
		// $this->session->set_flashdata('paket');
		redirect('Admin/order');
	}
	public function delete_order($id)
	{
		$where = array('id_order' => $id);
		$this->M_admin->delete_order($where, 'tb_order');
		$this->session->set_flashdata('pesan', '
				  <script>
				    Swal.fire({
				    title: "SUCCESS",
				    text: "Data telah dihapus",
				    type: "success",
				    confirmButtonText: "Cool"
				    });
				  </script>
				');
		redirect('admin/order');

	}

	// konfirmasi
	public function konfirmasi()
	{
		if ($this->M_auth->is_logged_in()) {
			if ($this->M_auth->is_role() == 1) {
				$data['title'] = 'Andy Catering | Konfirmasi';
				$data['konfirmasi'] = $this->M_admin->konfirmasi();
				$this->load->view('template/header', $data);
				$this->load->view('template/sidebar', $data);
				$this->load->view('template/topbar', $data);
				$this->load->view('admin/konfirmasi', $data);
				$this->load->view('template/footer', $data);
			}else{
				redirect('auth/index');
			}
		}else{
			redirect('auth/index');
		}
	}
	public function add_konfirmasi()
	{
		$this->form_validation->set_rules('tgl', 'Tgl', 'trim|required');
		$this->form_validation->set_rules('rek_from', 'RekFrom', 'trim|required');
		$this->form_validation->set_rules('rek_to', 'RekTo', 'trim|required');
		$this->form_validation->set_rules('rek_nama', 'RekNama', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');
		$this->form_validation->set_rules('nominal', 'Nominal', 'trim|required');
		$this->form_validation->set_rules('tagihan', 'Tagihan', 'trim|required');
		$this->form_validation->set_rules('sisa', 'Sisa', 'trim|required');
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Andy Catering | Konfirmasi';
			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('admin/konfirmasi-add', $data);
			$this->load->view('template/footer', $data);
		}else{
			$this->M_admin->add_konfirmasi();
			$this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
				  Selamat Akun Telah Terdaftar, Silahkan Login!!
				</div>');
			redirect('admin/konfirmasi');
		}
	
	}
	public function show_konfirmasi($id)
	{
		if ($this->M_auth->is_logged_in()) {
			if ($this->M_auth->is_role() == 1) {
				$where = array('id_konfirmasi' => $id);
				$data['konfirmasi'] = $this->M_admin->show_konfirmasi($where, 'tb_konfirmasi')->result();
				$data['status'] = $this->db->get('status')->result_array();
				$data['title'] = 'Andy Catering | Edit konfirmasi';
				// $data['kategori'] = $this->db->get('kategori')->result_array();
				$this->load->view('template/header', $data);
				$this->load->view('template/sidebar', $data);
				$this->load->view('template/topbar', $data);
				$this->load->view('admin/konfirmasi-edit', $data);
				$this->load->view('template/footer', $data);
			}else{
				redirect('auth/index');
			}
		}else{
			redirect('auth/index');
		}
	}
	public function update_konfirmasi()
	{
		$id_konfirmasi = $this->input->post('id_konfirmasi');
		$tgl = $this->input->post('tgl');
		$rek_from = $this->input->post('rek_from');
		$rek_to = $this->input->post('rek_to');
		$rek_nama = $this->input->post('rek_nama');
		$status = $this->input->post('status');
		$nominal = $this->input->post('nominal');
		$tagihan = $this->input->post('tagihan');
		$sisa = $this->input->post('sisa');

		$data = array(
			'tgl' => $tgl,
			'rek_from' => $rek_from,
			'rek_to' => $rek_to,
			'rek_nama' => $rek_nama,
			'status' => $status,
			'nominal' => $nominal,
			'tagihan' => $tagihan,
			'sisa' => $sisa,

		);

		$where = array(
			'id_konfirmasi' => $id_konfirmasi
		);

		$this->M_admin->update_konfirmasi($where, $data, 'tb_konfirmasi');
		// $this->session->set_flashdata('paket');
		redirect('Admin/konfirmasi');
	}
	public function delete_konfirmasi($id)
	{
		$where = array('id_konfirmasi' => $id);
		$this->M_admin->delete_konfirmasi($where, 'tb_konfirmasi');
		$this->session->set_flashdata('pesan', '
				  <script>
				    Swal.fire({
				    title: "SUCCESS",
				    text: "Data telah dihapus",
				    type: "success",
				    confirmButtonText: "Cool"
				    });
				  </script>
				');
		redirect('admin/konfirmasi');

	}

	public function laporan()
	{
		if ($this->M_auth->is_logged_in()) {
			if ($this->M_auth->is_role() == 1) {
				$data['title'] = 'Andy Catering | Laporan';
				$data['laporan'] = $this->db->get('tb_laporan')->result_array();
				$this->load->view('template/header', $data);
				$this->load->view('template/sidebar', $data);
				$this->load->view('template/topbar', $data);
				$this->load->view('admin/laporan', $data);
				$this->load->view('template/footer', $data);
			}else{
				redirect('auth/index');
			}
		}else{
			redirect('auth/index');
		}
	}
	public function show_laporan($id)
	{
		if ($this->M_auth->is_logged_in()) {
			if ($this->M_auth->is_role() == 1) {
				$where = array('id_laporan' => $id);
				$data['laporan'] = $this->M_admin->show_laporan($where, 'tb_laporan')->result();
				$data['title'] = 'Andy Catering | Edit laporan';
				// $data['kategori'] = $this->db->get('kategori')->result_array();
				$this->load->view('template/header', $data);
				$this->load->view('template/sidebar', $data);
				$this->load->view('template/topbar', $data);
				$this->load->view('admin/laporan-edit', $data);
				$this->load->view('template/footer', $data);
			}else{
				redirect('auth/index');
			}
		}else{
			redirect('auth/index');
		}
	}
	public function update_laporan()
	{
		$id_laporan = $this->input->post('id_laporan');
		$pemasukkan = $this->input->post('pemasukkan');
		$pengeluaran = $this->input->post('pengeluaran');
		$harga = $this->input->post('harga');
		$data = array(
			'pemasukkan' => $pemasukkan,
			'pengeluaran' => $pengeluaran,
			'harga' => $harga,

		);

		$where = array(
			'id_laporan' => $id_laporan
		);

		$this->M_admin->update_laporan($where, $data, 'tb_laporan');
		// $this->session->set_flashdata('paket');
		redirect('Admin/laporan');
	}
	public function delete_laporan($id)
	{
		$where = array('id_paket' => $id);
		$this->M_admin->delete_laporan($where, 'tb_laporan');
		$this->session->set_flashdata('pesan', '
				  <script>
				    Swal.fire({
				    title: "SUCCESS",
				    text: "Data telah dihapus",
				    type: "success",
				    confirmButtonText: "Cool"
				    });
				  </script>
				');
		redirect('admin/laporan');

	}

	// rating
	public function rating()
	{
		if ($this->M_auth->is_logged_in()) {
			if ($this->M_auth->is_role() == 1) {
				$data['title'] = 'Andy Catering | Rating';
				$data['rating'] = $this->db->get('tb_rating')->result_array();
				$this->load->view('template/header', $data);
				$this->load->view('template/sidebar', $data);
				$this->load->view('template/topbar', $data);
				$this->load->view('admin/rating', $data);
				$this->load->view('template/footer', $data);
			}else{
				redirect('auth/index');
			}
		}else{
			redirect('auth/index');
		}
	}
	public function show_rating($id)
	{
		if ($this->M_auth->is_logged_in()) {
			if ($this->M_auth->is_role() == 1) {
				$where = array('id_rating' => $id);
				$data['rating'] = $this->M_admin->show_rating($where, 'tb_rating')->result();
				$data['title'] = 'Andy Catering | Edit Rating';
				// $data['kategori'] = $this->db->get('kategori')->result_array();
				$this->load->view('template/header', $data);
				$this->load->view('template/sidebar', $data);
				$this->load->view('template/topbar', $data);
				$this->load->view('admin/rating-edit', $data);
				$this->load->view('template/footer', $data);
			}else{
				redirect('auth/index');
			}
		}else{
			redirect('auth/index');
		}
	}
	public function update_rating()
	{
		$id_rating = $this->input->post('id_rating');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$user = $this->input->post('user');
		$tanggapan = $this->input->post('tanggapan');
		$rating = $this->input->post('rating');

		$data = array(
			'nama' => $nama,
			'email' => $email,
			'user' => $user,
			'tanggapan' => $tanggapan,
			'rating' => $rating,

		);

		$where = array(
			'id_rating' => $id_rating
		);

		$this->M_admin->update_rating($where, $data, 'tb_rating');
		// $this->session->set_flashdata('paket');
		redirect('Admin/rating');
	}
	public function delete_rating($id)
	{
		$where = array('id_rating' => $id);
		$this->M_admin->delete_rating($where, 'tb_rating');
		$this->session->set_flashdata('pesan', '
				  <script>
				    Swal.fire({
				    title: "SUCCESS",
				    text: "Data telah dihapus",
				    type: "success",
				    confirmButtonText: "Cool"
				    });
				  </script>
				');
		redirect('admin/rating');

	}

	// bukti
	public function valid_bukti()
	{
		if ($this->M_auth->is_logged_in()) {
			if ($this->M_auth->is_role() == 1) {
				$data['title'] = 'Andy Catering | Validasi Bukti';
				$this->load->view('template/header', $data);
				$this->load->view('template/sidebar', $data);
				$this->load->view('template/topbar', $data);
				$this->load->view('admin/valid-bukti', $data);
				$this->load->view('template/footer', $data);
			}else{
				redirect('auth/index');
			}
		}else{
			redirect('auth/index');
		}
	}
	public function komentar()
	{
		if ($this->M_auth->is_logged_in()) {
			if ($this->M_auth->is_role() == 1) {
				$data['title'] = 'Andy Catering | Komentar dan Testi';
				$this->load->view('template/header', $data);
				$this->load->view('template/sidebar', $data);
				$this->load->view('template/topbar', $data);
				$this->load->view('admin/komentar', $data);
				$this->load->view('template/footer', $data);
			}else{
				redirect('auth/index');
			}
		}else{
			redirect('auth/index');
		}
	}
	public function syarat()
	{
		if ($this->M_auth->is_logged_in()) {
			if ($this->M_auth->is_role() == 1) {
				$data['title'] = 'Andy Catering | Syarat dan Ketentuan';
				$data['syarat'] = $this->db->get('syarat')->result_array();
				$this->load->view('template/header', $data);
				$this->load->view('template/sidebar', $data);
				$this->load->view('template/topbar', $data);
				$this->load->view('admin/syarat', $data);
				$this->load->view('template/footer', $data);
			}else{
				redirect('auth/index');
			}
		}else{
			redirect('auth/index');
		}
	}
	public function update_syarat()
	{
		$id_syarat = $this->input->post('id_syarat');
		$ketentuan = $this->input->post('ketentuan');
		$nomer = $this->input->post('nomer');
		$gambar = $this->input->post('logo');
		$old = $this->input->post('old');

		if (empty($gambar)) {
		    $data = array(
			'ketentuan' => $ketentuan,
			'nomer' => $nomer,
			'logo' => $old,
			);

			$where = array(
				'id_syarat' => $id_syarat
			);

			$this->M_admin->update_syarat($where, $data, 'syarat');
			// $this->session->set_flashdata('paket');
			redirect('Admin/syarat');
		}else{
		   $data = array(
			'ketentuan' => $ketentuan,
			'nomer' => $nomer,
			'logo' => $old,
			);

			$where = array(
				'id_syarat' => $id_syarat
			);

			$this->M_admin->update_syarat($where, $data, 'syarat');
			// $this->session->set_flashdata('paket');
			redirect('Admin/syarat');
		}

		// $config['upload_path'] = 'assets/';
		// $config['allowed_types'] = 'gif|jpg|png';
		// $config['max_size']     = '3000';
		// $config['max_width'] = '2000';
		// $config['max_height'] = '2000';

		// $this->load->library('upload', $config);
		// if (!$this->upload->do_upload('gambar')) {
		// 	echo $this->upload->display_errors();
		// }else{
		// $file = $this->upload->data();
		// $image = $file['file_name'];
	}

	public function show_syarat($id)
	{
		if ($this->M_auth->is_logged_in()) {
			if ($this->M_auth->is_role() == 1) {
				$where = array('id_syarat' => $id);
				$data['syarat'] = $this->M_admin->show_syarat($where, 'syarat')->result();
				$data['title'] = 'Andy Catering | Edit Syarat & Ketentuan';
				// $data['kategori'] = $this->db->get('')->result_array();
				$this->load->view('template/header', $data);
				$this->load->view('template/sidebar', $data);
				$this->load->view('template/topbar', $data);
				$this->load->view('admin/syarat-edit', $data);
				$this->load->view('template/footer', $data);
			}else{
				redirect('auth/index');
			}
		}else{
			redirect('auth/index');
		}
	}

	public function chat()
	{
		if ($this->M_auth->is_logged_in()) {
			if ($this->M_auth->is_role() == 1) {
				$data['title'] = 'Andy Catering | Halaman Kelola Chat';
				$this->load->view('template/header', $data);
				$this->load->view('template/sidebar', $data);
				$this->load->view('template/topbar', $data);
				$this->load->view('admin/chat', $data);
				$this->load->view('template/footer', $data);
			}else{
				redirect('auth/index');
			}
		}else{
			redirect('auth/index');
		}
	}
	
	
}
