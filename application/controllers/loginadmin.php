<?php
defined('BASEPATH') or exit('no direct script access');
/**
* 
*/
class loginadmin extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}
	public function index()
	{
		# code...
		$this->load->view('vindex');
	}
	public function tampilform()
	{
		# code...
		$this->load->view('post');
	}
	public function tampilbooking()
	{
		# code...
		$this->load->view('booking');
	}
	public function tampillogin()
	{
		# code...
		$this->load->view('login');
	}
	public function tampilindex()
	{
		# code...
		$this->load->view('index');
	}
}