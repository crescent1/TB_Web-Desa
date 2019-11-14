<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Weladmin extends CI_Controller {

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
    }
    
    
	public function index()
	{
		
		$this->load->view('web/template');
	}
	
    public function dashboard ()
    {
        
        $this->load->view('admin/dashboard');
        
    }
    //admin login
    public function login()
    {
        $this->load->view('login');
    }
    
        
    
        public function get_login()
        {
		    $username = $this->input->post('username');
		    $pass = $this->input->post('password');
		    $this->load->model('data');
		    $login = $this->data->LoginNow($username, $pass);
		    if($login != null)
		    {
			    foreach($login as $row)
			    {
				    $this->load->library('session');
				    $this->session->set_userdata('id_admin',$row->id_admin);
				    $this->session->set_userdata('usernama',$row->username);
				    $this->load->view('sukses_login');
			    }
		    }
		    else
		    {
		    $this->load->view('login');
		    
		    }
		  
	    }
	    
	    public function sukses_login()
        {

            $this->load->view('sukses_login');

        }
	    
	    public function daftar()
        {
            $data = array(
                        'nama_depan' => $this->input->post('nama_depan') ,
                        'nama_belakang' => $this->input->post('nama_belakang') ,
                        'username' => $this->input->post('username') ,
                        'email' => $this->input->post('email') ,
                        'password' => $this->input->post('password')
                            
                    );

            $this->db->insert('admin', $data);
            redirect(base_url().'index.php/weladmin/dashboard');
        }
	
	    public function logout(){
            $this->load->library('session');
            $this->session->sess_destroy();
		    redirect(base_url().'index.php/weladmin/login');
	    }
    
    //admin dashbord
        
        public function post()
        {
            
            $this->load->view('admin/post');  
            
		              
        }
        
        public function allpost()
        {
            //$this->load->view('admin/headeradmin');
            $data["gambarpost"] = $this->data->getGambar_post();
            $this->load->view('admin/allpost',$data);
            
        }
        
        public function uploadfile()
        {
            $this->load->view('uploadfile');
        }
        
        public function page()
        {
            $this->load->view('admin/page');
        }
        
        public function allpage()
        {
            
            $data["gambarhalaman"] = $this->data->getGambar_halaman();
            $this->load->view('admin/allpage',$data);
            
        }
        
        public function agalery()
        {
            
            $this->load->view('admin/agalery');
            
        }
        
        public function allgalery()
        {
            
            $data["gambargalery"] = $this->data->getGambar_galery();
            $this->load->view('admin/allgalery',$data);
            
        }
        
        public function buku()
        {
            
            $this->load->view('admin/buku');
            
        } 
    
        public function allbuku()
        {
            
            $data["gambarbuku"] = $this->data->getGambar_buku();
            $this->load->view('admin/allbuku',$data);
            
        } 
        
        /*---------------------------------------------------------slider-------------------------------------------------------------------*/
        public function slider()
        {
            
            $this->load->view('admin/slider');
            
        }
        
        public function allslider()
        {
             
             $data["gambarHeader"] = $this->data->getGambar_data();
             $this->load->view('admin/allslider',$data);
             
        }
        
        
        public function linkView()
        {
            $this->load->view('admin/linkView');
        }
         
        public function alllink()
        {
            $data["linkpost"] = $this->data->getLink();
            $this->load->view('admin/alllink',$data); 
        }
         
        
        /*-----------------------------------------------------end slider-------------------------------------------------------------------*/
        
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */