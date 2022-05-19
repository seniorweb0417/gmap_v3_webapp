<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
    function __construct() {
        parent::__construct();
        $this->load->model('Marker_model');
    }

	public function index() {
		$this->load->view('Landing');
	}

    public function saveMarker() {
        $username = $this->input->post('username');
        $type = $this->input->post('type');
        $lat = $this->input->post('lat');
        $lng = $this->input->post('lng');
        $phase = $this->input->post('phase');
        $subphase = $this->input->post('subphase');
        $building = $this->input->post('building');
        $apt = $this->input->post('apt');
        $floor = $this->input->post('floor');
        $elevator = $this->input->post('elevator');
        $over = $this->input->post('over');
        $paid_amount = $this->input->post('paid_amount');
        $remaining_balance = $this->input->post('remaining_balance');
        $remaining_years = $this->input->post('remaining_years');
        $notes = $this->input->post('notes');

        echo $this->Marker_model->saveMarker($username, $type, $lat, $lng, $phase, $subphase, $building, $apt, $floor, 
        $elevator, $over, $paid_amount, $remaining_balance, $remaining_years, $notes);
    }

    public function loadMarker() {
        echo json_encode($this->Marker_model->loadMarker());
    }
}
