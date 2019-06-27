<?php 

class Genre extends CI_Controller{
	public function fantasy()
	{
		$data['fantasy'] = $this->model_genre->data_fantasy()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('fantasy', $data);
		$this->load->view('templates/footer');
	}

	public function action()
	{
		$data['action'] = $this->model_genre->data_action()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('action', $data);
		$this->load->view('templates/footer');
	}

	public function adventure()
	{
		$data['adventure'] = $this->model_genre->data_adventure()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('adventure', $data);
		$this->load->view('templates/footer');
	}

	public function comedy()
	{
		$data['comedy'] = $this->model_genre->data_comedy()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('comedy', $data);
		$this->load->view('templates/footer');
	}

	
}