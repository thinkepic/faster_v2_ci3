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

<<<<<<< HEAD
=======
  function tes(){
    echo "alhamdulillah";
  }

>>>>>>> 015f185 (merapikan grid yang tidak rapi)
}

/* End of file Eventorganizing.php */
