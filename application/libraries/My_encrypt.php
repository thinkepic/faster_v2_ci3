<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class My_encrypt {
 var $cipher = "aes-256-cfb";

    public function safe_b64encode($string) {
 
        $data = base64_encode($string);
        $data = str_replace(array('+','/','='),array('-','_',''),$data);
        return $data;
    }

    public function safe_b64decode($string) {
        $data = str_replace(array('-','_'),array('+','/'),$string);
        $mod4 = strlen($data) % 4;
        if ($mod4) {
            $data .= substr('====', $mod4);
        }
        return base64_decode($data);
    }
 
    public function encode($plain){ 
        $CI =& get_instance();
        if(!$plain){return false;}
        $text = $plain;
        $CI->load->library('encryption');
        $CI->encryption->initialize(
            array(
                    'driver' => 'openssl',
                )
        );
        $crypttext=$CI->encryption->encrypt($plain);
        return trim($this->safe_b64encode($crypttext)); 
    }
    
    public function decode($ency){
        $CI =& get_instance();
        if(!$ency){return false;}
        $text = $this->safe_b64decode($ency);
        $CI->load->library('encryption');
        $CI->encryption->initialize(
            array(
                    'driver' => 'openssl',
                )
        );
        $crypttext=$CI->encryption->decrypt($text);
        return trim($crypttext); 
    }
}
?>