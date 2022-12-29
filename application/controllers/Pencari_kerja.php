<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pencari_kerja extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->data['data_pencari_kerja'] = $this->pencari_kerja_m->get_all();
		$this->data['subview']='pencari_kerja/main';
		$this->load->view('template/main',$this->data);
	}

		public function form($id)
	{
		$this->data['data_pencari_kerja'] = $this->pencari_kerja_m->get_id($id);
		$this->data['subview']='pencari_kerja/form';
		$this->load->view('template/main',$this->data);
	}
	public function form_tambah()
	{
		$this->data['subview']='pencari_kerja/tambah';
		$this->load->view('template/main',$this->data);
	}
	

	public function save()
	{
		$this->pencari_kerja_m->save($this->input->post());

		redirect(base_url().'pencari_kerja');
	}

		public function delete($id)
	{
		$this->pencari_kerja_m->delete($id);

		redirect(base_url().'pencari_kerja');
	}
	public function insert()
	{
		$this->pencari_kerja_m->insert($this->input->post());
		redirect(base_url().'pencari_kerja');
	}
}
