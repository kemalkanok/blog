<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('/main/pages/homepage.php');
	}
	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_is_admin');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('/main/pages/loginpage.php');
		} else {
			redirect('/admin');
		}
	}
	public function is_admin($password)
	{
		$email = $this->input->post('email');
		$result = $this->user_model->is_admin($email, $password);
		
		if ($result) {
			$session_array = array();
			foreach ($result as $row) {
				$session_array = array(
					'id' => $row->id,
					'email' => $row->email,
					'logged_in' => TRUE
				);
				$this->session->set_userdata('isadmin', $session_array);
			}
			return true;
		} else {
			$this->session->set_flashdata('validation', 'Geçersiz email veya kullanıcı adı');
			return false;
		}
	}
}
?>