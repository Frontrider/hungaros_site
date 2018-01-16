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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	public function index()
	{
		$this->load->helper("bbcode_helper");
		$this->load->model("phpbb_model");
		$data = null;
		$data["posts"]= $this->phpbb_model->get_latest_news();

		$this->load->view('blog',$data);
	}

		public function launchernews()
		{
			$this->load->helper("bbcode_helper");
			$this->load->model("phpbb_model");
			$data = null;
			$data["posts"]= $this->phpbb_model->get_latest_news();
			$this->load->view('launchernews',$data);
		}

		public function letoltes()
		{
			$this->load->view('download');
		}
}
