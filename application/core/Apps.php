<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Apps extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        // $ceksession=$this->session->has_userdata('is_login');
        // if($ceksession===false){
        //     redirect('auth/login','refresh');
        // }
        
    }

    function template($page=null,$data=null){
			$data['content'] = $this->load->view($page,$data,TRUE);
      $this->load->view('template/index',$data);
    }

    public function setPesan(){

		$pesan = [
			'required'		   => 	'%s required.',
			'valid_email'	   => 	'%s failed format.',
			'numeric'		   => 	'%s just numeric.',
			'matches'		   =>	'%s not match %s.',
			'is_unique'		   =>	'%s already exist',
			'max_length'	   =>  	'%s max %s character.',
			'min_length'	   =>  	'%s min %s character.',
			'alpha_dash'	   =>	'%s diisi alpabet, numerik, dan garis bawah.',
			'alpha'			   =>  	'%s diisi dengan format alpha a-z',
			'valid_url_format' =>  	'%s format salah, exampel (htpp://www.xxxxx.com/xxx)',
			'is_natural'	   =>  	'%s harus format number 0-9',
			'decimal'	   	   =>	'%s harus format decimal',
		];
		foreach($pesan as $key => $value){
			$this->form_validation->set_message($key, $value);
		}

	}

}

/* End of file App.php */
