<?php

class Model_partner extends CI_Model
	{
		public function tampil_partner()
		{
			return $this->db->get('partner');
		}
		public function tambah_partner($data,$table)
		{
			$this->db->insert($table,$data);
		}
		function ambil_partner()
		{
			return $this->db->get('partner')->num_rows();
		}
		public function edit_partner($where,$table)
		{
			return $this->db->get_where($table,$where);
		}
		public function update_partner($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
		public function hapus_partner($where,$table)
		{
			$this->db->where($where);
			$this->db->delete($table);
		}
	}