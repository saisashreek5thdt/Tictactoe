<?php 
class Admin_model extends CI_Model {

    function __construct() {

        parent::__construct();
    }
     public function ip_insert($ip, $date) {
        $data['date1'] = date('d-m-Y h:i:s');
        $data['ip'] = $_SERVER['REMOTE_ADDR'];
        $this->db->insert('ipcheck', $data);
      
    }
      public function ip_checking($ip) {
        $this->db->where('ip', $ip);
        $ipcheck = $this->db->get('ipcheck');
        return $ipcheck->row();
    }
     public function admin_login($email, $password) {

        $this->db->where('email', $email);
        $this->db->where('password', $password);

        $query = $this->db->get('admin');
        if ($query->num_rows() == 1) {
            $data['admin'] = 'admin';
            $data['date'] = date('d-m-Y h:i:s');
            $ip = $data['ip'] = $_SERVER['REMOTE_ADDR'];
            $ch = curl_init();
            //curl_setopt($ch, CURLOPT_URL, "http://ip-api.com/json/$ip?fields=520191");
            curl_setopt($ch, CURLOPT_URL, "http://freegeoip.net/json/$ip");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $contents = curl_exec($ch);
            $response = json_decode($contents);
            curl_close($ch);
            if (isset($response->city) && isset($response->region_name) && isset($response->country_name)) {
                $data['location'] = "City : <b>$response->city</b> <br/>
                Region : <b>$response->region_name</b><br/>	
                Country : <b>$response->country_name</b><br/>	
                TimeZone : <b>$response->time_zone</b><br/>";
            }
            $this->db->insert('logs', $data);
            return $query->row();
        } else {
            return false;
        }
    }
      public function get_profile_by_id($id) {
        $this->db->where('id', $id);
        return $this->db->get('profile')->row();
    }
      public function verify_password_by_user_id($id, $password) {
      $pass =  $this->db->get_where('admin', ['id' => $id, 'password' => $password]);
      //echo $this->db->last_query();die;
        return  $pass->num_rows();
    }
    public function set_password_by_user_id($id, $new_password) {

        $this->db->set('password', $new_password);
        $this->db->where('id', $id);
        return $this->db->update('admin');
    }


//**********************slider*************//
 
    public function create($data){
        $query = $this->db->insert('tbl_slider',$data);
        return $query;

    }
    public function get_slider(){
        $this->db->select("*");
        $this->db->from('tbl_slider');
        $query = $this->db->get();
        return $query->result();
    }






//**********************End slider*************//
//**********************Start Approch*************//
    public function our_approach($data){
        $query = $this->db->insert('tbl_our_approach',$data);
        return $query;

    }
    // public function get_our_approach(){
    //     $this->db->select("*");
    //     $this->db->from('tbl_our_approach');
    //     $query = $this->db->get();
    //     return $query->result();
    // }
    public function get_our_approach(){
        $this->db->select("*");
        $this->db->from('tbl_our_approach');
        $query = $this->db->get();
        return $query->result();
    }

    public function approach_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_our_approach');
        
    }
     

    //**********************End Approch*************//
}
?>