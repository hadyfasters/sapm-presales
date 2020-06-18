/<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends SAM_Controller {

    public function __construct()
	{
		parent::__construct();
		// $this->load->helper('form');
		$this->load->library('session'); 

        if(!$this->isLogin){
            redirect('login/logout');
        }  
	}

	public function index()
	{
        $this->data['content'] = 'usermanagement/list-user';

        $this->data['javascriptLoad'] = array(
            0 => 'assets/vendors/datatables.net/js/jquery.dataTables.min.js',
            1 => 'assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js',
            2 => 'assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js',
            3 => 'assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js',
            4 => 'assets/vendors/datatables.net-buttons/js/buttons.flash.min.js',
            5 => 'assets/vendors/datatables.net-buttons/js/buttons.html5.min.js',
            6 => 'assets/vendors/datatables.net-buttons/js/buttons.print.min.js',
            7 => 'assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js',
            8 => 'assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js',
            9 => 'assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js',
            10 => 'assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js',
            11 => 'assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js',
            12 => 'assets/build/js/user.js'
        );

        $this->load->view('template', $this->data);
    }

   
    public function add()
    {
        $userToken = $this->data['userdata']['token'];

        $region = $this->client_url->postCURL(REGION_LIST,'',$userToken); 
        $region = json_decode($region);
        if($region!=null && !isset($region->status)){
            // Decrypt the response
            $region = json_decode($this->recure($region));
        }
        if(isset($region->status) && $region->status)
        {
            $this->data['region_list'] = $region->data;
        }

        $branch = $this->client_url->postCURL(BRANCH_LIST,'',$userToken);  
        $branch = json_decode($branch);
        if($branch!=null && !isset($branch->status)){
            // Decrypt the response
            $branch = json_decode($this->recure($branch));
        }
        if(isset($branch->status) && $branch->status)
        {
            $this->data['branch_list'] = $branch->data;
        }

        $dt_user = [
            'level' => $this->data['userdata']['level'],
            'status' => 1
        ];
        $userposition = $this->client_url->postCURL(USERPOSITION_LIST,$this->secure($dt_user),$userToken); 
        $userposition = json_decode($userposition);
        if($userposition!=null && !isset($userposition->status)){
            // Decrypt the response
            $userposition = json_decode($this->recure($userposition));
        }

        if(isset($userposition->status) && $userposition->status)
        {
            $this->data['userposition_list'] = $userposition->data;
        }

        // $this->data['auth_token'] = $this->getAuthToken();
        $this->data['content'] = 'usermanagement/input-user';

        $this->data['javascriptLoad'] = array(
            1 => 'assets/build/js/user.js',
            2 => 'assets/build/js/jquery.validate.min.js'
        );

        $this->load->view('template', $this->data);
    }

    public function detail()
    {
        $this->data['content'] = 'usermanagement/view-user';
      
        $this->load->view('template', $this->data);
    }

    public function edit()
    {
        $this->data['auth_token'] = $this->getAuthToken();
        $this->data['content'] = 'usermanagement/edit-user';

        $this->data['javascriptLoad'] = array(
            1 => 'assets/build/js/user.js',
            2 => 'assets/build/js/jquery.validate.min.js'
        );

        $this->load->view('template', $this->data);
    }
}
