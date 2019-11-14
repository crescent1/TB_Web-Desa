<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class File_link extends CI_Controller {

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
    }
	 
	public function index()
	{
		$this->load->view('web/template');
	}
	
	public function insert_link()
        {
            $ket1 = $this->input->post('ketlink');
            $down1 = $this->input->post('enter');
            
        //echo ''.$judul.'<br>'.$gambar1.'<br>'.$pesan.'';  
            $data = array(
              "keterangan" => $ket1,
              "download" => $down1,   
            );
          
          
          $this->data->link_insert($data);
          redirect(base_url().'weladmin/alllink');
        }
	
	function link_delete() 
        {
            $id = $this->uri->segment(3);
            $this->data->delete_link($id);
            redirect(base_url().'weladmin/alllink');
        }
        
    
    
	
	
	
        
        
	
	
	
	
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */