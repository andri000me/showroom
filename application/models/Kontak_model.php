<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function listing(){
		$query = $this->db->get('konfigurasi');
		return $query->row();
	}	