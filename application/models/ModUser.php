<?php 

     class ModUser extends CI_Model{

     	      public function chkRegister($data){
     	      $this->db->select('id');
		      $this->db->from('tbl_guide');
		      $this->db->or_where('user_name', $data['user_name']);
		      $this->db->or_where('mobailenumber', $data['mobailenumber']);
		      $query = $this->db->get();
		      return $num = $query->num_rows();
       }
              public function addGuide($data){
   		      return $this->db->insert('tbl_guide',$data);
   	   }
   	          public function permitlogin($data){
		   	  $this->load->database();
		   	  $this->db;
		   	  return $this->db->get_where('tbl_guide',$data)->result_array();
	  }
	  public function chkUserRegister($data){
     	      $this->db->select('id');
		      $this->db->from('tbl_user');
		      $this->db->or_where('user_name', $data['user_name']);
		      $this->db->or_where('mobaile_number', $data['mobaile_number']);
		      $query = $this->db->get();
		      return $num = $query->num_rows();
       }
        public function addUser($data){
        	
   		      return $this->db->insert('tbl_user',$data);
   	   }
   	   public function permitUserlogin($data){
		   	  $this->load->database();
		   	  $this->db;
		   	  return $this->db->get_where('tbl_user',$data)->result_array();
	  }
	        public function fetchallPlaceById($id){
         $array = array('status' => '0',
         	'category' => $id
     );
         $query= $this->db->get_where('tbl_place',$array);
        /* $query= $this->db->get('tbl_place');*/
         if ($query->num_rows()>0) {
             foreach ($query ->result() as $row) {
                $data[]=$row;
             }
             return $data;
         }
         return false;
      }
      public function checkpLocation_nameExistencs($data){
      $array = array('city_name' => $data['city_name']);
      return $this->db->get_where('tbl_location',$array);
    }
    public function fetchallBookedPackageByUserId(){
      $array = array('user_id' => $this->session->userdata('id'));
         $query= $this->db->get_where('bookPackage',$array);
         if ($query->num_rows()>0) {
             foreach ($query ->result() as $row) {
                $data[]=$row;
             }
             return $data;
         }
         return false;
      }
    public function chkbookedGuidByid($guide_id){
      $array = array('user_id' => $this->session->userdata('id'),
                     'guide_id' => $guide_id
    );
      $query = $this->db->get_where('tbl_guideBook',$array);
      return $num = $query->num_rows();
       }
    public function addGuideBook($data){
            return $this->db->insert('tbl_guideBook',$data);
       }
    public function customerRequestToGuideById(){
      $array = array('guide_id' => $this->session->userdata('Guide_id'));
         $query= $this->db->get_where('tbl_guideBook',$array);
         if ($query->num_rows()>0) {
             foreach ($query ->result() as $row) {
                $data[]=$row;
             }
             return $data;
         }
         return false;
     }
    public function chkguideBook(){
       $array= array('guide_id' => $this->session->userdata('Guide_id'), 
                     'state >' =>'0'
     );
          $query = $this->db->get_where('tbl_guideBook',$array);
          return $num = $query->num_rows();
     }
    public function updateGuideBookToOne($data,$id){
         $this->db->where('id',$id);
         return $this->db->update('tbl_guideBook',$data);
      }
    public function deleteRequestOfCustomer($id){
         $this->db->where('id',$id);
         return $this->db->delete('tbl_guideBook');
      }
    public function customerWithGuide(){
      $array = array('user_id' => $this->session->userdata('id'));
         $query= $this->db->get_where('tbl_guideBook',$array);
         if ($query->num_rows()>0) {
             foreach ($query ->result() as $row) {
                $data[]=$row;
             }
             return $data;
         }
         return false;
     }
     public function chekGuideInfo($id){
        $array=array(
           
           'id'=>$id
        );
           
            $result = $this->db->get_where('tbl_guide',$array);
            return $result->row();
        }
        public function chekUserInfo($id){
        $array=array(
           
           'id'=>$id
        );
           
            $result = $this->db->get_where('tbl_user',$array);
            return $result->row();
        }
    }




 ?>