	<?php
	/**
	* 
	*/
	class Welcome extends CI_Controller

	{
		
		public function index()

		{
			$data['student']  =$this->work_model->DBSelect('info');
			$this->load->view('task',$data);
			
		}
		public function insert()
		{
			if (
				$this->input->post("submit"))
			{
				$data= array('name' => $this->input->post('name'),
				             'address' => $this->input->post('address'),
				             'contact' => $this->input->post('contact') );
				$query=$this->work_model->insert('info',$data);
				if
			   ($query)
			{
				$this->index();
			}
			}

		}
		public function deldata()
		{
			$Where= array('uid' =>$this->uri->segment(3));
			$query=$this->work_model->DBdelete('info',$Where);
			if($query)
			{
				$this->index();
			}

		}
		public function edit()
		{
			$Where= array('uid' =>$this->uri->segment(3));
			$query['edit']=$this->work_model->DBSelectesingleRow('info',$Where);
			$this->load->view('edit',$query);
			
			

		}
		public function updatedata()
		{
			if (
				$this->input->post('submit'))  {
				$wherecondition = array('uid' => $this->input->post('ID'));
				 $data = array('name' => $this->input->post('name'),
						 'address' => $this->input->post('address'),
						 'contact' => $this->input->post('contact'), );
				 $query = $this->work_model->DBupdate('info',$data,$wherecondition);
				 if ($query)		
                  {
                  	$this->index();
                  }
				 			}

		}
	}

	?>
