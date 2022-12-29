<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_pekerjaan extends CI_Controller {

	
	public function index()
	{
		$this->data['data_pencari_kerja'] = $this->list_pekerjaan_m->get_all();
		$this->data['subview']='list_pekerjaan/main';
		$this->load->view('template/main',$this->data);
	}
	public function form($id)
	{
		$this->data['data_list_pekerjaan'] = $this->list_pekerjaan_m->get_id($id);
		$this->load->view('list_pekerjaan/form', $this->data);
	}

	public function form_tambah()
	{
		$this->load->view('list_pekerjaan/tambah');
	}

	public function save()
	{
		$this->list_pekerjaan_m->save($this->input->post());

		redirect(base_url().'list_pekerjaan');
	}
	public function delete($id)
	{
		$this->list_pekerjaan_m->delete($id);

		redirect(base_url().'list_pekerjaan');
	}
	public function insert()
	{
		$this->list_pekerjaan_m->insert($this->input->post());
		redirect(base_url().'list_pekerjaan');
	}
}
