<?php
class operation_model extends CI_Model{

	public function insert($data)
	{
		$this->db->insert('operation',$data);
	}


	public function get_opt()
	{
		$query = $this->db->get('operation');
		return $query;
	}

	public function single_record($id)
	{
		$this->db->where('opt_id',$id);
		$query = $this->db->get('operation');	
		return $query->row();
	}

	public function update($data,$id)
	{
		$this->db->where('opt_id',$id);
		$this->db->update('operation',$data);
	}

	public function delete($id)
	{
		$this->db->where('opt_id',$id);
		$this->db->delete('operation');
	}
}

?>