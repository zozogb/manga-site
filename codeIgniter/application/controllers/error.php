<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class error extends CI_Controller {
	public function index() {
		$this->output->enable_profiler(true);
		$this->output->set_status_header('404');
		$data["title"] = "Voca-site";
		$this->load->view('common/header', $data);
		$this->load->view('errors/error_404', $data);
		$this->load->view('common/footer', $data);
	}
}