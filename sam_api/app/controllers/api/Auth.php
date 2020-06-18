<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends SAM_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->model('M_users');  
	}

	public function check()
	{
		// Get Plain Request
		$request = json_decode(file_get_contents('php://input'));

		if($request==null)
			// Get Secured Request
			$request = json_decode($this->encryption->sam_decrypt(file_get_contents('php://input')));

		if($request) {
			// Verify Auth Token
			$this->is_verified = $this->verify_token('auth_'.$request->auth_token);

			if($this->is_verified){
				$user = $this->M_users->getDataUser($request->username);

				// Default Login Failed Message
				$this->response['message'] = 'Your username or password is wrong.';

				// Check if user is exist
				if($user)
				{
					$password = $request->password;
					$password_hash = $user->password;

					// Verify User Password
					if(password_verify($password, $password_hash)){
						// Set Response Code
						$this->response_code = 200;

						// Set Response Status
						$this->response['status'] = TRUE;

						// Set Response Data
						$this->response['data'] = [
							'id_user' => $user->id_user,
							'npp' => $user->npp,
							'nama' => $user->nama,
							'job' => $user->up_name,
							'job_id' => $user->position,
							'level' => $user->up_level,
							'branch_code' => $user->branch_code
						];

						$token_expired = time() + LOGIN_TOKEN_DURATION;

						// Set login token session on server
						$this->set_token('login_'.$user->npp,$this->response['data'],LOGIN_TOKEN_DURATION);

						// Add login token to response
						$this->response['data']['token'] = $this->encryption->sam_encrypt('login_'.$user->npp);

						// Add token expired to response
						$this->response['data']['expired'] = $token_expired;
					}
					// Destroy auth token
					$this->destroy_token('auth_'.$request->auth_token);
				}
			}
		}

		// Run the Application
		$this->run(SECURED);
	}

	public function token()
	{
		// Set Response Code
		$this->response_code = 200;

		// Set Response Status
		$this->response['status'] = TRUE;

		// Generate Auth Token
		$this->response['auth_token'] = $this->generate_token();

		// Run the Application
		$this->run(SECURED);
	}

}