<?php

class Model_kategori extends CI_Model
	{
		public function tampil_kategori()
		{
			return $this->db->get('kategori');
		}
		public function tambah_kategori($data,$table)
		{
			$this->db->insert($table,$data);
		}
	}