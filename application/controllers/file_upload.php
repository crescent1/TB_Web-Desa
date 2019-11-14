<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class File_upload extends CI_Controller {

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
	 
	   
    public function insert_gambar(){
        
        $this->load->library('upload');
		$config['upload_path'] = "./asset/images/slider/";
		$config['allowed_types'] = "gif|jpg|png|jpeg";
        $config['max_size'] = "1000";
        $config['max_width'] = '1000';
        $config['max_height'] = "1200";
        
        $this->upload->initialize($config);
        $this->upload->do_upload('gambar');  
        
        $gambar = $this->upload->data();
        $nama_gambar= $gambar["file_name"];
        
        $judul = $this->input->post('header');
        $gambar1 = $nama_gambar;
        $pesan = $this->input->post('pesan');
        
        //echo ''.$judul.'<br>'.$gambar1.'<br>'.$pesan.'';
          
        $data = array(
              "judul_slide" => $judul,
              "gambar_slide" => $gambar1,
              "pesan_slide" => $pesan,
          );
          
          $this->load->model('data');
          $this->data->insert_slider($data);
          redirect(base_url().'index.php/weladmin/allslider');
        }
        
        
        function slide_delete() 
        {
            $id = $this->uri->segment(3);
            $this->data->delete_slide($id);
            redirect(base_url().'index.php/weladmin/allslider');
        }
        
        public function editslider($id)
        {
            
            $data['idS'] = $id;
            $data['slider'] = $this->data->getSlider($id);
            $this->load->view('admin/editslider', $data);
            
        }
        
        public function editsliderproses($id){
            if($this->input->post('header')){
                $data['judul_slide'] = $this->input->post('header');
                $this->data->updateSlide($id, $data);
            }
            if($this->input->post('pesan')){
                $data['pesan_slide'] = $this->input->post('pesan');
                $this->data->updateSlide($id, $data);
            }
            if($_FILES['gambar']['name']){
                $imgInfo = getimagesize($_FILES['gambar']['tmp_name']);
                //$w = $imgInfo[0];
                //$h = $imgInfo[1];
                //if($w == 960 && $h == 350)
                    $this->load->library('upload');
                    $config['upload_path'] = "./asset/images/slider/";
                    $config['allowed_types'] = "gif|jpg|png|jpeg";
                    $config['max_size'] = "1000";
                    $config['max_width'] = '1000';
                    $config['max_height'] = "1200";

                    $this->upload->initialize($config);
                    $this->upload->do_upload('gambar');  

                    $gambar = $this->upload->data();
                    $nama_gambar = $gambar["file_name"];
                    $data['gambar_slide'] = $nama_gambar;
                    $this->data->updateSlide($id, $data);
                
            }
            redirect(base_url().'index.php/weladmin/allslider');
        }
        
        /*
        public function up_slider()
        {
            $this->data->slide_edit($id);
            redirect(base_url().'index.php/weladmin/allslider');
            
        }*/
        
    

        
        
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */