<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class File_post extends CI_Controller {

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
	 
	public function insert_post() 
	{
	    $this->load->library('upload');
		$config['upload_path'] = "./asset/images/post/";
		$config['allowed_types'] = "gif|jpg|png|jpeg";
        $config['max_size'] = "1000";
        $config['max_width'] = '1000';
        $config['max_height'] = "1200";
        
        $this->upload->initialize($config);
        $this->upload->do_upload('gambarpost');  
        
        $gambarpost = $this->upload->data();
        $gmb= $gambarpost["file_name"];
        
        $judul = $this->input->post('judulpost');
        $gambar1 = $gmb;
        $pesan = $this->input->post('inpost');
        
        //echo ''.$judul.'<br>'.$gambar1.'<br>'.$pesan.'';
          
        $data = array(
              "judul_post" => $judul,
              "gambar_post" => $gambar1,
              "post" => $pesan,
              "tanggal_post" => date('Y-m-d')
          );
          
          $this->load->model('data');
          $this->data->post_insert($data);
          redirect(base_url().'index.php/weladmin/allpost');
	}
	
	function post_delete() 
    {
        $id = $this->uri->segment(3);
        $this->data->delete_post($id);
        redirect(base_url().'index.php/weladmin/allpost');
    }
    
    
    
    public function editpost($id)
    {
         
         $data['idp'] = $id;
         $data['post'] = $this->data->getPost($id);
         $this->load->view('admin/editpost',$data);
         
    }
	
	
	public function editpostproses($id){
            if($this->input->post('judulpost')){
                $data['judul_post'] = $this->input->post('judulpost');
                $this->data->updatepost($id, $data);
            }
            if($this->input->post('inpost')){
                $data['post'] = $this->input->post('inpost');
                $this->data->updatepost($id, $data);
            }
            if($_FILES['gambarpost']['name']){
                $imgInfo = getimagesize($_FILES['gambarpost']['tmp_name']);
                //$w = $imgInfo[0];
                //$h = $imgInfo[1];
                //if($w == 460 && $h == 200)
                    $this->load->library('upload');
                    $config['upload_path'] = "./asset/images/post/";
                    $config['allowed_types'] = "gif|jpg|png|jpeg";
                    $config['max_size'] = "1000";
                    $config['max_width'] = '1000';
                    $config['max_height'] = "1200";

                    $this->upload->initialize($config);
                    $this->upload->do_upload('gambarpost');  

                    $gambarpost = $this->upload->data();
                    $gmb = $gambarpost["file_name"];
                    $data['gambar_post'] = $gmb;
                    $this->data->updatepost($id, $data);
                
            }
            redirect(base_url().'index.php/weladmin/allpost');
        }
        
        
	
	
	
	
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */