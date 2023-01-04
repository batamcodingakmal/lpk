<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
     * Login Form
     *
     * @access 	public
     * @param 	
     * @return 	view
     */
	
	public function login()
	{
		$data['title'] = 'Login';
		$data['subview'] = 'login/main';
		$this->load->view('components/layout', $data);
	}
	public function register()
	{
		$data['title'] = 'Register';
		$data['subview'] = 'login/register';
		 $this->load->model('program_m');
		$data['program'] = $this->program_m->all();
		$this->load->view('components/layout', $data);
	}
	/**
     * Validate and Login User
     *
     * @access 	public
     * @param 	
     * @return 	json(array)
     */

	public function login_attempt()
	{
		$rules = [
			[
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required'
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required'
			]
		];

		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run()) {
			$this->load->model('user_m');
			$attempt = $this->user_m->attempt($this->input->post());
			if ($attempt === null) {
				header("Content-type:application/json");
				echo json_encode(['password' => 'Wrong email or password']);
			} else {
				$this->session->set_userdata('active_user', $attempt);
				header("Content-type:application/json");
				echo json_encode(['status' => 'success']);
			}
		} else {
			header("Content-type:application/json");
			echo json_encode($this->form_validation->get_all_errors());
		}
	}

	/**
     * Logout User
     *
     * @access 	public
     * @param 	
     * @return 	redirect
     */


	/**
     * Validate Input
     *
     * @access 	public
     * @param 	
     * @return 	json(array)
     */

    public function register_attempt()
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
			],
			[
				'field' => 'no_wa',
				'label' => 'form',
				'rules' => 'required'
			],			
			[
				'field' => 'upload_ktp',
				'label' => 'form',
				'rules' => 'required'
			],
			[
				'field' => 'upload_kk',
				'label' => 'form',
				'rules' => 'required'
			],
			[
				'field' => 'pendidikan_terakhir',
				'label' => 'form',
				'rules' => 'required'
			],

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



	public function register_save()
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
		$data['users_created'] 		= '1';
		$data['users_updated'] 		= '1';
		$data['softdelete'] 		= '0';

		$this->db->insert('formulir', $data); 

		header('Content-Type: application/json');
    	echo json_encode('success');
	}
	public function logout() {
		$this->session->unset_userdata('active_user');
		redirect('auth/login');
	}
}
