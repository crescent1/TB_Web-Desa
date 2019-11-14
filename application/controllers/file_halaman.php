<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class File_halaman extends CI_Controller {

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
	 
	public function index()
	{
		$this->load->view('web/template');
	}
	
	public function insert_halaman() 
	{
	    $this->load->library('upload');
		$config['upload_path'] = "./asset/images/halaman/";
		$config['allowed_types'] = "gif|jpg|png|jpeg";
        $config['max_size'] = "1000";
        $config['max_width'] = '1000';
        $config['max_height'] = "1200";
        
        $this->upload->initialize($config);
        $this->upload->do_upload('gambarhalaman');  
        
        $gambarhalaman = $this->upload->data();
        $gmb= $gambarhalaman["file_name"];
        
        $judulhal = $this->input->post('judulhalaman');
        $gambarhal = $gmb;
        $pesanhal = $this->input->post('inhalaman');
        
        //echo ''.$judul.'<br>'.$gambar1.'<br>'.$pesan.'';
          
        $data = array(
              "judul_halaman" => $judulhal,
              "gambar_halaman" => $gambarhal,
              "isi" => $pesanhal,
              //"tanggal_post" => date('Y-m-d')
          );
          
          
          $this->data->halaman_insert($data);
          redirect(base_url().'index.php/weladmin/allpage');
	}
	
	function halaman_delete() 
    {
        $id = $this->uri->segment(3);
        $this->data->delete_halaman($id);
        redirect(base_url().'index.php/weladmin/allpage');
    }
    
    
    
    public function edithalaman($id)
    {
        
        $data['idh'] = $id;
        $data['halaman'] = $this->data->getHalaman($id);
        $this->load->view('admin/edithalaman',$data);
    }
	
	
	public function edithalamanproses($id){
            if($this->input->post('judulhalaman')){
                $data['judul_halaman'] = $this->input->post('judulhalaman');
                $this->data->updatehalaman($id, $data);
            }
            if($this->input->post('inhalaman')){
                $data['isi'] = $this->input->post('inhalaman');
                $this->data->updatehalaman($id, $data);
            }
            if($_FILES['gambarhalaman']['name']){
                $imgInfo = getimagesize($_FILES['gambarhalaman']['tmp_name']);
                //$w = $imgInfo[0];
                //$h = $imgInfo[1];
                //if($w == 460 && $h == 200)
                    $this->load->library('upload');
                    $config['upload_path'] = "./asset/images/halaman/";
                    $config['allowed_types'] = "gif|jpg|png|jpeg";
                    $config['max_size'] = "1000";
                    $config['max_width'] = '1000';
                    $config['max_height'] = "1200";

                    $this->upload->initialize($config);
                    $this->upload->do_upload('gambarhalaman');  

                    $gambarhalaman = $this->upload->data();
                    $gmb = $gambarhalaman["file_name"];
                    $data['gambar_halaman'] = $gmb;
                    $this->data->updatehalaman($id, $data);
                
            }
            redirect(base_url().'index.php/weladmin/allpage');
        }
        
        
	
	
	
	
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */