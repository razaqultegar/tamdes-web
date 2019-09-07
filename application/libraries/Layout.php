<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Layout {

    protected $CI;

    public function __construct(){
        $this->CI =& get_instance();
    }

    public function set_layout($page, $_data){
        $content = $this->CI->load->view($page, $_data, true); 

        $data = array(
            'content' => $content,
        );

        $this->CI->load->view('layout-document-full', $data);     
    }
}