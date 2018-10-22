<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// é
class anime extends CI_Controller {
	public function to_aru_kagaku_no_railgun() {
		$this->output->enable_profiler(true);
		$data["title"] = "Voca-site";
		$this->load->view('common/header', $data);
		$data["npub"] = "1";
		$this->load->view('common/pub', $data);
		$this->load->view('anime/to_aru_kagaku_no_railgun', $data);
		$data["npub"] = "2";
		$this->load->view('common/pub', $data);
		$this->load->view('common/footer', $data);
	}
}