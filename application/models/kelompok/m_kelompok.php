<?php
class M_kelompok extends CI_Model {
		function __construct(){
		parent::__construct();
		}
		function insert_kelompok($data){
			$this->db->insert('kelompok', $data);
		}
		function select_all(){
			$this->db->select('*');
			$this->db->from('kelompok');
			#$this->db->order_by('date_modified', 'desc');
			return $this->db->get();
		}
		function select_id($id_kelompok){
			$this->db->select('*');
			$this->db->from('kelompok');
			$this->db->where('id_kelompok', $id_kelompok);
			return $this->db->get();
		}
		function update_agenda($id_agenda, $data){
			$this->db->where('id_agenda', $id_agenda);
			$this->db->update('agenda', $data);
		}
		function delete_agenda($id_agenda){
			$this->db->where('id_agenda', $id_agenda);
			$this->db->delete('agenda');
		}
		// function yang digunakan oleh paginationsample
		function select_all_paging($limit=array()){
			$this->db->select('*');
			$this->db->from('agenda');
			$this->db->order_by('date_modified', 'desc');
			if ($limit != NULL)
			$this->db->limit($limit['perpage'], $limit['offset']);
			return $this->db->get();
		}
}
