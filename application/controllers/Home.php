<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$data['allPlace']=$this->modAdmin->fetchallPlace();
		$this->load->view('FrontEnd/header');
		$this->load->view('FrontEnd/navbar');
		$this->load->view('FrontEnd/home',$data);
		$this->load->view('FrontEnd/footer');
	}
	public function package(){
		$data['allPlace']=$this->modAdmin->fetchallPlace();
		$data['allPackage']=$this->modAdmin->fetchallPackage();
		$this->load->view('FrontEnd/header');
		$this->load->view('FrontEnd/navbar');
		$this->load->view('FrontEnd/package',$data);
		$this->load->view('FrontEnd/footer');
	}
	public function places(){
		$data['allPlace']=$this->modAdmin->fetchallPlace();
		$data['placeType']=$this->modAdmin->fetchallPlaceType();
		$this->load->view('FrontEnd/header');
		$this->load->view('FrontEnd/navbar');
		$this->load->view('FrontEnd/places',$data);
		$this->load->view('FrontEnd/footer');
	}
	public function guide(){
		$data['allPlace']=$this->modAdmin->fetchallPlace();
		$data['allGuide']=$this->modAdmin->fetchallGuide();
		$this->load->view('FrontEnd/header');
		$this->load->view('FrontEnd/navbar');
		$this->load->view('FrontEnd/guide',$data);
		$this->load->view('FrontEnd/footer');
	}
	public function signin(){
		$data['allPlace']=$this->modAdmin->fetchallPlace();
		$this->load->view('FrontEnd/header');
		$this->load->view('FrontEnd/navbar');
		$this->load->view('FrontEnd/signin');
		$this->load->view('FrontEnd/footer',$data);
	}
	public function guidesignin(){
		$data['allPlace']=$this->modAdmin->fetchallPlace();
		$data['allLocation']=$this->modAdmin->fetchaAllLocation();
		$this->load->view('FrontEnd/header');
		$this->load->view('FrontEnd/navbar');
		$this->load->view('FrontEnd/guidesignin',$data);
		$this->load->view('FrontEnd/footer');
	}
	public function guideRegistration(){
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
        $path=realpath('assets/images/');
                    $config['upload_path']=$path;
                    $config['allowed_types']='gif|png|jpg|jpeg';
                    $this->load->library('upload',$config);
                    if (!$this->upload->do_upload('pic')) {
                    }
                    else{
                        $fileName=$this->upload->data();
                        $data['pic']=$fileName['file_name'];
                        $data['date']=date('Y-M-d h:i:sa');
                    }
			$data['name']=$this->input->post('name',true);
		    $data['nationality']=$this->input->post('nationality',true);
			$data['address']=$this->input->post('address',true);
			$data['mobailenumber']=$this->input->post('mobailenumber',true);
			$data['area']=$this->input->post('area',true);
		    $data['user_name']=$this->input->post('user_name',true);
		    $data['pic']=$this->input->post('pic',true);
		    $data['password']=$this->input->post('password',true);
		    
		if (!empty($data['name'])  && !empty($data['nationality']) &&!empty($data['address']) && !empty($data['mobailenumber']) && !empty($data['area']) &&!empty($data['user_name']) && !empty($data['pic'] && !empty($data['password'])) ) {
			$chkRegister=$this->modUser->chkRegister($data);
			if ($chkRegister==0) {
				$addGuide=$this->modUser->addGuide($data);
				if ($addGuide) {
					$this->session->set_flashdata('class','alert-success');
					$this->session->set_flashdata('message','Your are Successfully Registered');
					redirect('Home/guidesignin');
                    
				}
				else{
					$this->session->set_flashdata('class','alert-danger');
					$this->session->set_flashdata('message','Sorry You can not Register');
					redirect('Home/guidesignin');
				}
			}
			else{
					$this->session->set_flashdata('class','alert-danger');
					$this->session->set_flashdata('message','Sorry You can not Register');
					redirect('Home/guidesignin');
				}
		}
	
	}
	public function login(){
				$data['user_name']=$this->input->post('user_name',true);
                $data['password']=$this->input->post('password',true);
                if(!empty($data['user_name']) && !empty($data['password'])){
                $permitlogin=$this->modUser->permitlogin($data);
                if (count($permitlogin)==1) {
                 
                     $forSession=array(
                        
                         'name'=> $permitlogin[0]['user_name'],
                         'Guide_id'=> $permitlogin[0]['id'],
                         
                         'logged_in' => TRUE,
                         'User_type' => TRUE
                        
                );
                     
                    $this->session->set_userdata($forSession);
                    if ($this->session->userdata('User_type')) {
                    	
                        redirect('home');
                    }
                    else{
                        echo "Session not Created";
                    }
                    
                }
                else{
                	$this->session->set_flashdata('clas','alert-danger');
                	$this->session->set_flashdata('msg','login');
					$this->session->set_flashdata('message','Sorry,U Can not Login');
					redirect('Home/guidesignin');

                }
	}
	}

	public function logout(){
       
            if ($this->session->userdata('User_type')) {
                $this->session->unset_userdata('User_type','');
                $this->session->unset_userdata('name','');
                $this->session->unset_userdata('id','');
                $this->session->unset_userdata('Guide_id','');
                $this->session->unset_userdata('logged_in','');
               
                redirect('home');
                
            }
            
            elseif($this->session->userdata('id')) {
            	
            	$this->session->unset_userdata('User_type','');
                $this->session->unset_userdata('name','');
                $this->session->unset_userdata('id','');
                $this->session->unset_userdata('Guide_id','');
                $this->session->unset_userdata('logged_in','');
                redirect('home');
            }
        }
    public function UserRegister(){
    			$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		/*$this->form_validation->set_rules('name','Name','required|alpha',
        array('alpha' => 'আপনার সঠিক নামে প্রবেশ করুন'));*/
        $path=realpath('assets/images/');
                    $config['upload_path']=$path;
                    $config['allowed_types']='gif|png|jpg|jpeg';
                    $this->load->library('upload',$config);
                    if (!$this->upload->do_upload('pic')) {
                        
                    }
                    else{
                        $fileName=$this->upload->data();
                        $data['pic']=$fileName['file_name'];
                        $data['date']=date('Y-M-d h:i:sa');
                    }
			$data['name']=$this->input->post('name',true);
		    $data['user_name']=$this->input->post('user_name',true);
			$data['mobaile_number']=$this->input->post('mobaile_number',true);
		    $data['pic']=$this->input->post('pic',true);
		    $data['password']=$this->input->post('password',true);
		    $data['status']='0';
		if (!empty($data['name'])  && !empty($data['mobaile_number'])  &&!empty($data['user_name']) && !empty($data['pic'] && !empty($data['password'])) ) {
			$chkRegister=$this->modUser->chkUserRegister($data);
			if ($chkRegister==0) {
				$addGuide=$this->modUser->addUser($data);
				if ($addGuide) {
					$this->session->set_flashdata('class','alert-success');
					$this->session->set_flashdata('message','Your are Successfully Registered');
					redirect('Home/signin');
                    
				}
				else{
					$this->session->set_flashdata('class','alert-danger');
					$this->session->set_flashdata('message','Sorry You can not Register');
					redirect('Home/signin');
				}
			}
			else{
					$this->session->set_flashdata('class','alert-danger');
					$this->session->set_flashdata('message','This Mobaile Number Or User Name Already Registred');
					redirect('Home/signin');
				}
		}
    }
    public function UserLogin(){
    					$data['user_name']=$this->input->post('user_name',true);
                $data['password']=$this->input->post('password',true);
                if(!empty($data['user_name']) && !empty($data['password'])){
                $permitlogin=$this->modUser->permitUserlogin($data);
                if (count($permitlogin)==1) {
                 
                     $forSession=array(
                        'id'=> $permitlogin[0]['id'],
                        'name'=> $permitlogin[0]['user_name'],
                         'logged_in' => TRUE
                         
                        
                );
                     $this->session->set_userdata($forSession); 
                     
                    $this->session->set_userdata($forSession);
                    if ($this->session->userdata('id')) {
                    	
                        redirect('home');
                    }
                    else{
                        echo "Session not Created";
                    }
                    
                }
                else{
                	$this->session->set_flashdata('clas','alert-danger');
                	$this->session->set_flashdata('msg','login');
					$this->session->set_flashdata('message','Sorry,U Can not Login');
					redirect('Home/signin');

                }
	}
    }
    public function packageBooking($id,$userId){
    	$data['allPlace']=$this->modAdmin->fetchallPlace();
    	 $data['package']=$this->modAdmin->chekPackageById($id);
    	 $data['user']=$this->modAdmin->chekUserById($userId);
    	$this->load->view('FrontEnd/header');
		$this->load->view('FrontEnd/navbar');
		$this->load->view('FrontEnd/packageBooking',$data);
		$this->load->view('FrontEnd/footer');
    }
    public function fetchCatById($id){
    	$data['allPlace']=$this->modUser->fetchallPlaceById($id);
		$data['placeType']=$this->modAdmin->fetchallPlaceType();
		$this->load->view('FrontEnd/header');
		$this->load->view('FrontEnd/navbar');
		$this->load->view('FrontEnd/places',$data);
		$data['allPlace']=$this->modAdmin->fetchallPlace();
		$this->load->view('FrontEnd/footer',$data);
    }
    public function fetchGuideByPlaceName($name){
        $data['allPlace']=$this->modAdmin->fetchallPlace();
		$data['allGuide']=$this->modAdmin->fetchallGuideByName($name);
		$this->load->view('FrontEnd/header');
		$this->load->view('FrontEnd/navbar');
		$this->load->view('FrontEnd/guide',$data);
		$this->load->view('FrontEnd/footer');

    }
    public function customerPackage(){
    	$data['allPlace']=$this->modAdmin->fetchallPlace();
    	$data['allBookedPackage']=$this->modUser->fetchallBookedPackageByUserId();
		$this->load->view('FrontEnd/header');
		$this->load->view('FrontEnd/navbar');
		$this->load->view('FrontEnd/customerPackage',$data);
		$this->load->view('FrontEnd/footer');
    }
    public function guideBooking($guide_id){
    	$chkRegister=$this->modUser->chkbookedGuidByid($guide_id);
    	if ($chkRegister==0) {
    		$data['user_name']=$this->session->userdata('name');
    		$data['user_id']=$this->session->userdata('id');
    		$data['guide_id']=$guide_id;
    		$guideBook=$this->modUser->addGuideBook($data);
    		if ($guideBook) {
    			$this->session->set_flashdata('class','alert-success');
				$this->session->set_flashdata('message','This Guide Book Request Sent Successfully');
				redirect('Home/guide');
    		}
    	}
    	else{
    		$this->session->set_flashdata('class','alert-danger');
			$this->session->set_flashdata('message','Sorry! Your can not Book him now');
				redirect('Home/guide');
    	}


    }
    public function customerRequestToGuide(){
      $data['allPlace']=$this->modAdmin->fetchallPlace();
      $data['allBookedPackage']=$this->modUser->customerRequestToGuideById();
      $this->load->view('FrontEnd/header');
	  $this->load->view('FrontEnd/navbar');
	  $this->load->view('FrontEnd/customerRequestToGuide',$data);
	  $this->load->view('FrontEnd/footer');
    }
    public function acceptRequestOfCustomer($id){
      $chkRegister=$this->modUser->chkguideBook();
      if ($chkRegister==0) {
      	$data['state']='1';
        $updateAdmin=$this->modUser->updateGuideBookToOne($data,$id);
        redirect('home/customerRequestToGuide');
      }
    }
    public function guideServiceToSuccess($id){
      
     
      	$data['state']='2';
        $updateAdmin=$this->modUser->updateGuideBookToOne($data,$id);
        redirect('home/customerRequestToGuide');
      
    } 
    public function deleteRequestOfCustomer($id){
        $data=$this->modUser->deleteRequestOfCustomer($id);
        redirect('home/customerRequestToGuide');
    }
    public function customerWithGuide(){
    $data['allPlace']=$this->modAdmin->fetchallPlace();
      $data['allBookedPackage']=$this->modUser->customerWithGuide();
      $this->load->view('FrontEnd/header');
	  $this->load->view('FrontEnd/navbar');
	  $this->load->view('FrontEnd/customerWithGuide',$data);
	  $this->load->view('FrontEnd/footer');
    }
}
