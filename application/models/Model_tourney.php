<?php

class Model_tourney extends CI_model
	{
		public function tampil_tourney()
		{
			return $this->db->get('tournament');
		}
		public function tampil_tipe()
		{
			return $this->db->get('tipe');
		}
		public function tambah_tourney($data,$table)
		{
			$this->db->insert($table,$data);
		}
		public function ambil_tourney()
		{
			return $this->db->get('tournament')->num_rows();
		}
		public function edit_tourney($where,$table)
		{
			return $this->db->get_where($table,$where);
		}
		public function update_tourney($where,$data,$table)
		{
			$this->db->where($where);
			$this->db->update($table,$data);
		}
		public function hapus_tourney($where,$table)
		{
			$this->db->where($where);
			$this->db->delete($table);
		}
    public function get($limit, $start){
    	$this->db->order_by('id', 'desc');
        $query = $this->db->get('tournament', $limit, $start);
        return $query;
    }
		function limit()
		{
			$this->db->select('*');
			$this->db->from('tournament');
			$this->db->limit(6);
			$query = $this->db->get();
			return $query;
		}
	}
	
