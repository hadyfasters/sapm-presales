<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_users extends SAM_Model {
    private $table = 'dt_user';
    private $pk = 'id_user';

    public function __construct()
    {
        parent::__construct();

        $this->_table = $this->table;
        $this->_pk = $this->table;
    }

    public function getDataUser($npp)
    {
        $data = array(
            'npp' => $npp,
            'active' => 1
        );

        $this->db->where($data);
        $this->db->join('dt_user_position','up_id=position','inner');
		$query = $this->db->get($this->_table);

        if ($query->num_rows() > 0) 
		{
			return $query->row();
		}

		return FALSE;
    }

}


?>