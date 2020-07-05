<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function show_paket($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
	public function add_konfirmasi($filename='')
	{
		$data = [
				'kode_order' => htmlspecialchars($this->input->post('kode_order', true)),
				'tgl' => htmlspecialchars($this->input->post('tgl', true)),
				'rek_from' => htmlspecialchars($this->input->post('rek_from', true)),
				'rek_to' => htmlspecialchars($this->input->post('rek_to', true)),
				'rek_nama' => htmlspecialchars($this->input->post('rek_nama', true)),
				'status' => htmlspecialchars($this->input->post('status', true)),
				'nominal' => htmlspecialchars($this->input->post('nominal', true)),
				'tagihan' => htmlspecialchars($this->input->post('tagihan', true)),
				'sisa' => htmlspecialchars($this->input->post('sisa', true)),
				// 'bukti' => htmlspecialchars($this->input->post('bukti', true)),
				'bukti' => $filename,
				// 'orderan' => htmlspecialchars($this->input->post('orderan', true)),

			];
		return $this->db->insert('tb_konfirmasi', $data);
	}
	public function add_order()
	{
		$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'kode_order' => htmlspecialchars($this->input->post('kode_order', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'harga' => htmlspecialchars($this->input->post('harga', true)),
				'tlp' => htmlspecialchars($this->input->post('tlp', true)),
				'alamat' => htmlspecialchars($this->input->post('alamat', true)),
				// 'tgl_pem' => htmlspecialchars($this->input->post('tgl_pem', true)),
				'tgl_peng' => htmlspecialchars($this->input->post('tgl_peng', true)),
				'orderan' => htmlspecialchars($this->input->post('orderan', true)),


			];
		return $this->db->insert('tb_order', $data);
	}
	public function show_order($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
	public function selesai($where='')
	{
		$this->db->select('*');
		$this->db->from('tb_konfirmasi');
		$this->db->join('tb_order', 'tb_konfirmasi.kode_order = tb_order.kode_order');
		$this->db->join('status', 'status.id_status = tb_konfirmasi.status');
		$this->db->where('tb_konfirmasi.user_id', $where);
		$query = $this->db->get();
		return $query->result_array();
	}

	
}
