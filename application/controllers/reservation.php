<?php
class reservation extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_cari');
		$this->load->model('m_data');
		$this->load->model('reservation_m');
	}

	function index(){
		$this->load->view('form');
	}

	function prosestambah(){
		$name = $this->input->post('name');
		$lastname = $this->input->post('lastname');
		$email = $this->input->post('email');
		$phonenumber = $this->input->post('phonenumber');
		$reservationcode = $this->input->post('reservationcode');
		$reservationat = $this->input->post('reservationat');
		$reservationdate = $this->input->post('reservationdate');
		$seatcode = $this->input->post('seatcode');
		$customerid = $this->input->post('customerid');
		$ruteid = $this->input->post('ruteid');
		$departat = $this->input->post('departat');
		$price = $this->input->post('price');
		$userid = $this->input->post('userid');
		$dataproses = array(
			'reservation_code'=>$reservationcode,
			'reservation_at'=>$reservationat,
			'seat_code'=>$seatcode,
			'customer_id'=>$customerid,
			'rute_id'=>$ruteid,
			'depart_at'=>$departat,
			'price'=>$price,
			'user_id'=>$userid,
		);
		$this->reservation_m->add($dataproses);
	}

	function search()
	{
		$rute_form = $this->input->get('rute_from');
		$rute_to = $this->input->get('rute_to');
		$depart_at = $this->input->get('depart_at');
		$s = array(
			'rute_from'=>$rute_from,
			'rute_to'=>$rute_to,
			'depart_at'=>$depart_at,
		);
		$data['tb_rute'] = $this->m_cari->search($s)->result();
		$data['rute'] = $this->m_data->tampil_data_rute()->result();
		$this->load->view('v_hasil_pencarian',$data);
	}
}