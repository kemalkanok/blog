<?php
class User_model extends CI_Model
{
	public function is_admin($email, $password)
	{
		$query = $this->db->query("SELECT id, name, email FROM user WHERE email = '".$email."' AND password = '".sha1(md5($password))."' LIMIT 1");
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
}
?>