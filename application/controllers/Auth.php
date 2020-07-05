<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_auth');
	}

	public function index()
	{
		$this->load->view('auth/login');
	}
	public function login_check()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('password', 'Pass', 'required|trim');
		if ($this->form_validation->run() == false) {
			redirect('Auth/index');
		}else{
			$email = $this->input->post('email', True);
			$password = $this->input->post('password', True);

			$checking = $this->M_auth->login('tb_user', array('email' => $email), array('password' => $password));

			if (checking == True) {
				foreach ($checking as $c) {
					$session_data = array(
						'id_user' => $c->id_user,
						'username' => $c->username,
						'email' => $c->email,
						'password' => $c->password,
						'level' => $c->level,
					);
					$this->session->set_userdata($session_data);

					if ($this->session->userdata('level') == 1) {
						redirect('Admin/index');
					}else{
						redirect('User/index');
					}
				}
			}else{
				redirect('Auth/index');
			}
		}
	}
	public function registrasi()
	{
		$this->load->view('auth/regis');
	}
	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('level');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				  Selamat Akun Telah Logout!!
				</div>');
			redirect('auth/index');
	}
}
