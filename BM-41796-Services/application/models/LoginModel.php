<?php
	class LoginModel extends CI_Model {
		public function logm($user) {
			$result=$this->db->select('*')
					->from('user_details')
					->where($user)
					->get();
			if($result->num_rows()>=1) {
				$row = $result->result_array();
				$row['ResponseCode']="200";
				$row["msg"]="Success";
				
			} 
			else {
				$result=$this->db->select('*')
							->from('user_details')
							->where('vchr_email',$user['vchr_email'])
							->get();
				if($result->num_rows()==1) {
					$row = $result->result_array();
					$row['ResponseCode']="500";
					$row["msg"]="Passwordddd error";
				}
				else
					$row = array("ResponseCode"=>"404","Status"=>"User not found");
			}
			return $row;
		}
	}
?>