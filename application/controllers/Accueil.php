<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller 
{
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->library('session');
	// 	date_default_timezone_set('GMT');
	// 	$this->load->helper('url');
	// 	$this->load->database();
	// 	date_default_timezone_set('GMT');
	// }
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
