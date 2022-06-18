<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventorganizing extends Apps {

  public function index()
  {
    set_label("Event Organizing","Daftar Events");
    $this->template("v_eventorganizing");
  }

  function detail(){
    set_label("Event Organizing","Daftar Events");
    $this->template("v_detail_eventorganizing");
  }

}

/* End of file Eventorganizing.php */
