<?php 
	class Login extends CI_Controller {
		public function service() {
			if(isset($_REQUEST['username']) && isset($_REQUEST['password'])) 
			{
				$user['vchr_email'] = $this->input->get_post('username');
				$user['vchr_password'] = $this->input->get_post('password');

				$this->load->model('LoginModel');
				$result = $this->LoginModel->logm($user);
				$msg[]=$result;
				// $msg = array("Response code"=>"200", "Message"=>"Success");

			} else {
				$msg = array("ResponseCode"=>"404", "Message"=>"No Data Found");
			}
			echo json_encode($msg);
		}
	}
?>