<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Breadcrumbs {
	
	/**
	 * Breadcrumbs stack
	 * load file config breadcrums
	 * deklarasi item breadcrums dari file 
     */
	public $modul='';
	private $breadcrumbs = array();
	 	
	public function __construct()
	{	
		$this->ci =& get_instance();
		// Load config file braed crumbs
		$this->ci->load->config('breadcrumbs');
		// ambil Get breadcrumbs display options,mengembalikan nilai error
		$this->tag_open = $this->ci->config->item('tag_open');
		$this->tag_close = $this->ci->config->item('tag_close');
		$this->divider = $this->ci->config->item('divider');
		$this->crumb_open = $this->ci->config->item('crumb_open');
		$this->crumb_close = $this->ci->config->item('crumb_close');
		$this->crumb_last_open = $this->ci->config->item('crumb_last_open');
		$this->crumb_divider = $this->ci->config->item('crumb_divider');
		$this->modul = $this->ci->config->item('modul');
		log_message('debug', "Breadcrumbs Class Berlum Terdaftar");
	}

	function site(){
		$this->tag_open='<ul class="breadcrumb">';
		$this->crumb_divider='';
	}
	
	
	public function modul($modul){
		return $this->modul;
	}	
	function push($page, $href)
	{
		// halaman provider href
		if (!$page OR !$href) return;
		
		// ambil site url
		$href = site_url($href);
		
		// push breadcrumb
		$this->breadcrumbs[$href] = array('page' => $page, 'href' => $href);
	}
	
	// --------------------------------------------------------------------
	/**
	 * Prepend crumb to stack
	 *
	 * @access	public
	 * @param	string $page
	 * @param	string $href
	 * @return	void
	 */		
	function unshift($page, $href)
	{
		// no crumb provided
		if (!$page OR !$href) return;
		
		// Prepend site url
		$href = site_url($href);
		
		// add at firts
		array_unshift($this->breadcrumbs, array('page' => $page, 'href' => $href));
	}
	
	// --------------------------------------------------------------------
	/**
	 * Generate breadcrumb
	 *
	 * @access	public
	 * @return	string
	 */		
	function show()
	{
		if ($this->breadcrumbs) {
		
			// set output variable
			$output = $this->tag_open;
			$link=session('is_login')==true?site_url('page/dashboard'):site_url('page/dashboard');
			$output .= $this->crumb_open.'<h3 class="kt-subheader__title"> </h3> <span class="kt-subheader__separator kt-hidden"></span>
			<div class="kt-subheader__breadcrumbs">
				<a href="'.$link.'" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter kt-font-primary"></i></a>
				<span class="kt-badge kt-badge--primary kt-badge--dot mr-2"></span> ';
			//construct output
			foreach ($this->breadcrumbs as $key => $crumb) {
				$keys = array_keys($this->breadcrumbs);
				if (end($keys) == $key) {
					$output .= '<span class="kt-subheader__breadcrumbs-link">' . $crumb['page'] . '</span> ';
				} else {
					$output .= '<a class="kt-subheader__breadcrumbs-link" href="' . $crumb['href'] . '">' . $crumb['page'] . '</a> '.$this->crumb_divider;
				}
			}
			
			// return output
			return $output . $this->crumb_close . PHP_EOL;
		}
		
		// no crumbs
		return '';
	}
}