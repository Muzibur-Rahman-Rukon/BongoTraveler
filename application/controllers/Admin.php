<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		
		$this->load->view('Admin/login');
		
		
	}
	public function deshboard(){
		$this->load->view('Admin/header');
		$this->load->view('Admin/admin_header');
		$this->load->view('Admin/deshboard');
		$this->load->view('Admin/admin_footer');
		$this->load->view('Admin/footer');
	}
         
        public function chkAdmin(){
        	$data['admin_name']=$this->input->post('admin_name',true);
            $data['admin_password']=$this->input->post('admin_password',true);
            if(!empty($data['admin_name']) && !empty($data['admin_password'])){
                 $admin=$this->modAdmin->chkAdmin($data);
            
                if (count($admin)==1) {
                    
                     $forSession=array(
                        'admin_name'=> $admin[0]['admin_name'],
                        'admin_id'=> $admin[0]['admin_id'],
                         'logged_in' => TRUE
                        
                );
                    $this->session->set_userdata($forSession);
                    if ($this->session->userdata('admin_id')) {
                        redirect('Admin/deshboard');
                    }
                    else{
                        echo "Session not Created";
                    }
                    
                }
                else{
                	$this->session->set_flashdata('class','alert-danger');
                	$this->session->set_flashdata('message','Please Chek Email or Password Correctly');
                	redirect('Admin/index');
                }
            }
            else{
                $this->session->set_flashdata('class','alert-danger');
                	$this->session->set_flashdata('message','Please Chek The Required Field');
                	redirect('Admin/index');
                
            }
        }
            public function logout(){
            
            if ($this->session->userdata('admin_id')) {
                
                $this->session->set_userdata('admin_id','');
                $this->session->set_flashdata('class','alert-success');
                $this->session->set_flashdata('message','You Have Successfully Loged Out');
                redirect('Admin/index');
                /*$this->session->set_flashdata('error','You have successfully loged out');
                redirect('home/login');*/
            }
            else{
                $this->session->set_flashdata('error','Please log in');
               

            }
        }
        public function viewUser(){
            $data['allUser']=$this->modAdmin->fetchallUser();
            $this->load->view('Admin/header');
            $this->load->view('Admin/admin_header');
            $this->load->view('Admin/viewUser',$data);
            $this->load->view('Admin/admin_footer');
            $this->load->view('Admin/footer');
        }
        public function viewGuide(){
            $data['allGuide']=$this->modAdmin->fetchallGuide();
            $this->load->view('Admin/header');
            $this->load->view('Admin/admin_header');
            $this->load->view('Admin/viewGuide',$data);
            $this->load->view('Admin/admin_footer');
            $this->load->view('Admin/footer');
        }
        public function viewPlace(){
            $data['allGuide']=$this->modAdmin->fetchallPlace();
            $this->load->view('Admin/header');
            $this->load->view('Admin/admin_header');
            $this->load->view('Admin/viewPlace',$data);
            $this->load->view('Admin/admin_footer');
            $this->load->view('Admin/footer');
        }
            public function deleteUser($id){
            if(!empty($id) && isset($id)){
                  $data=$this->modAdmin->deleteUser($id);
                  if ($data) {
                    $this->session->set_flashdata('class','alert-success');
                        $this->session->set_flashdata('message','User Delated');
                        redirect('admin/viewUser');
                    
                  }
                  else{
                   $this->session->set_flashdata('class','alert-danger');
                   $this->session->set_flashdata('message','User not found');
                    redirect('admin/viewUser');
                  }
                }
                else{
                    $this->session->set_flashdata('class','alert-danger');
                   $this->session->set_flashdata('message','User Name  not found');
                    redirect('admin/viewUser');


                }

        }
    public function deleteGuide($id){
            if(!empty($id) && isset($id)){
                  $data=$this->modAdmin->deleteGuide($id);
                  if ($data) {
                    $this->session->set_flashdata('class','alert-success');
                        $this->session->set_flashdata('message','Guide Delated');
                        redirect('admin/viewGuide');
                    
                  }
                  else{
                   $this->session->set_flashdata('class','alert-danger');
                   $this->session->set_flashdata('message','Guide not found');
                    redirect('admin/viewGuide');
                  }
                }
                else{
                    $this->session->set_flashdata('class','alert-danger');
                   $this->session->set_flashdata('message','Guide Name  not found');
                    redirect('admin/viewGuide');


                }

        }
        public function viewUserRequest(){
            $data['allUser']=$this->modAdmin->fetchallUserRequest();
            $this->load->view('Admin/header');
            $this->load->view('Admin/admin_header');
            $this->load->view('Admin/viewUserRequest',$data);
            $this->load->view('Admin/admin_footer');
            $this->load->view('Admin/footer');
        }
        public function updateStateForUR($id){
            $data['status']='1';
            $updateAdmin=$this->modAdmin->updateStateForUR($data,$id);
            redirect('admin/viewUserRequest'); 
        }
         public function deleteUserRequest($id){
            if(!empty($id) && isset($id)){
                  $data=$this->modAdmin->deleteUser($id);
                  if ($data) {
                    $this->session->set_flashdata('class','alert-success');
                        $this->session->set_flashdata('message','Request Delated');
                        redirect('admin/viewUserRequest');
                    
                  }
                  else{
                   $this->session->set_flashdata('class','alert-danger');
                   $this->session->set_flashdata('message','User not found');
                    redirect('admin/viewUserRequest');
                  }
                }
                else{
                    $this->session->set_flashdata('class','alert-danger');
                   $this->session->set_flashdata('message','User Name  not found');
                    redirect('admin/viewUserRequest');


                }

        }
        public function viewGuideRequest(){
            $data['allUser']=$this->modAdmin->fetchallGuideRequest();
            $this->load->view('Admin/header');
            $this->load->view('Admin/admin_header');
            $this->load->view('Admin/viewGuideRequest',$data);
            $this->load->view('Admin/admin_footer');
            $this->load->view('Admin/footer');
        }
        public function updateStateForGR($id){
            $data['status']='1';
            $updateAdmin=$this->modAdmin->updateStateForGR($data,$id);
            redirect('admin/viewGuideRequest'); 
        }
                 public function deleteGuideRequest($id){
            if(!empty($id) && isset($id)){
                  $data=$this->modAdmin->deleteGuide($id);
                  if ($data) {
                    $this->session->set_flashdata('class','alert-success');
                        $this->session->set_flashdata('message','Request Delated');
                        redirect('admin/viewGuideRequest');
                    
                  }
                  else{
                   $this->session->set_flashdata('class','alert-danger');
                   $this->session->set_flashdata('message','User not found');
                    redirect('admin/viewGuideRequest');
                  }
                }
                else{
                    $this->session->set_flashdata('class','alert-danger');
                   $this->session->set_flashdata('message','User Name  not found');
                    redirect('admin/viewGuideRequest');


                }

        }
        public function editPlace($id){

            $data['product']=$this->modAdmin->chekPlaceById($id);
            $data['allLocation']=$this->modAdmin->fetchaAllLocation();
            if (count($data['product'])==1) {
            $this->load->view('Admin/header');
            $this->load->view('Admin/admin_header');
            $this->load->view('Admin/editPlace',$data);
            $this->load->view('Admin/admin_footer');
            $this->load->view('Admin/footer');
                  }
        }
        public function updatePlace(){        
            $data['place_name']=$this->input->post('place_name',true);
            $data['area']=$this->input->post('area',true);
            $data['place_description']=$this->input->post('place_description',true);
          
           $data['id']=$this->input->post('id',true); 
                $oldimg=$this->input->post('img',true);
                if (!empty($data['place_name'])&& isset($data['place_description']) && isset($data['area']) && isset($data['id'])) {
                    if(isset($_FILES['img']) && is_uploaded_file($_FILES['img']['tmp_name'])){
                    $path=realpath('assets/images/');
                    $config['upload_path']=$path;
                    $config['allowed_types']='gif|png|jpg|jpeg';
                    $this->load->library('upload',$config);
                    if (!$this->upload->do_upload('img')) {
                        $error=$this->upload->display_errors();
                        setFlashData('alert-danger','$error','admin/viewPlace');
                    }
                    else{
                        $fileName=$this->upload->data();
                        $data['img']=$fileName['file_name'];
                        
                    }

                    }
            $reply=$this->modAdmin->updatePlace($data,$data['id']);
                    if ($reply) {
                        if (!empty($data['img']) && isset($data['img'])) {
                            if (file_exists($path.'/'.$oldimg)) {
                                unlink($path.'/'.$oldimg);
                            }
                        }
                $this->session->set_flashdata('class','alert-success');
                $this->session->set_flashdata('message','Place Updated Successfully');
                redirect('admin/viewPlace');
                        
                    }
                    else{
                        setFlashData('alert-danger','You can not updated now','admin/viewPlace');
                    }
                    # code...
                }
                else{
                    setFlashData('alert-danger','Please Check Every Field','admin/viewPlace');

                }
           
        }
        public function addPackage(){
        $this->load->view('Admin/header');
        $this->load->view('Admin/admin_header');
        $this->load->view('Admin/addPackage');
        $this->load->view('Admin/admin_footer');
        $this->load->view('Admin/footer');
        }
                public function packageAdd(){
        $data['package_name']= $this->input->post('package_name','true');
        $data['body']= $this->input->post('body','true');
                if (!empty($data['package_name'])) {
                    $path=realpath('assets/images/');
                    $config['upload_path']=$path;
                    $config['allowed_types']='gif|png|jpg|jpeg';
                    $this->load->library('upload',$config);
                    if (!$this->upload->do_upload('img')) {
                        $error=$this->upload->display_errors();
                        
                         $this->session->set_flashdata('class','alert-danger');
                   $this->session->set_flashdata('message','Image not found');
                    redirect('admin/addPackage');
                    }
                    else{
                        $fileName=$this->upload->data();
                        $data['img']=$fileName['file_name'];
                      
                       

                    }
            $addData=$this->modAdmin->checkPackageExistence($data);
                    if ($addData->num_rows()>0) {
                        
                        $this->session->set_flashdata('class','alert-danger');
                   $this->session->set_flashdata('message','Sorry This News is Alredy Exist');
                    redirect('admin/addPackage');
                       
                    }
                    else{
                        $addData=$this->modAdmin->addPackage($data);
                    if ($addData) {
                       
                        $this->session->set_flashdata('class','alert-success');
                   $this->session->set_flashdata('message','Package Added Successfully');
                    redirect('admin/addPackage');
                    }
                    else{
                       
                         $this->session->set_flashdata('class','alert-danger');
                   $this->session->set_flashdata('message','Package not Added');
                    redirect('admin/addPackage');
                    }
                    }
                    
                }
                else{
                   
                   $this->session->set_flashdata('class','alert-danger');
                   $this->session->set_flashdata('message','Check All Field please');
                    redirect('admin/addPackage');

                }

        }
        public function viewPackage(){
            $data['allPackage']=$this->modAdmin->fetchallPackage();
            $this->load->view('Admin/header');
            $this->load->view('Admin/admin_header');
            $this->load->view('Admin/viewPackage',$data);
            $this->load->view('Admin/admin_footer');
            $this->load->view('Admin/footer');
        }
        public function editPackage($id){

            $data['product']=$this->modAdmin->chekPackageById($id);
            if (count($data['product'])==1) {
            $this->load->view('Admin/header');
            $this->load->view('Admin/admin_header');
            $this->load->view('Admin/editPackage',$data);
            $this->load->view('Admin/admin_footer');
            $this->load->view('Admin/footer');
                  }
        }
                public function updatePackage(){        
            $data['package_name']=$this->input->post('package_name',true);
            $data['body']=$this->input->post('body',true);
          
           $data['id']=$this->input->post('id',true); 
                $oldimg=$this->input->post('img',true);
                if (!empty($data['package_name'])&& isset($data['body'])&& isset($data['id'])) {
                    if(isset($_FILES['img']) && is_uploaded_file($_FILES['img']['tmp_name'])){
                    $path=realpath('assets/images/');
                    $config['upload_path']=$path;
                    $config['allowed_types']='gif|png|jpg|jpeg';
                    $this->load->library('upload',$config);
                    if (!$this->upload->do_upload('img')) {
                        $error=$this->upload->display_errors();
                        setFlashData('alert-danger','$error','admin/viewPackage');
                    }
                    else{
                        $fileName=$this->upload->data();
                        $data['img']=$fileName['file_name'];
                        
                    }

                    }//Image Chaking Here
                    $reply=$this->modAdmin->updatePackage($data,$data['id']);
                    if ($reply) {
                        if (!empty($data['img']) && isset($data['img'])) {
                            if (file_exists($path.'/'.$oldimg)) {
                                unlink($path.'/'.$oldimg);
                            }
                        }
                $this->session->set_flashdata('class','alert-success');
                $this->session->set_flashdata('message','Package Updated Successfully');
                redirect('admin/viewPackage');
                        
                    }
                    else{
                        setFlashData('alert-danger','You can not updated now','admin/viewPackage');
                    }
                    # code...
                }
                else{
                    setFlashData('alert-danger','Please Check Every Field','admin/viewPackage');

                }
           
        }
        public function deletePackage($id){
            if(!empty($id) && isset($id)){
                  $data=$this->modAdmin->deletePackage($id);
                  if ($data) {
                    $this->session->set_flashdata('class','alert-success');
                        $this->session->set_flashdata('message','Package Delated');
                        redirect('admin/viewPackage');
                    
                  }
                  else{
                   $this->session->set_flashdata('class','alert-danger');
                   $this->session->set_flashdata('message','Guide not found');
                    redirect('admin/viewPackage');
                  }
                }
                else{
                    $this->session->set_flashdata('class','alert-danger');
                   $this->session->set_flashdata('message','Guide Name  not found');
                    redirect('admin/viewPackage');


                }

        }
        public function bookPackage(){
        $data['user_id']= $this->input->post('user_id','true');
        $data['package_id']= $this->input->post('package_id','true');
        $data['img']= $this->input->post('img','true');
        $data['user_name']= $this->input->post('user_name','true');
        $data['bookingDate']= $this->input->post('to','true');
        $data['delegate']= $this->input->post('delegate','true');
$data['payment_methood']= $this->input->post('payment_methood','true');
        $data['package_name']= $this->input->post('package_name','true');
        $data['price']= $this->input->post('package_price','true');

                if (!empty($data['package_name'])) {
                    
            $addData=$this->modAdmin->checkUserBookingExistence($data);
                    if ($addData->num_rows()>0) {
                        
                    $this->session->set_flashdata('class','alert-danger');
                   $this->session->set_flashdata('order','For This Package Your Order is Already Exist By You');
                    redirect('home/package');
                       
                    }
                    elseif($data['payment_methood']=='1'){
                        $addData=$this->modAdmin->addbookPackage($data);
                    if ($addData) {
                       
                    $this->session->set_flashdata('class','alert-success');
                   $this->session->set_flashdata('order','You Booked A Package For <span class="btn btn-success">'.$data['delegate'].'</span> Person Booked Date is<span class="btn btn-success"> '.$data['bookingDate'].'</span>  Package Price is <span class="btn btn-danger">'.$data['price'].' </span> (Per Person)');
                    redirect('home/package');
                    }
                    else{
                       
                         $this->session->set_flashdata('class','alert-danger');
                   $this->session->set_flashdata('order','Package not Booked');
                    redirect('home/package');
                    }
                    }
                    else{
                    $data['payment_state']=1;   
                    $addData=$this->modAdmin->addbookPackage($data);
                    if ($addData) {
                       
                        $this->session->set_flashdata('class','alert-success');
                   $this->session->set_flashdata('order','After Check Your Payment System We will Confirm you About This Booking');
                    redirect('home/package');
                    }
                    else{
                       
                         $this->session->set_flashdata('class','alert-danger');
                   $this->session->set_flashdata('order','Package not Booked');
                    redirect('home/package');
                    } 
                    }
                    
                }
                else{
                   
                   $this->session->set_flashdata('class','alert-danger');
                   $this->session->set_flashdata('order','Something Is Wrong');
                    redirect('home/package');

                }

        }
        public function addPlace(){
        $data['addPlaceType']=$this->modAdmin->fetch_allPlaceType();
        $data['allLocation']=$this->modAdmin->fetchaAllLocation();
        $this->load->view('Admin/header');
        $this->load->view('Admin/admin_header');
        $this->load->view('Admin/addPlace',$data);
        $this->load->view('Admin/admin_footer');
        $this->load->view('Admin/footer');
        }
        public function addPlaceType(){

        $this->load->view('Admin/header');
        $this->load->view('Admin/admin_header');
        $this->load->view('Admin/addPlaceType');
        $this->load->view('Admin/admin_footer');
        $this->load->view('Admin/footer');  
        }
        public function placeTypeAdd(){

        $data['ptype_name']= $this->input->post('ptype_name','true');
                if (!empty($data['ptype_name'])) {
                    
    $addptype_name=$this->modAdmin->checkptype_nameExistencs($data);
                    if ($addptype_name->num_rows()>0) {
                        $this->session->set_flashdata('class','alert-danger');
                        $this->session->set_flashdata('message','Sorry This Type of Place is Alredy Exist');
                        redirect('admin/addPlaceType');
                       
                    }
                    else{
            $addptype_name=$this->modAdmin->addPlaceType($data);
                    if ($addptype_name) {
                        $this->session->set_flashdata('class','alert-success');
                        $this->session->set_flashdata('message','Type Of Place Added Successfully');
                        redirect('admin/addPlaceType');
                    }
                    else{
                        $this->session->set_flashdata('class','alert-danger');
                        $this->session->set_flashdata('message','Place Type not Added');
                        redirect('admin/addPlaceType');
                    }
                    }
                    
                }
                else{
                   
                   $this->session->set_flashdata('class','alert-danger');
                        $this->session->set_flashdata('message','Place Name Required');
                        redirect('admin/addPlaceType'); 

                }
        }
    public function viewPlaceType(){
        $data['allPlaceType']=$this->modAdmin->fetchallPlaceType();
            $this->load->view('Admin/header');
            $this->load->view('Admin/admin_header');
            $this->load->view('Admin/viewPlaceType',$data);
            $this->load->view('Admin/admin_footer');
            $this->load->view('Admin/footer');
    }
    public function editPlaceType($id){
       $data['placeType']=$this->modAdmin->chekPlaceTypeById($id);
            if (count($data['placeType'])==1) {
            $this->load->view('Admin/header');
            $this->load->view('Admin/admin_header');
            $this->load->view('Admin/editPlaceType',$data);
            $this->load->view('Admin/admin_footer');
            $this->load->view('Admin/footer');
                  }
    }
    public function updatePlaceType(){
            $data['ptype_name']=$this->input->post('ptype_name',true);
            $data['id']=$this->input->post('id',true); 
                
                if (!empty($data['ptype_name']) && isset($data['id'])) {

        $reply=$this->modAdmin->updatePlaceType($data,$data['id']);
                    if ($reply) {
                        
                $this->session->set_flashdata('class','alert-success');
                $this->session->set_flashdata('message','Place Type Updated Successfully');
                redirect('admin/viewPlaceType');
                        
                    }
                    else{
            $this->session->set_flashdata('class','alert-danger');
            $this->session->set_flashdata('message','Place Type Not Updated');
            redirect('admin/viewPlaceType');
                    }
                   
                }
                else{
            $this->session->set_flashdata('class','alert-danger');
            $this->session->set_flashdata('message','Place Type Name Not Found');
            redirect('admin/viewPlaceType');

                }
    }
    public function deletePlaceType($id){
                 if(!empty($id) && isset($id)){
                  $data=$this->modAdmin->deletePlaceType($id);
                  if ($data) {
                    $this->session->set_flashdata('class','alert-success');
                        $this->session->set_flashdata('message','Place Type Delated');
                        redirect('admin/viewPlaceType');
                    
                  }
                  else{
                   $this->session->set_flashdata('class','alert-danger');
                   $this->session->set_flashdata('message','Place Type not found');
                    redirect('admin/viewPlaceType');
                  }
                }
                else{
                    $this->session->set_flashdata('class','alert-danger');
                   $this->session->set_flashdata('message','Place Type  not found');
                    redirect('admin/viewPlaceType');


                }
    }
    public function placeAdd(){
    $data['place_name']= $this->input->post('place_name','true');
    $data['category']= $this->input->post('category','true');
    $data['area']= $this->input->post('area','true');
    $data['place_description']= $this->input->post('place_description','true');
                if (!empty($data['place_name'])) {
                    $path=realpath('assets/images/');
                    $config['upload_path']=$path;
                    $config['allowed_types']='gif|png|jpg|jpeg';
                    $this->load->library('upload',$config);
                    if (!$this->upload->do_upload('img')) {
                        $error=$this->upload->display_errors();
                        
                         $this->session->set_flashdata('class','alert-danger');
                   $this->session->set_flashdata('message','Image not found');
                    redirect('admin/addPlace');
                    }
                    else{
                        $fileName=$this->upload->data();
                        $data['img']=$fileName['file_name'];
                      
                    }
            $addData=$this->modAdmin->checkPlaceExistence($data);
                    if ($addData->num_rows()>0) {
                        
                        $this->session->set_flashdata('class','alert-danger');
                   $this->session->set_flashdata('message','Sorry This News is Alredy Exist');
                    redirect('admin/addPlace');
                       
                    }
                    else{
                        $addData=$this->modAdmin->addPlace($data);
                    if ($addData) {
                       
                        $this->session->set_flashdata('class','alert-success');
                   $this->session->set_flashdata('message','Place Added Successfully');
                    redirect('admin/addPlace');
                    }
                    else{
                       
                         $this->session->set_flashdata('class','alert-danger');
                   $this->session->set_flashdata('message','Package not Added');
                    redirect('admin/addPlace');
                    }
                    }
                    
                }
                else{
                   
                   $this->session->set_flashdata('class','alert-danger');
                   $this->session->set_flashdata('message','Check All Field please');
                    redirect('admin/addPlace');

                }
    }
    public function addGuide(){
       $data['allLocation']=$this->modAdmin->fetchaAllLocation();
        $this->load->view('Admin/header');
        $this->load->view('Admin/admin_header');
        $this->load->view('Admin/addGuide',$data);
        $this->load->view('Admin/admin_footer');
        $this->load->view('Admin/footer');
    }
    public function addLocation(){
        $this->load->view('Admin/header');
        $this->load->view('Admin/admin_header');
        $this->load->view('Admin/addLocation');
        $this->load->view('Admin/admin_footer');
        $this->load->view('Admin/footer');  
    }
    public function locationAdd(){

        $data['city_name']= $this->input->post('city_name','true');
                if (!empty($data['city_name'])) {
                    
$addptype_name=$this->modUser->checkpLocation_nameExistencs($data);
                    if ($addptype_name->num_rows()>0) {
                        $this->session->set_flashdata('class','alert-danger');
                        $this->session->set_flashdata('message','Sorry This Location is Alredy Exist');
                        redirect('admin/addLocation');
                       
                    }
                    else{
            $addptype_name=$this->modAdmin->addLocation($data);
                    if ($addptype_name) {
                        $this->session->set_flashdata('class','alert-success');
                        $this->session->set_flashdata('message','Location Added Successfully');
                        redirect('admin/addLocation');
                    }
                    else{
                        $this->session->set_flashdata('class','alert-danger');
                        $this->session->set_flashdata('message','Location not Added');
                        redirect('admin/addLocation');
                    }
                    }
                    
                }
                else{
                   
                   $this->session->set_flashdata('class','alert-danger');
                        $this->session->set_flashdata('message','Place Name Required');
                        redirect('admin/addPlaceType'); 

                }
        }
    public function viewLocation(){
        $data['allLocation']=$this->modAdmin->fetchallLocation();
            $this->load->view('Admin/header');
            $this->load->view('Admin/admin_header');
            $this->load->view('Admin/viewLocation',$data);
            $this->load->view('Admin/admin_footer');
            $this->load->view('Admin/footer');
    }
    public function editLocation($id){
       $data['location']=$this->modAdmin->chekLocationById($id);
            if (count($data['location'])==1) {
            $this->load->view('Admin/header');
            $this->load->view('Admin/admin_header');
            $this->load->view('Admin/editLocation',$data);
            $this->load->view('Admin/admin_footer');
            $this->load->view('Admin/footer');
                  }
    }
    public function updateLocation(){
            $data['city_name']=$this->input->post('city_name',true);
            $data['id']=$this->input->post('id',true); 
                
                if (!empty($data['city_name']) && isset($data['id'])) {

        $reply=$this->modAdmin->updateLocation($data,$data['id']);
                    if ($reply) {
                        
                $this->session->set_flashdata('class','alert-success');
                $this->session->set_flashdata('message','Location Updated Successfully');
                redirect('admin/viewLocation');
                        
                    }
                    else{
            $this->session->set_flashdata('class','alert-danger');
            $this->session->set_flashdata('message','Location Not Updated');
            redirect('admin/viewLocation');
                    }
                   
                }
                else{
            $this->session->set_flashdata('class','alert-danger');
            $this->session->set_flashdata('message','Location Not Found');
            redirect('admin/viewLocation');

                }
    }
    public function deleteLocation($id){
                if(!empty($id) && isset($id)){
                  $data=$this->modAdmin->deleteLocation($id);
                  if ($data) {
                    $this->session->set_flashdata('class','alert-success');
                        $this->session->set_flashdata('message','Location Delated');
                        redirect('admin/viewLocation');
                    
                  }
                  else{
                   $this->session->set_flashdata('class','alert-danger');
                   $this->session->set_flashdata('message','Location not found');
                    redirect('admin/viewLocation');
                  }
                }
                else{
                    $this->session->set_flashdata('class','alert-danger');
                   $this->session->set_flashdata('message','Location Name  not found');
                    redirect('admin/viewLocation');


                }
    }
    public function editGuide($id){
       $data['allLocation']=$this->modAdmin->fetchaAllLocation();
       $data['allGuide']=$this->modAdmin->chekGuideById($id);
            if (count($data['allGuide'])==1) {
            $this->load->view('Admin/header');
            $this->load->view('Admin/admin_header');
            $this->load->view('Admin/editGuide',$data);
            $this->load->view('Admin/admin_footer');
            $this->load->view('Admin/footer');
                  }
    }
    public function updateGuide(){
        $data['name']=$this->input->post('name',true);
        $data['nationality']=$this->input->post('nationality',true);
        $data['address']=$this->input->post('address',true);
        $data['mobailenumber']=$this->input->post('mobailenumber',true);
       $data['password']=$this->input->post('password',true);
       $data['area']=$this->input->post('area',true);
       $data['user_name']=$this->input->post('area',true);
          
           $data['id']=$this->input->post('id',true); 
           $oldimg=$this->input->post('pic',true);
                if (!empty($data['name'])&& isset($data['nationality']) && isset($data['area']) && isset($data['id'])) {
                    if(isset($_FILES['pic']) && is_uploaded_file($_FILES['pic']['tmp_name'])){
                    $path=realpath('assets/images/');
                    $config['upload_path']=$path;
                    $config['allowed_types']='gif|png|jpg|jpeg';
                    $this->load->library('upload',$config);
                    if (!$this->upload->do_upload('pic')) {
                        $error=$this->upload->display_errors();
                        setFlashData('alert-danger','$error','admin/viewPlace');
                    }
                    else{
                        $fileName=$this->upload->data();
                        $data['pic']=$fileName['file_name'];
                        
                    }

                    }
            $reply=$this->modAdmin->updateGuide($data,$data['id']);
                    if ($reply) {
                        if (!empty($data['pic']) && isset($data['pic'])) {
                            if (file_exists($path.'/'.$oldimg)) {
                                unlink($path.'/'.$oldimg);
                            }
                        }
                $this->session->set_flashdata('class','alert-success');
                $this->session->set_flashdata('message','Guide Updated Successfully');
                redirect('admin/viewGuide');
                        
                    }
                    else{
                        setFlashData('alert-danger','Guide Info not updated now','admin/viewPlace');
                    }
                    # code...
                }
                else{
                    setFlashData('alert-danger','Please Check Every Field','admin/viewGuide');

                }
    }
    public function guideAdd(){
        
        $path=realpath('assets/images/');
                    $config['upload_path']=$path;
                    $config['allowed_types']='gif|png|jpg|jpeg';
                    $this->load->library('upload',$config);
                    if (!$this->upload->do_upload('pic')) {
                    }
                    else{
                        $fileName=$this->upload->data();
                        $data['pic']=$fileName['file_name'];
                        
                    }
            $data['name']=$this->input->post('name',true);
            $data['nationality']=$this->input->post('nationality',true);
            $data['address']=$this->input->post('address',true);
            $data['mobailenumber']=$this->input->post('mobailenumber',true);
            $data['area']=$this->input->post('area',true);
            $data['user_name']=$this->input->post('user_name',true);
            $data['password']=$this->input->post('password',true);
            $data['status']='1';
            
        if (!empty($data['name'])  && !empty($data['nationality']) &&!empty($data['address']) && !empty($data['mobailenumber']) && !empty($data['area']) &&!empty($data['user_name']) && !empty($data['pic'] && !empty($data['password'])) ) {
            $chkRegister=$this->modUser->chkRegister($data);
            if ($chkRegister==0) {
                $addGuide=$this->modUser->addGuide($data);
                if ($addGuide) {
                    $this->session->set_flashdata('class','alert-success');
                    $this->session->set_flashdata('message','A Guide Successfully Added');
                    redirect('admin/addGuide');
                    
                }
                else{
                    $this->session->set_flashdata('class','alert-danger');
                    $this->session->set_flashdata('message','Sorry You can not Add');
                    redirect('admin/addGuide');
                }
            }
            else{
                    $this->session->set_flashdata('class','alert-danger');
                    $this->session->set_flashdata('message','Sorry Your Provided Mubaile Number or User Name Alredy Used');
                    redirect('admin/addGuide');
                }
        }
        else{
            $this->session->set_flashdata('class','alert-danger');
            $this->session->set_flashdata('message','Please Provide All Information ');
            redirect('admin/addGuide');
        }
    }
    public function bookedPakage(){
        $data['allBookedPackage']=$this->modAdmin->fetchallBookedPackage();
        $this->load->view('Admin/header');
        $this->load->view('Admin/admin_header');
        $this->load->view('Admin/bookedPakage',$data);
        $this->load->view('Admin/admin_footer');
        $this->load->view('Admin/footer');

    }
    public function changeBOState($id){
      $data['state']='1';
      $updateAdmin=$this->modAdmin->updateBOState($data,$id);
      redirect('admin/bookedPakage');
    }
    public function changePaymentState($id){
      $data['payment_state']='0';
      $updateAdmin=$this->modAdmin->updateBOState($data,$id);
      redirect('admin/bookedPakage');
    }
    public function denyBoPack($id){
      $updateAdmin=$this->modAdmin->deleteBoPack($id);
      redirect('admin/bookedPakage');  
    }
    public function denyBoPackByCustomer($id){
      $updateAdmin=$this->modAdmin->deleteBoPack($id);
      redirect('home/customerPackage');  
    }
    public function finishBoPackRunning($id){
      $data['state']='2';
      $updateAdmin=$this->modAdmin->finishBoPackRunning($data,$id);
      redirect('admin/bookedPakage'); 
    }
    public function bookedGuide(){
        $data['allBookedPackage']=$this->modAdmin->bookedGuide();
        $this->load->view('Admin/header');
        $this->load->view('Admin/admin_header');
        $this->load->view('Admin/bookedGuide',$data);
        $this->load->view('Admin/admin_footer');
        $this->load->view('Admin/footer');
    }

        
}

