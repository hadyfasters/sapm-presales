<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_lead extends SAM_Model {
    private $table = 'dt_lead';
    private $pk = 'lead_id';

    public function __construct(){
        parent::__construct();

        $this->_table = $this->table;
        $this->_pk = $this->pk;
    }

    public function getAll()
    {
        $this->db->order_by('lead_id DESC');
        $result = $this->_get();

        if ($result->num_rows() > 0) 
		{
			return $result->result();
		}
    }

    public function getSearch($data)
    {
        $where = [];
        if(!empty($data)){
            foreach ($data as $key => $value) {
                if(!empty($value) && $key!='nama_prospek'){
                    $where[$key] = $value;
                }
            }
        }

        if($where){
            $this->_where = $where;
        }

        if($data->nama_prospek){
            $this->db->like('nama_prospek',$data->nama_prospek);
        }

        $this->db->order_by('lead_id DESC');
        $result = $this->_get();

        if ($result->num_rows() > 0) 
        {
            return $result->result();
        }
    }

    public function getByID($id)
    {
        $this->_where = "lead_id = {$id}";

        $result = $this->_get();

        if ($result->num_rows() > 0) 
        {
            return $result->row();
        }
    }

}


?>