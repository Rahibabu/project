<?php 

class Menu extends CI_Controller
 {
 	
	function __construct()
	{
		parent::__construct();
 		if ($this->session->userdata('login') != true) {
 			redirect(base_url().'index.php/login');
 		}
	}
	public function index()
	{
		$save['data'] = $this->work_model->DBSelect('workinfo');
		$this->load->view('textarea',$save);
	}

	public function insert()

	{
		if ($this->input->post('add'))
		 {
			$save = array('data' => $this->input->post('txtarea')  );

			$query = $this->work_model->insert('workinfo',$save);

			if ($query) 
			{
				$this->index();
			}
		}
	}
	public function delete()
	{
		$get = array('id' => $this->uri->segment(3));
		$query = $this->work_model->DBdelete('workinfo',$get);

		if ($query) 
		{
			$this->index();
		}
	}
	
	public function edit()

	{
		$get = array('id' => $this->uri->segment(3));
		$query ['edit'] = $this->work_model->DBSelectesingleRow('workinfo',$get);
		$this->load->view('update',$query);
	}

	public function update()
	{
		if ($this->input->post('add'))
		 {
			$where = array('id' => $this->input->post('ID'));

			$data = array('data' => $this->input->post('txtarea')  
			);
			$query = $this->work_model->DBupdate('workinfo',$data,$where);

			if ($query) 
			{
				$this->index();
			}
		}
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */