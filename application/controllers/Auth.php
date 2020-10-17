<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('DBconfig', 'auth');
	}
	public function index()
	{
		if($this->session->userdata('nik'))
		{
			redirect('user');
		}

		$this->form_validation->set_rules('nik', 'Nik', 'required|trim|max_length[6]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if($this->form_validation->run() == false) {
			$data['title'] = "SiPeNa - Sistem Penilaian Kinerja";
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		} else {
			// validasi success
			$this->_login();
		}
	}

	private function _login()
	{
		$nik 		= $this->input->post('nik');
		$password	= $this->input->post('password');

		$employee	= $this->db->get_where('employee', ['nik' => $nik])->row_array();
		
		// jika usernya ada
		if($employee)
		{
			// jika usernya aktif
			if($employee['is_active'] == 1)
			{
				// check password
				if(password_verify($password, $employee['password']))
				{
					$data = [
						'nik' => $employee['nik'],
						'role_id' => $employee['role_id']
					];
					$this->session->set_userdata($data);

					// check role_id
					if($employee['role_id'] == 1)
					{
						redirect('admin');
					} else
					{
						redirect('user');
					}
					
				}
				else
				{
					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Wrong Password</div>');
					redirect('auth');
				}

			} else {
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">This NIK has not been active!</div>');
				redirect('auth');
			}

		} else {
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">NIK is not registered!</div>');
			redirect('auth');
		}
	}

	public function registration()
	{
		if($this->session->userdata('nik'))
		{
			redirect('user');
		}

		$this->form_validation->set_rules('name', 'Name','required|trim');
		$this->form_validation->set_rules('nik', 'Nik', 'required|trim|max_length[6]|is_unique[employee.nik]');
		$this->form_validation->set_rules('jabatan', 'Jabatan','required');
		$this->form_validation->set_rules('pangkat', 'Pangkat','required');
		$this->form_validation->set_rules('no_hp', 'No Handphone','required');
		$this->form_validation->set_rules('password1', 'Password','required|trim|min_length[5]|matches[password2]',
										 ['matches' => 'Password dont match!',
										  'min_length' => 'Password too short']);
		$this->form_validation->set_rules('password2', 'Password','required|trim|matches[password1]');	

		if($this->form_validation->run() == false) {
			$data['title'] = "Sistem Penilaian Kinerja";

			$data['jabatan'] = $this->auth->getJabatan()->result_array();

			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/registration');
			$this->load->view('templates/auth_footer');
		} else {
			$data =['name'         => htmlspecialchars($this->input->post('name', true)),
					'nik'          => htmlspecialchars($this->input->post('nik', true)),
					'image'        => 'default.jpg',
					'id_jabatan'	   => $this->input->post('jabatan'),
					'pangkat'	   => htmlspecialchars($this->input->post('pangkat')),
					'no_hp'		   => htmlspecialchars($this->input->post('no_hp')),	
					'password'     => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
					'role_id'      => 2,
					'is_active'    => 1,
					'date_created' => time()
				   ];
			$this->db->insert('employee', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created Please Login</div>');
			redirect('auth');
		}	
	}

	public function logout()
	{
		$this->session->unset_userdata('nik');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logout!</div>');
		redirect('auth');
	}

	public function blocked() 
	{
		$this->load->view('auth/blocked');
	}
}