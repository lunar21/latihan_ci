<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {

	// public function get_Data($table)
	// {
	// 	return $this->db->get($table);
	// 	#code...
	// }

	public function get_Data($id_barang = null)
	{
		if ($id_barang != null) {
			$this->db->select('t_barang.*, tb_kategori.kategori as kategori');
			$this->db->from('t_barang');
			$this->db->join('tb_kategori','tb_kategori.id_kategori=t_barang.id_kategori','left outer');
			$this->db->where('id_barang', $id_barang);

			$get = $this->db->get();
			if ($get->num_rows() == 1) {
				return $get->result_array();
				# code...
			}else{
				return false;
			}
			# code...
		}else{
			$this->db->select('*');
			$this->db->from('t_barang');
			$this->db->join('tb_kategori','tb_kategori.id_kategori=t_barang.id_kategori','left outer');

			$get = $this->db->get();
			if ($get->num_rows() == 1) {
				return $get->result_array();
				# code...
			}else{
				return false;
			}

		}
		# code...
	}

	public function input_Data($table,$data)
	{
		$this->db->insert($table,$data);
		#code...
	}

	public function edit_Data($table,$where)
	{
		return $this->db->get_where($table,$where);
		# code...
	}

	public function update_Data($table,$data,$where)
	{
		return $this->db->update($table,$data,$where);
		# code...
	}

	public function delete_Data($table,$where)
	{
		$this->db->delete($table,$where);
		# code...
	}

	public function join_Data()
	{
		$this->db->select('tb_barang.*,tb_kategori.kategori as kategori');
		$this->db->from('tb_barang');
		$this->db->join('tb_kategori','tb_kategori.id_kategori = tb_barang.id_kategori','left outer');

		return $this->db->get();
		# code...
	}

	public function join_Edit($where)
	{
		$this->db->select('tb_barang.*,tb_kategori.kategori as kategori');
		$this->db->from('tb_barang');
		$this->db->join('tb_kategori','tb_kategori.id_kategori = tb_barang.id_kategori','left outer');

		return $this->db->get();
		# code...
	}

}
