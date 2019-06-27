<?php 

class Model_genre extends CI_Model{

	public function data_fantasy(){
		return $this->db->get_where("tb_barang", array('kategori' => 'fantasy'));

	}

	public function data_action(){
		return $this->db->get_where("tb_barang", array('kategori' => 'action'));

	}

	public function data_adventure(){
		return $this->db->get_where("tb_barang", array('kategori' => 'adventure'));

	}

	public function data_comedy(){
		return $this->db->get_where("tb_barang", array('kategori' => 'comedy'));

	}


}













