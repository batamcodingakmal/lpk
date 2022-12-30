<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program extends Base_Controller {

	/**
     * List of programs
     *
     * @access 	public
     * @param 	
     * @return 	view
     */
	
	public function index()
	{
		$this->data['title'] = 'program';
		$this->data['subview'] = 'program/main';
		$this->load->view('components/main', $this->data);
	}

	/**
     * program Form
     *
     * @access 	public
     * @param 	
     * @return 	view
     */

	public function form()
	{
		$data['index'] = $this->input->post('index');
		$this->load->view('program/form', $data);
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
        $this->load->model('program_m');
		echo json_encode($this->program_m->getJson($this->input->post()));
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
				'field' => 'nama',
				'label' => 'form',
				'rules' => 'required'
			],
			[
				'field' => 'deskripsi',
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
     * Create a New program
     *
     * @access 	public
     * @param 	
     * @return 	json(string)
     */

	public function create()
	{
		$data['nama'] 				= $this->input->post('nama');
		$data['deskripsi'] 			= $this->input->post('deskripsi');



		//log jangan ubah
		$data['created_at'] 		= date('Y-m-d H:i:s');
		$data['updated_at'] 		= date('Y-m-d H:i:s');
		$data['users_created'] 		= $this->session->userdata('active_user')->id;
		$data['users_updated'] 		= $this->session->userdata('active_user')->id;
		$data['softdelete'] 		= '0';

		$this->db->insert('program', $data); 

		header('Content-Type: application/json');
    	echo json_encode('success');
	}

	/**
     * Update Existing program
     *
     * @access 	public
     * @param 	
     * @return 	json(string)
     */

	public function update()
	{
		$data['nama'] 				= $this->input->post('nama');
		$data['deskripsi'] 			= $this->input->post('deskripsi');

		//log jangan ubah
		$data['updated_at'] 		= date('Y-m-d H:i:s');
		$data['users_updated'] 		= $this->session->userdata('active_user')->id;


		$this->db->where('id', $this->input->post('id'));
		$this->db->update('program', $data); 

		header('Content-Type: application/json');
    	echo json_encode('success');
	}

	/**
     * Delete a program
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
		$this->db->update('program', $data); 
	}

}
