<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

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
	 
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('Ion_auth');
	} 
	 
	public function view($page='home')
	{
		if(!file_exists('application/views/pages/'.$page.'.php'))
		show_404();
		$data['title'] =$this->config->item('sitename')." : ".ucfirst($page);
		$data['loggedin']=false;
		if ($this->ion_auth->logged_in())
		$data['loggedin']=true;
		$this->load->view('templates/header.php',$data);
		$this->load->view('templates/nav.php');
		$this->load->view('pages/'.$page);
		$this->load->view('templates/footer.php');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */