<?php

class P_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('mhs');
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);	
	}

	function getWhere($table,$data){
		$res=$this->db->get_where($table, $data);
        return $res->result_array();
	}
	function getGolA(){
		$query=$this->db->query("SELECT * FROM mhs WHERE gol_darah='A'");
        return $query->result_array();
	}
	function getGolB(){
		$query=$this->db->query("SELECT * FROM mhs WHERE gol_darah='B'");
        return $query->result_array();
	}
	function getGolAB(){
		$query=$this->db->query("SELECT * FROM mhs WHERE gol_darah='AB'");
        return $query->result_array();
	}
	function getGolO(){
		$query=$this->db->query("SELECT * FROM mhs WHERE gol_darah='O'");
        return $query->result_array();
	}

}
?>