<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends SAM_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
	}

	public function index()
	{
        $data['auth_token'] = $this->getAuthToken();
        $data['error_message'] = $this->session->flashdata('error_message');
        $data['login'] = 'login/process';
        $data['attributes'] = array('class' => 'col s12', 'id' => 'login-form', 'method' => 'post');
		$this->load->view('login', $data);
    }
    
    public function process(){
        extract($this->input->post());

        $dataPost = [
            'username' => $npp,
            'password' => $password,
            'auth_token' => $auth_token
        ];

        // Post a Secure data
        $login = $this->client_url->postCURL(AUTH_LOGIN_CHECK, $this->secure($dataPost));
        $response = json_decode($login);
        if($response!=null && !isset($response->status)){
            // Decrypt the response
            $response = json_decode($this->recure($response));
        }

        // Check response status
        if($response->status && isset($response->status))
        {
            $data_login = array(
                'id_user' => $response->data->id_user,
                'npp' => $response->data->npp,
                'nama' => $response->data->nama,
                'job' => $response->data->job,
                'job_id' => $response->data->job_id,
                'branch_code' => $response->data->branch_code,
                'level' => $response->data->level,
                'token' => $response->data->token,
                'expired' => $response->data->expired,
                'is_loggedin' => TRUE
            );
            $this->session->set_userdata('data_login', $data_login);
            redirect('dashboard');
        }
        else
        {
            // $this->session->set_flashdata('error_message', 'Username or password is wrong');
            $this->session->set_flashdata('error_message', $response->message);
            $data['error_message'] = $this->session->flashdata('error_message');
            redirect('login');
        }        
    }

    public function out()
    {
        unset(
            $_SESSION['data_login'],
            $_SESSION['menu_list']
        );
        redirect('login');
    }
}