<?php
class Model_team Extends CI_Model
{
	public function tampil_team()
	{
		return $this->db->get('team');
	}
	public function tambah_team($data,$table)
	{
		$this->db->insert($table,$data);
	}
		function ambil_team()
		{
			return $this->db->get('team')->num_rows();
		}
	public function edit_team($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	public function update_team($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function hapus_team($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
    public function get($limit, $start){
    	$this->db->order_by('id_team', 'desc');
        $query = $this->db->get('team', $limit, $start);
        return $query;
    }
}