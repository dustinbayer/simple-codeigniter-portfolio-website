<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Information extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
        $this->load->view('content/treeview_content');
        $this->load->view('footer');
	}
}
