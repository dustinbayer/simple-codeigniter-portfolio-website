<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {
    
    public function _remap($method)
    {
        $this->load->view('header');
        
        if ($method === 'mute')
        {
            $this->load->view('content/placeholder_content');
        }
        else
        {
            $this->load->view('content/placeholder_content');
        }
        
        $this->load->view('footer');
    }
}
