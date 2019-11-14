<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class File_galery extends CI_Controller {

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
	
	public function insert_galery() 
	{
	    $this->load->library('upload');
		$config['upload_path'] = "./asset/images/galery/";
		$config['allowed_types'] = "gif|jpg|png|jpeg";
        $config['max_size'] = "1000";
        $config['max_width'] = '1000';
        $config['max_height'] = "1200";
        
        $this->upload->initialize($config);
        $this->upload->do_upload('gambar1');  
        
        $gambargalery = $this->upload->data();
        $gmb= $gambargalery["file_name"];
        
        
        $gambar = $gmb;
        $pesan = $this->input->post('pesan1');
        
        //echo ''.$judul.'<br>'.$gambar1.'<br>'.$pesan.'';
          
        $data = array(
              //"judul_halaman" => $judulhal,
              "gambar_galery" => $gambar,
              "keterangan_galery" => $pesan,
              //"tanggal_post" => date('Y-m-d')
          );
          
          
          $this->data->galery_insert($data);
          redirect(base_url().'index.php/weladmin/allgalery');
	}
	
	function galery_delete() 
    {
        $id = $this->uri->segment(3);
        $this->data->delete_galery($id);
        redirect(base_url().'index.php/weladmin/allgalery');
    }
    
    
    
    public function editagalery($id)
    {
        
        $data['idg'] = $id;
        $data['galery'] = $this->data->getGalery($id);
        $this->load->view('admin/editagalery',$data);
       
        
    }
	
	
	public function editgaleryproses($id){
            /*if($this->input->post('judulhalaman')){
                $data['judul_halaman'] = $this->input->post('judulhalaman');
                $this->data->updatehalaman($id, $data);
            }*/
            if($this->input->post('pesan1')){
                $data['keterangan_galery'] = $this->input->post('pesan1');
                $this->data->updategalery($id, $data);
            }
            if($_FILES['gambar1']['name']){
                $imgInfo = getimagesize($_FILES['gambar1']['tmp_name']);
                $w = $imgInfo[0];
                $h = $imgInfo[1];
                if($w == 460 && $h == 200){
                    $this->load->library('upload');
                    $config['upload_path'] = "./asset/images/galery/";
                    $config['allowed_types'] = "gif|jpg|png|jpeg";
                    $config['max_size'] = "1000";
                    $config['max_width'] = '1000';
                    $config['max_height'] = "1200";

                    $this->upload->initialize($config);
                    $this->upload->do_upload('gambar1');  

                    $gambar1 = $this->upload->data();
                    $gmb = $gambar1["file_name"];
                    $data['gambar_galery'] = $gmb;
                    $this->data->updategalery($id, $data);
                }
            }
            redirect(base_url().'index.php/weladmin/allgalery');
        }
        
        
	
	
	
	
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */