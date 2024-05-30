<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->model('Master_kata');
		$res = $this->Master_kata->get_data();
		
		shuffle($res);
		
		$result['data'] = $res[0];

		$this->load->view('index', $result);
	}

	public function save()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$name = $this->input->post('name');
			$point = $this->input->post('point');

			$data = array(
				'nama_user' => $name,
				'total_point' => $point
			);

			$this->load->model('point_game');
			$save = $this->point_game->save_data($data);

			redirect('/');
		}else{
			redirect('/');
		}
	}

	public function point()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$word = $this->input->post('word');
			$point = 0;

			// Validation
			for ($i=0; $i < strlen($word); $i++) { 
				$nameChar = "data" . $i;
				if(($i+1) == 3 || ($i+1) == 7){
					$point += 0;
				}else if ($word[$i] == $this->input->post($nameChar)) {
					$point += 10;
				}else{
					$point -= 2;
				}
			}

			$result['point'] = $point;

			$this->load->view('result', $result);
		}else{
			redirect('/');
		}
	}

}
