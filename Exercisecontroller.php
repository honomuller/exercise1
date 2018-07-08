
<?php
 class Exercisecontroller extends CI_Controller{
  public function index(){

              $this->load->view('exerciseviews');
              $this->load->helper('url');
              /*$this->load->helper('form');
               $this->load->library('form_validation');
               $this->form_validation->set_error_delimiters('<div class="error">','</div>');

               $this->form_validation->set_rules('name','itemname','required');
               $this->form_validation->set_rules('price','itemprice','required');
               $this->form_validation->set_rules('quantity','itemquantity','required');
               $this->form_validation->set_rules('type','itemtype','required');
               if($this->form_validation->run() == FALSE){
                  $this->load->view('exerciseviews');
               }
               else
               {
                   $this->load->view('formsuccess');
               }*/
  }
  function __construct(){
      parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('Exercisemodel','sel');
        $this->load->model('Exercisemodel','se');
        $this->load->model('Exercisemodel','s');
         $this->load->model('Exercisemodel','i');
  }
  public function insert1(){
      $this->load->model('Exercisemodel');
      $data = array(
      'itid' => '',
      'itemname' => $this->input->post('item'),
     'price' => $this->input->post('price'),
     'quantity' => $this->input->post('quantity'),
     'type' => $this->input->post('type'),
     'category' => $this->input->post('category'));

          $this->Exercisemodel->insert($data);

          }
  public function insert2(){
      $this->load->model('Exercisemodel');
      $data = array(
      'cusid' => '',
      'cusname' => $this->input->post('cusname'),
     'address' => $this->input->post('cusaddress'),
     'phone' => $this->input->post('cusphone'),
     'sex' => $this->input->post('cussex'));
          $this->Exercisemodel->insert2($data);
  }
  public function insert3(){
      $this->load->model('Exercisemodel');
      $data = array(
      'id' => '',
      'cusname' => $this->input->post('cusname'),
     'itemname' => $this->input->post('itemname'),
     'date' => $this->input->post('date'),
     'price' => $this->input->post('price'),
     'quantity' => $this->input->post('quantity'),
     'category' => $this->input->post('category'),
     'paymenttype' => $this->input->post('type'));
          $this->Exercisemodel->insert3($data);
  }
   public function select1(){
      $query = $this->db->get('item');
      $data['records'] = $query->result();
      $this->load->view('exerciseviews',$data);
  }
   public function select2(){
      $query = $this->db->get('customer');
      $data['records'] = $query->result();
      $this->load->view('exerciseviews',$data);
  }
   public function select3(){

       $query = $this->db->get('receipt');
      $data['records'] = $query->result();
      $this->load->view('exerciseviews',$data);

  }


}


?>