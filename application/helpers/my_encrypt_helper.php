<?php
function get_url_encode($id){
	$ci =& get_instance();
	$ci->load->library('my_encrypt');
	return $ci->my_encrypt->encode($id);
}
function get_url_decode($ecry){
	$ci =& get_instance();
	$ci->load->library('my_encrypt');
	return $ci->my_encrypt->decode($ecry);
}

?>