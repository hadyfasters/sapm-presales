<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Userposition extends SAM_Controller 
{
    public function __construct()
	{
		parent::__construct();
		// Load the Model
        $this->load->model('M_userposition');    
        // Verify Login
        $this->is_login = $this->verify_login();
	}

	// get all list include superadmin
	public function lists()
	{
		$userposition = [];

		// Get Request
		$req = file_get_contents('php://input');
		
		// Decode Request
		$res = json_decode($req);

		if(SECURED){
			if($req && !isset($res->auth_token)){
				// Get Secured Request
				$res = json_decode($this->encryption->sam_decrypt($req));
				
			}
		}

		if($this->is_login){
			if($res != null) {
				if(isset($res->level) && $res->level == 99) {
					$userposition = $this->M_userposition->getAll($res);
				}else{
					$userposition = $this->M_userposition->get($res);
				}
			}
			// Set Response
			$this->response_code = 200;
			$this->response['status'] = TRUE;
			$this->response['data'] = $userposition;
		}

		// Run the Application
		$this->run(SECURED);
	}

	// get all list include superadmin
	public function get()
	{
		$userposition = [];

		// Get Request
		$req = file_get_contents('php://input');
		
		// Decode Request
		$res = json_decode($req);

		if(SECURED){
			if($req && !isset($res->auth_token)){
				// Get Secured Request
				$res = json_decode($this->encryption->sam_decrypt($req));
				
			}
		}

		if($this->is_login){
			if($res != null) {
				$userposition = $this->M_userposition->getByID($res->id);
			}
			// Set Response
			$this->response_code = 200;
			$this->response['status'] = TRUE;
			$this->response['data'] = $userposition;
		}

		// Run the Application
		$this->run(SECURED);
	}

	// create userposition
	public function create()
	{
		// Get Request
		$req = file_get_contents('php://input');
		
		// Decode Request
		$res = json_decode($req);

		if(SECURED){
			if($req && !isset($res->auth_token)){
				// Get Secured Request
				$res = json_decode($this->encryption->sam_decrypt($req));
			}
		}

		if($res !== null) {
			// Verify Auth Token
			$this->is_verified = $this->verify_token('auth_'.$res->auth_token);
			// Verified
			if($this->is_verified){
				// is Logged In
				if($this->is_login){
					$res->level = isset($res->level) ? $res->level:0;
					// Set Input
					$input = [
						'up_name' => $res->title,
						'up_level' => $res->level,
						'up_default' => $res->default_password,
						'is_active' => $res->is_active,
						'created_date' => date('Y-m-d H:i:s'),
						'created_by' => $res->user
					];
					// Set Response Code
					$this->response_code = 200;
					// Save the Data
					$create = $this->M_userposition->save($input);
					if($create){
						// Set Response
						$this->response['status'] = TRUE;
						$this->response['message'] = 'User Position has been created.';
						$this->response['data'] = ['insert_id' => $create];
					}else{
						// Set Error Message
						$this->response['message'] = 'Error : '.$this->db->error();
					}
				}
				$this->destroy_token('auth_'.$res->auth_token);
			}
		}

		// Run the Application
		$this->run(SECURED);
	}

	// update userposition
	public function update()
	{
		// Get Request
		$req = file_get_contents('php://input');
		
		// Decode Request
		$res = json_decode($req);

		if(SECURED){
			if($req && !isset($res->auth_token)){
				// Get Secured Request
				$res = json_decode($this->encryption->sam_decrypt($req));
			}
		}

		if($res !== null) {
			// Verify Auth Token
			$this->is_verified = $this->verify_token('auth_'.$res->auth_token); 
			// Verified
			if($this->is_verified){
				// is Logged In
				if($this->is_login){
					// Set ID
					$id = $res->id;
					// Set Input
					$input = [
						'up_name' => $res->title,
						'up_level' => $res->level,
						'up_default' => $res->default_password,
						'is_active' => $res->is_active,
						'created_date' => date('Y-m-d H:i:s'),
						'created_by' => $res->user
					];
					// Set Response Code
					$this->response_code = 200;
					$exist = $this->M_userposition->getByID($id);
					if($exist){
						$update = $this->M_userposition->save($input,$id);
						if($update){
							// Set Success Response
							$this->response['status'] = TRUE;
							$this->response['message'] = 'User Position has been updated.';
							$this->response['data'] = ['insert_id' => $update];
						}else{
							// Set Error Response
							$this->response['message'] = 'Error : '.$this->db->error();
						}
					}else{
						// Set Failed Response
						$this->response['status'] = FALSE;
						$this->response['message'] = 'User Position not found.';
					}
				}
				$this->destroy_token('auth_'.$res->auth_token);
			}
		}

		// Run the Application
		$this->run(SECURED);
	}

	public function remove()
	{
		// Get Request
		$req = file_get_contents('php://input');
		
		// Decode Request
		$res = json_decode($req);

		if(SECURED){
			if($req && !isset($res->auth_token)){
				// Get Secured Request
				$res = json_decode($this->encryption->sam_decrypt($req));
			}
		}

		if($res !== null) {
			// is Logged In
			if($this->is_login){
				// Set ID
				$id = $res->id;
				// Set Input
				$input = [
					'is_active' => 3
				];
				// Set Response Code
				$this->response_code = 200;
				$exist = $this->M_userposition->getByID($id);
				if($exist){
					$update = $this->M_userposition->save($input,$id);
					if($update){
						// Set Success Response
						$this->response['status'] = TRUE;
						$this->response['message'] = 'User Position has been removed.';
						$this->response['data'] = ['insert_id' => $update];
					}else{
						// Set Error Response
						$this->response['message'] = 'Error : '.$this->db->error();
					}
				}else{
					// Set Failed Response
					$this->response['status'] = FALSE;
					$this->response['message'] = 'User Position not found.';
				}
			}
		}

		// Run the Application
		$this->run(SECURED);
	}

	// activation userposition
	public function activation()
	{
		// Get Request
		$req = file_get_contents('php://input');
		
		// Decode Request
		$res = json_decode($req);

		if(SECURED){
			if($req && !isset($res->auth_token)){
				// Get Secured Request
				$res = json_decode($this->encryption->sam_decrypt($req));
			}
		}

		if($res !== null) {
			// Verify Auth Token
			$this->is_verified = $this->verify_token('auth_'.$res->auth_token); 
			// Verified
			if($this->is_verified){
				// is Logged In
				if($this->is_login){
					// Set ID
					$id = $res->id;
					// Set Input
					$input = [
						'is_active' => $res->is_active
					];
					// Set Response Code
					$this->response_code = 200;
					$exist = $this->M_userposition->getByID($id);
					if($exist){
						$update = $this->M_userposition->save($input,$id);
						if($update){
							// Set Success Response
							$this->response['status'] = TRUE;
							$this->response['message'] = 'User Position has been updated.';
							$this->response['data'] = ['insert_id' => $update];
						}else{
							// Set Error Response
							$this->response['message'] = 'Error : '.$this->db->error();
						}
					}else{
						// Set Failed Response
						$this->response['status'] = FALSE;
						$this->response['message'] = 'User Position not found.';
					}
				}
				$this->destroy_token('auth_'.$res->auth_token);
			}
		}

		// Run the Application
		$this->run(SECURED);
	}

}