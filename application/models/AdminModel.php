<?php
class AdminModel extends CI_Model
{
	public function Adlogin($data){
		$this->db->where('user_id', $data['user_id']);
        $this->db->where('password', $data['password']);
        $query = $this->db->get('hospital_admin');
        if ($query->num_rows() > 0) {
            return true;
            $ins = array(
                'userid' => $q->row()->userid
            );
            return $ins;
        } else {
            return false;
        }
	}






}
?>