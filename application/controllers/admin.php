<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data['penduduk']=$this->M_penduduk->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('v_pdk',$data);
		$this->load->view('templates/footer');
	}
	public function tambah_data()
	{
		$nama_anak=$this->input->post('nama_anak');
		$umur=$this->input->post('umur');
		$jenis_kelamin=$this->input->post('jenis_kelamin');
		$nama_orangtua=$this->input->post('nama_orangtua');
		$alamat=$this->input->post('alamat');
		$data = array(	'nama_anak' =>$nama_anak ,
						'umur' =>$umur,
						'jenis_kelamin' =>$jenis_kelamin ,
						'nama_orangtua' =>$nama_orangtua,
						'alamat' =>$alamat,
						 );
		$this->M_penduduk->input_data($data);
		redirect('admin/index');
	}

	public function hapus($id){
		$where = array('id' => $id , );
		$this->M_penduduk->hapus_data($where,'tb_pos');
		redirect('admin/index');

	}

	public function edit($id){
		$where = array('id' => $id , );
		$data['penduduk']=$this->M_penduduk->edit_data($where,'tb_pos');
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit',$data);
		$this->load->view('templates/footer');
	}

	public function update(){

		$id=$this->input->post('id');
		$nama_anak=$this->input->post('nama_anak');
		$umur=$this->input->post('umur');
		$jenis_kelamin=$this->input->post('jenis_kelamin');
		$nama_orangtua=$this->input->post('nama_orangtua');
		$alamat=$this->input->post('alamat');
		$data = array(	'nama_anak' =>$nama_anak ,
						'umur' =>$umur,
						'jenis_kelamin' =>$jenis_kelamin,
						'nama_orangtua' =>$nama_orangtua,
						'alamat' =>$alamat ,
						 );
		$where = array('id' =>$id , );
		$this->M_penduduk->update_data($where,$data,'tb_pos');
		redirect('admin/index');
	}

public function print(){

	$data['penduduk']=$this->M_penduduk->tampil_data()->result();
	$this->load->view('print_penduduk',$data);
}
public function pdf(){
	$this->load->library('dompdf_gen');
		$data['penduduk']= $this->M_penduduk->tampil_data()->result();
		$this->load->view('laporan_pdf',$data);

		$paper_size='A4';
		$orientation='landscape';
		$html=$this->output->get_output();

		$this->dompdf->set_paper($paper_size,$orientation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream('laporan_datapenduduk.pdf',array('Attachment' => 0 ));



}
}