<?php

class Formulir_m extends CI_Model {   

    function __construct()
    {
        parent::__construct();
        $this->load->library('datagrid');
    }

    /**
     * Get List of Groups
     *
     * @access 	public
     * @param 	
     * @return 	json(array)
     */

    public function all()
    {
    	$query = $this->db->from('formulir g')
                        ->select('g.*')
                        ->where('g.softdelete','0')
                        ->get();

        return $query->result();
    }

    /**
     * Get Group by ID
     *
     * @access  public
     * @param   
     * @return  json(array)
     */

    public function get_formulir($id)
    {
        $query = $this->db->from('formulir g')
                        ->select('g.*')
                        ->where('g.id', $id)
                        ->where('g.softdelete','0')
                        ->get();

        return $query->row();
    }

    /**
     * Datagrid Data
     *
     * @access  public
     * @param   
     * @return  json(array)
     */

    public function getJson($input)
    {
        $table  = 'formulir as a';
        $select = 'a.*';

        $replace_field  = [
            ['old_name' => 'nama', 'new_name' => 'a.nama']
        ];

        $param = [
            'input'     => $input,
            'select'    => $select,
            'table'     => $table,
            'replace_field' => $replace_field
        ];

        $data = $this->datagrid->query($param, function($data) use ($input) {
            return $data->where('a.softdelete','0');
        });

        return $data;
    }

}