<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends Apps {

  public function index()
  {
    set_label("Event Organizing","Daftar Events");
    $this->template("halaman");
  }

  function data(){
    echo 'i am here !';
  }

}

/* End of file Testing.php */
