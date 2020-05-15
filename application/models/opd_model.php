<?php 
class opd_model extends CI_Model{


	public function get_opd_records($gender)
	{

		$this->db->where('gender',$gender);
		$this->db->order_by('id','DESC');
		$query = $this->db->get('opd');
		return $query;
	}

	public function get_all()
	{
		$query = $this->db->get('opd');
		return $query;
	}

	public function single_record($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('opd');
		return $query->row();
	}

	public function insert($data)
	{
		$this->db->insert('opd',$data);
	}

	public function delete($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->delete('opd');
	}

	public function update($data,$id)
	{
		$this->db->where('id',$id);
		$this->db->update('opd',$data);
	}

}

?>