<?php

class Model_blog extends CI_model
	{
		public function tampil_blog()
		{
			return $this->db->get('blog');
		}
		public function tambah_blog($data,$table)
		{
			$this->db->insert($table,$data);
		}
		function ambil_blog()
		{
			return $this->db->get('blog')->num_rows();
		}
		public function edit_blog($where,$table)
		{
			return $this->db->get_where($table,$where);
		}
		public function update_blog($where,$data,$table)
		{
			$this->db->where($where);
			$this->db->update($table,$data);
		}
		public function hapus_blog($where,$table)
		{
			$this->db->where($where);
			$this->db->delete($table);
		}
    	public function get($limit, $start){
    	$this->db->order_by('id_blog', 'desc');
        $query = $this->db->get('blog', $limit, $start);
        return $query;
    }
		function limit()
		{
			$this->db->select('*');
			$this->db->from('blog');
			$this->db->limit(6);
			$query = $this->db->get();
			return $query;
		}
	}