<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	public function add_paket()
	{
		$file = $this->upload->data();
		$image = $file['file_name'];

		$data = [
			'nama' => htmlspecialchars($this->input->post('nama', true)),
			'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
			'kategori' => htmlspecialchars($this->input->post('kategori', true)),
			'harga' => htmlspecialchars($this->input->post('harga', true)),
			'gambar' => $image

		];
		return $this->db->insert('tb_paket', $data);
	}
	public function paket()
	{
		$this->db->select('*');
		$this->db->from('tb_paket');
		$this->db->join('kategori', 'tb_paket.kategori = kategori.id_kat');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function show_paket($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
	public function update_paket($where, $data, $table)
	{
		return $this->db->update('tb_paket', $data, $where);
	}
	public function delete_paket($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}



	public function add_custom()
	{
		$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'harga' => htmlspecialchars($this->input->post('harga', true)),
				'gambar' => htmlspecialchars($this->input->post('gambar', true))

			];
		return $this->db->insert('tb_custom', $data);
	}

	public function menu()
	{
		$this->db->select('*');
		$this->db->from('tb_paket');
		$this->db->join('kategori', 'tb_paket.kategori = kategori.id_kat');
		$query = $this->db->get();
		return $query->result_array();
	}




	public function add_order()
	{
		$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'harga' => htmlspecialchars($this->input->post('harga', true)),
				'tlp' => htmlspecialchars($this->input->post('tlp', true)),
				'alamat' => htmlspecialchars($this->input->post('alamat', true)),
				'tgl_pem' => htmlspecialchars($this->input->post('tgl_pem', true)),
				'tgl_peng' => htmlspecialchars($this->input->post('tgl_peng', true)),
				'orderan' => htmlspecialchars($this->input->post('orderan', true)),

			];
		return $this->db->insert('tb_order', $data);
	}

	public function konfirmasi()
	{
		$this->db->select('*');
		$this->db->from('tb_konfirmasi');
		$this->db->join('tb_order', 'tb_konfirmasi.kode_order = tb_order.kode_order');
		$this->db->join('status', 'status.id_status = tb_konfirmasi.status');
		// $this->db->where('tb_konfirmasi.kode_order', $where);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function add_konfirmasi()
	{
		$data = [
				'tgl' => htmlspecialchars($this->input->post('tgl', true)),
				'rek_from' => htmlspecialchars($this->input->post('rek_from', true)),
				'rek_to' => htmlspecialchars($this->input->post('rek_to', true)),
				'rek_nama' => htmlspecialchars($this->input->post('rek_nama', true)),
				'status' => htmlspecialchars($this->input->post('status', true)),
				'nominal' => htmlspecialchars($this->input->post('nominal', true)),
				'tagihan' => htmlspecialchars($this->input->post('tagihan', true)),
				'sisa' => htmlspecialchars($this->input->post('sisa', true)),

			];
		return $this->db->insert('tb_konfirmasi', $data);
	}
	public function delete_konfirmasi($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function show_pelanggan($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
	public function update_pelanggan($where, $data, $table)
	{
		return $this->db->update('tb_pelanggan', $data, $where);
	}
	public function delete_pelanggan($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function show_pemesanan($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
	public function update_pemesanan($where, $data, $table)
	{
		return $this->db->update('tb_pemesanan', $data, $where);
	}
	public function delete_pemesanan($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function show_custom($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
	public function update_custom($where, $data, $table)
	{
		return $this->db->update('tb_custom', $data, $where);
	}
	public function delete_custom($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function show_order($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
	public function update_order($where, $data, $table)
	{
		return $this->db->update('tb_order', $data, $where);
	}
	public function delete_order($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function show_konfirmasi($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
	public function update_konfirmasi($where, $data, $table)
	{
		return $this->db->update('tb_konfirmasi', $data, $where);
	}

	public function show_laporan($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
	public function update_laporan($where, $data, $table)
	{
		return $this->db->update('tb_laporan', $data, $where);
	}
	public function delete_laporan($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function show_rating($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
	public function update_rating($where, $data, $table)
	{
		return $this->db->update('tb_rating', $data, $where);
	}
	public function delete_rating($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function update_syarat($where, $data, $table)
	{
		return $this->db->update('syarat', $data, $where);
	}
	public function show_syarat($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
	
}
