<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Form_validation extends CI_Form_validation
{
	public function edit_unique($value, $params)
    {
        $this->set_message('edit_unique', "%s sudah digunakan !");
        list($table, $field, $current_id,$primary_field,$primary) = explode(".", $params);
        $result = $this->CI->db->where($field, $value)->get($table)->row();
        return ($result && $result->$primary_field != $primary) ? FALSE : TRUE;
    }

    public function alpha_dash_space($value)
    {
        $this->set_message('alpha_dash_space', "%s tidak boleh mengandung karakter !");
        if (preg_match("/[^a-zA-Z0-9_\s]+/", $value)) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

   
}