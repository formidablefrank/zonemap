<?php
//if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('points');
		$this->load->model('ratings');
		$this->load->model('comments');
		$this->load->model('incidents');
	}

	public function index(){
		$data['title'] = 'Home Page';
		$this->load->view('templates/header', $data);
		$this->load->view('home_view', $data);
		$this->load->view('templates/footer', $data);
	}

	public function viewmap($point_id){
		$data['points'] = $this->points->getAllPoints();
		$data['point'] = $this->points->getPoint($point_id);
		$data['rating'] = $this->ratings->getRating($point_id);
		$data['comments'] = $this->comments->getComments($point_id);
		$data['incidents'] = $this->incidents->getIncidents($point_id);
		$data['title'] = 'DangerZoneMap | ' . $data['point'][0]->address;
		$this->load->view('map_view', $data);
		// foreach ($data['incidents'] as $row) {
		// 	echo $row->freq;
		// };
		// echo $data['point'][0]->lat;
	}

	public function addPoint($lat, $lng, $address){
		$insert_id = $this->points->addPoint($lat, $lng, $address);
		redirect(site_url().'homepage/viewmap/'.$insert_id, 'refresh');
	}

	public function addComment($point_id, $comment, $username='anonymous'){
		$this->comments->addComment($point_id, $comment, $username);
		redirect(site_url().'homepage/viewmap/'.$point_id, 'refresh');
	}

	public function addRating($point_id, $rate){
		$this->ratings->addRating($point_id, $rate);
		redirect(site_url().'homepage/viewmap/'.$point_id, 'refresh');
	}

	public function addIncident($point_id, $incident_no){
		$this->incidents->addIncident($point_id, $incident_no);
		redirect(site_url().'homepage/viewmap/'.$point_id, 'refresh');
	}
}