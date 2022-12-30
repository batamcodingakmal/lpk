<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulir extends Base_Controller {

	/**
     * List of formulirs
     *
     * @access 	public
     * @param 	
     * @return 	view
     */
	
	public function index()
	{
		$this->data['title'] = 'formulir';
		$this->data['subview'] = 'formulir/main';
		$this->load->view('components/main', $this->data);
	}

	/**
     * formulir Form
     *
     * @access 	public
     * @param 	
     * @return 	view
     */

	public function form()
	{
		$data['index'] = $this->input->post('index');
		 $this->load->model('program_m');
		$data['program'] = $this->program_m->all();
		$this->load->view('formulir/form', $data);
	}

	/**
     * Datagrid Data
     *
     * @access 	public
     * @param 	
     * @return 	json(array)
     */

	public function data()
	{
        header('Content-Type: application/json');
        $this->load->model('formulir_m');
		echo json_encode($this->formulir_m->getJson($this->input->post()));
	}

	/**
     * Validate Input
     *
     * @access 	public
     * @param 	
     * @return 	json(array)
     */

    public function validate()
	{
		$rules = [
			[
				'field' => 'program_id',
				'label' => 'form',
				'rules' => 'required'
			],
			[
				'field' => 'nama',
				'label' => 'form',
				'rules' => 'required'
			],
			[
				'field' => 'jenis_kelamin',
				'label' => 'form',
				'rules' => 'required'
			]
		];

		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run()) {
			header("Content-type:application/json");
			echo json_encode('success');
		} else {
			header("Content-type:application/json");
			echo json_encode($this->form_validation->get_all_errors());
		}
	}

	/**
     * Create Update Action
     *
     * @access 	public
     * @param 	
     * @return 	method
     */

	public function action()
	{
		if (!$this->input->post('id')) {
			$this->create();
		} else {
			$this->update();
		}
	}

	/**
     * Create a New formulir
     *
     * @access 	public
     * @param 	
     * @return 	json(string)
     */

	public function create()
	{



		$data['program_id'] 					= $this->input->post('program_id');
		$data['nama'] 							= $this->input->post('nama');
		$data['jenis_kelamin'] 					= $this->input->post('jenis_kelamin');
		$data['tgl_lahir'] 						=  date('Y-m-d', strtotime($this->input->post('tgl_lahir')));
		$data['no_wa'] 							= $this->input->post('no_wa');
		$data['upload_ktp'] 					= $this->input->post('upload_ktp');
		$data['upload_kk'] 						= $this->input->post('upload_kk');
		$data['pendidikan_terakhir'] 			= $this->input->post('pendidikan_terakhir');





		//log jangan ubah
		$data['created_at'] 		= date('Y-m-d H:i:s');
		$data['updated_at'] 		= date('Y-m-d H:i:s');
		$data['users_created'] 		= $this->session->userdata('active_user')->id;
		$data['users_updated'] 		= $this->session->userdata('active_user')->id;
		$data['softdelete'] 		= '0';

		$this->db->insert('formulir', $data); 

		header('Content-Type: application/json');
    	echo json_encode('success');
	}

	/**
     * Update Existing formulir
     *
     * @access 	public
     * @param 	
     * @return 	json(string)
     */

	public function update()
	{


		$data['program_id'] 					= $this->input->post('program_id');
		$data['nama'] 							= $this->input->post('nama');
		$data['jenis_kelamin'] 					= $this->input->post('jenis_kelamin');
		$data['tgl_lahir'] 						=  date('Y-m-d', strtotime($this->input->post('tgl_lahir')));
		$data['no_wa'] 							= $this->input->post('no_wa');
		$data['upload_ktp'] 					= $this->input->post('upload_ktp');
		$data['upload_kk'] 						= $this->input->post('upload_kk');
		$data['pendidikan_terakhir'] 			= $this->input->post('pendidikan_terakhir');

		//log jangan ubah
		$data['updated_at'] 		= date('Y-m-d H:i:s');
		$data['users_updated'] 		= $this->session->userdata('active_user')->id;


		$this->db->where('id', $this->input->post('id'));
		$this->db->update('formulir', $data); 

		header('Content-Type: application/json');
    	echo json_encode('success');
	}

	/**
     * Delete a formulir
     *
     * @access 	public
     * @param 	
     * @return 	json(string)
     */

	public function delete()
	{
		//log jangan ubah
		$data['updated_at'] 		= date('Y-m-d H:i:s');
		$data['users_updated'] 		= $this->session->userdata('active_user')->id;
		$data['softdelete'] 		= '1';


		$this->db->where('id', $this->input->post('id'));
		$this->db->update('formulir', $data); 
	}

}
