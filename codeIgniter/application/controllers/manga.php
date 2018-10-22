<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// é
class manga extends CI_Controller {
	public function kasane() {
		$this->output->enable_profiler(true);
		$data["title"] = "Voca-site";
		$this->load->view('common/header', $data);
		$data["npub"] = "1";
		$this->load->view('common/pub', $data);
		$this->load->view('manga/kasane', $data);
		$data["npub"] = "2";
		$this->load->view('common/pub', $data);
		$this->load->view('common/footer', $data);
	}
}