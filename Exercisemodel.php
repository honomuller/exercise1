<?php
class Exercisemodel extends CI_Model{
   function __construct(){
       parent::__construct();
        $this->load->database();
    }

    public function insert($data){
    $this->db->insert('item',$data);
    return true;
    }
    public function insert2($data){
     $this->db->insert('customer',$data);
    return true;
    }
    public function insert3($data){
     $this->db->insert('receipt',$data);
    return true;
    }
    public function select() {
    $query = $this->db->get('item');
    return $query->result();
    }
    public function select1() {
    $query = $this->db->get('customer');
    return $query->result();
    }
    public function select2() {
    $query = $this->db->get('receipt');
    return $query->result();

    }
}

?>