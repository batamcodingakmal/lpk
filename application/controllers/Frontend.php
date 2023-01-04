<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {



    public function index()
    {   
        $this->data['title'] = 'LPK CALIFORNIA EDUCATION CENTRE';
        $this->data['subview'] = 'frontend/main';
        $this->load->view('components/front_layout', $this->data);
    }


}
