<?php

class Crud extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('p_data');
		$this->load->helper('url');
	}
	function index(){
		$data['mhs']=$this->p_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}
	function tambah(){
		$this->load->view('v_input');
	}
	function tambah_aksi(){
		$nim= $this->input->post('nim');
		$nama= $this->input->post('nama');
		$jk= $this->input->post('jk');
		$goldar= $this->input->post('goldar');

		$data=array(
			'nim'=> $nim,
			'nama'=> $nama,
			'jk'=> $jk,
			'goldar'=> $goldar
			);
		var_dump($data);
		$this->p_data->input_data($data,'mhs');
		redirect('crud/index');
	}
	function hapus($nim){
		$where=array('nim'=>$nim);
		$this->p_data->hapus_data($where,'mhs');
		redirect('crud/index');
	}
	function edit($nim){
		$where=array('nim'=>$nim);
		$data['mhs']=$this->p_data->edit_data($where,'mhs')->result();
		$this->load->view('v_edit',$data);
	}
	function update(){
		$nim=$this->input->post('nim');
		$nama=$this->input->post('nama');
		$jk=$this->input->post('jk');
		$goldar=$this->input->post('goldar');

		$data=array(
			'nim'=>$nim,
			'nama'=>$nama,
			'jk'=>$jk,
			'goldar'=>$goldar
			);

		$where=array(
			'nim'=>$nim
			);

		$this->p_data->update_data($where,$data,'mhs');
		redirect('crud/index');
	}
	function tampilgolA(){
		$data = $this->p_data->getGolA();
        $data = array('data' => $data);
        $this->load->view('v_tampilgolA',$data);
	}
	function tampilgolB(){
		$data = $this->p_data->getGolB();
        $data = array('data' => $data);
		$this->load->view('v_tampilgolB',$data);
	}
	function tampilgolAB(){
		$data = $this->p_data->getGolAB();
        $data = array('data' => $data);
		$this->load->view('v_tampilgolAB',$data);
	}
	function tampilgolO(){
		$data = $this->p_data->getGolO();
        $data = array('data' => $data);
		$this->load->view('v_tampilgolO',$data);
	}
}
?>