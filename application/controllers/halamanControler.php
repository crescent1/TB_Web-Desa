<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HalamanControler extends CI_Controller {

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
	function __construct(){
     parent:: __construct();
     $this->load->model("data");
     $this->load->helper('text');
    }
    
	
	public function desa($id)
    {
        $this->load->view('web/headerweb');
        $data['halaman'] = $this->data->getDesa($id);
        $this->load->view('web/tentangdesa',$data);
        $this->load->view('web/footerweb');
    }
    
    
    public function berita($id)
    {
        		
        $this->load->view('web/headerweb');
        $data['berita1'] = $this->data->getPost($id);
        $this->load->view('web/postview',$data);
        $this->load->view('web/footerweb');
    }
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */