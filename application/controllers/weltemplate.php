<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Weltemplate extends CI_Controller {

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
    //memanggil template
    function __construct(){
    parent:: __construct();
    $this->load->model("data");
    $this->load->helper('text');
    }
    
	public function remap($id=NULL)
	{
		$this->load->view('web/headerweb');
		$postp = $this->db->get('post');
		
		$config['base_url'] = base_url().'index.php/weltemplate/remap';
		$config['total_rows'] = $postp->num_rows();
		$config['per_page'] = '3';
		$config['first_page'] = 'awal';
		$config['last_page '] = 'akhir';
		$config['next_page '] = '&laquo;';
	    $config['prev_page '] = '&raquo;';
	    
	    $this->pagination->initialize($config);		
        $data['halaman_pesan'] = $this->pagination->create_links();
	    		
		$data['gambarHeader'] = $this->data->getGambar_data();
        $data['post2'] = $this->data->get_post($config['per_page'], $id);
        $this->load->view('web/template', $data);
        
        
        $this->load->view('web/footerweb');
	}
	
	public function index(){
	$this->remap();
	}
	
	

	
	
	/*dalam menu tentang desa*/
	    /*public function tentangdesa()
        {
            $this->load->view('web/headerweb');
            $this->load->view('web/tentangdesa');
            $this->load->view('web/footerweb');
        }*/
        
	
	//view agenda
	public function agenda($id=NULL)
    {
        $this->load->view('web/headerweb');
        
        $postp = $this->db->get('post');
		
		$config['base_url'] = base_url().'index.php/weltemplate/agenda';
		$config['total_rows'] = $postp->num_rows();
		$config['per_page'] = '5';
		$config['first_page'] = 'awal';
		$config['last_page '] = 'akhir';
		$config['next_page '] = '&laquo;';
	    $config['prev_page '] = '&raquo;';
	    
	    $this->pagination->initialize($config);		
        $data['halaman_pesan'] = $this->pagination->create_links();
        $data['post2'] = $this->data->get_postAgenda($config['per_page'], $id);
        $this->load->view('web/agenda',$data);
        $this->load->view('web/footerweb');
    }
	
    public function galery($id=NULL)
    {
        $postp = $this->db->get('galery');
		
		$config['base_url'] = base_url().'index.php/weltemplate/galery';
		$config['total_rows'] = $postp->num_rows();
		$config['per_page'] = '6';
		$config['first_page'] = 'awal';
		$config['last_page '] = 'akhir';
		$config['next_page '] = '&laquo;';
	    $config['prev_page '] = '&raquo;';
	    
	    $this->pagination->initialize($config);		
        $data['halaman_pesan'] = $this->pagination->create_links();
        $data['post2'] = $this->data->getGalerygambar($config['per_page'], $id);
        
        $this->load->view('web/headerweb');
        $this->load->view('web/galery',$data);
        $this->load->view('web/footerweb');
    }
    
    
    public function tabelview($id=NULL)
    {
        $postp = $this->db->get('buku_induk');
		
		$config['base_url'] = base_url().'index.php/weltemplate/tabelview';
		$config['total_rows'] = $postp->num_rows();
		$config['per_page'] = '15';
		$config['first_page'] = 'awal';
		$config['last_page '] = 'akhir';
		$config['next_page '] = '&laquo;';
	    $config['prev_page '] = '&raquo;';
	    
	    $this->pagination->initialize($config);		
        $data['halaman_pesan'] = $this->pagination->create_links();
        $data['post2'] = $this->data->getTabelview($config['per_page'], $id);
        $this->load->view('web/headerweb');
        $this->load->view('web/tabelview',$data);
        $this->load->view('web/footerweb');
    }
    
    
    
    public function downloadview($id=NULL)
    {
        $postp = $this->db->get('download');
		
		$config['base_url'] = base_url().'weltemplate/downloadview';
		$config['total_rows'] = $postp->num_rows();
		$config['per_page'] = '15';
		$config['first_page'] = 'awal';
		$config['last_page '] = 'akhir';
		$config['next_page '] = '&laquo;';
	    $config['prev_page '] = '&raquo;';
	    
	    $this->pagination->initialize($config);		
        $data['halaman_pesan'] = $this->pagination->create_links();
        $data['post2'] = $this->data->getDownloadview($config['per_page'], $id);
        $this->load->view('web/headerweb');
        $this->load->view('web/downloadview',$data);
        $this->load->view('web/footerweb');
    }
    
    
    

	
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */