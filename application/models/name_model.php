/*<?php        

class Name_model extends CI_Model{

   //Insert the data into the DB.
    public function insertdata(){

      $data=array(
        'Name' => $this->input->post('first_name'),
        'Cricketer => '$this->input->post('select'), 
        'Color' => $this->input->post('Flag')
      );

      $insert_data = $this->db->insert('quiz',$data);
      return $insert_data;
      echo "inserted successfully";
    }
//This is to display the Summary:
    public function get_data($name){
      $=$this->db->where('Name',$name);
      $query = $this->db->get('quiz');
      
      return $query->row();
  }

  

//This Function is for retrival of all the data  from the Db.
    public function get_users(){

      $query = $this ->db->get('quiz');
      return $query->result();
  }

  }
?>*/