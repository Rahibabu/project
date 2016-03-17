<?php

/**
* 
*/
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function se()
	{
		if ($this->input->post('authenticate')) {
			$Username = htmlentities($this->input->post('username'));
			$Password = htmlentities($this->input->post('password'));
			$Data     =  array('username'=>$Username, 'password'=>$Password);
			$Check    = $this->work_model->DBSelectesingleRow('admin',$Data);

			if ($Check) {
				$UserData   =  array(
								'Name'  => $Check->username,
								'ID'    => $Check->id,
								'login' => true,
							);
				$this->session->set_userdata($UserData);
				redirect(base_url().'index.php/menu');
				
			}
			else
			{
				$this->index();
			}
		}
	}
	function logout(){
		$UserData   =  array('Name','ID' , 'login' ,);
		$this->session->unset_userdata($UserData);
		$this->session->sess_destroy();
				$this->index();
	}
}



?>