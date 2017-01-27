<?php 
class Utama extends CI_Controller {

    function __construct(){
		parent::__construct();
        session_start();
        $this->load->model('model_user');
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
	}
    
	function index()
	{
		$this->load->view('utama/home');
	}
    function user()
	{
		$this->load->view('user/addbarang');
	}
	 function home()
	{
		$this->load->view('utama/home1');
	}
    function viewuser()
    {
        $id_petugas=$this->session->userdata('id_petugas');
        $data['result']=$this->model_user->display_dtUser();
        $data['menu_user']=' active';
    	$this->load->view('utama/petugas/listpetugas',$data);

    }
    function adduser()
    { 
        $this->load->view('utama/petugas/addpetugas');
       
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */