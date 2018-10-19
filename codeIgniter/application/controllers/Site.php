<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
	public function index() {
		$this->output->enable_profiler(true);
		$data["title"] = "Voca-site";
		$this->load->view('common/header', $data);
		$data["npub"] = "1";
		$this->load->view('common/pub', $data);
		$this->load->view('site/index', $data);
		$data["npub"] = "2";
		$this->load->view('common/pub', $data);
		$this->load->view('common/footer', $data);
	}
	
	public function galerie() {
		$this->output->enable_profiler(true);
		$data["title"] = "Voca-site";
		$this->load->view('common/header', $data);
		$data["npub"] = "1";
		$this->load->view('common/pub', $data);
		$this->load->view('site/galerie', $data);
		$data["npub"] = "2";
		$this->load->view('common/pub', $data);
		$this->load->view('common/footer', $data);
	}
	
	public function ajout() {
		$this->output->enable_profiler(true);
		$this->load->helper("form");
		$data["title"] = "Voca-site";
		$this->load->view('common/header', $data);
		$this->load->view('site/ajout', $data);
		$this->load->view('common/footer', $data);
	}
	
	public function verification() {
		$this->output->enable_profiler(true);
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('type', '"Type du contenu"', 'trim|required|min_length[5]|max_length[52]|alpha_dash|encode_php_tags');
		$this->form_validation->set_rules('name', '"Nom de la page"', 'trim|required|min_length[5]|max_length[52]|alpha_dash|encode_php_tags');
		$data["title"] = "Voca-site";
		$this->load->view('common/header', $data);
		if($this->form_validation->run())
		{
			//	Le formulaire est valide
			$data["verif"] = "valide";
			$data["type"] = $this->input->post('type');
			$data["name"] = $this->input->post('name');
			$this->load->view('site/verification', $data);
		}
		else
		{
			//	Le formulaire est invalide ou vide
			$data["verif"] = "echec";
			$data["type"] = $this->input->post('type');
			$data["name"] = $this->input->post('name');
			$this->load->view('site/ajout', $data);
		}
		
		$this->load->view('common/footer', $data);
	}
}
