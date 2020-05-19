/* 
<?php
class Name extends CI_Controller{
    public function addname(){
        $this->load->view('name_view');
         
    }
    public function insert(){
        $this->name_model->insertdata();
            
    }

    public function history(){
      
        $data['results'] = $this->name_model->get_users();
        $this->load->view('history_view',$data);
     }
  
     public function display($name){
        $data['project_data']= $this->name_model->get_data($name);
        
        $this->load->view('user_view',$data);
    }
}

?> */