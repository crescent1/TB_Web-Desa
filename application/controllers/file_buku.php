<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class File_buku extends CI_Controller {

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
	
	public function insert_buku() 
	{
	    
        $nama1 = $this->input->post('nama');
        $nik1 = $this->input->post('nik');
        $tempat_lahir1 = $this->input->post('tempat_lahir');
        $tanggal_lahir1 = $this->input->post('tanggal_lahir');
        $jenis_kelamin1 = $this->input->post('jenis_kelamin');
        $shdk1 = $this->input->post('shdk');
        $agama1 = $this->input->post('agama');
        $pendidikan1 = $this->input->post('pendidikan');
        $pekerjaan1 = $this->input->post('pekerjaan');
        $nama_ibu1 = $this->input->post('nama_ibu');
        $nama_ayah1 = $this->input->post('nama_ayah');
        
        
        //echo ''.$judul.'<br>'.$gambar1.'<br>'.$pesan.'';  
        $data = array(
              "nama" => $nama1,
              "nik" => $nik1,
              "tempat_lahir" => $tempat_lahir1,
              "tanggal_lahir" => $tanggal_lahir1,
              "jenis_kelamin" => $jenis_kelamin1,
              "shdk" => $shdk1,
              "agama" => $agama1,
              "pendidikan_terakhir" => $pendidikan1,
              "pekerjaan" => $pekerjaan1,
              "nama_ibu" => $nama_ibu1,
              "nama_ayah" => $nama_ayah1,
              
          );
          
          
          $this->data->buku_insert($data);
          redirect(base_url().'index.php/weladmin/allbuku');
	}
	
	function buku_delete() 
    {
        $id = $this->uri->segment(3);
        $this->data->delete_buku($id);
        redirect(base_url().'index.php/weladmin/allbuku');
    }
    
    
    
    public function editbuku($id)
    {
        
        $data['idb'] = $id;
        $data['buku'] = $this->data->getBuku($id);
        $this->load->view('admin/editbuku',$data);
        
    }
	
	
	public function editbukuproses($id){
            if($this->input->post('nama')){
                $data['nama'] = $this->input->post('nama');
                $this->data->updatebuku($id, $data);
            }
            if($this->input->post('nik')){
                $data['nik'] = $this->input->post('nik');
                $this->data->updatebuku($id, $data);
            }
            if($this->input->post('tempatlahir')){
                $data['tempat_lahir'] = $this->input->post('tempatlahir');
                $this->data->updatebuku($id, $data);
            }
            if($this->input->post('tanggal_lahir')){
                $data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
                $this->data->updatebuku($id, $data);
            }
            if($this->input->post('jenis_kelamin')){
                $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
                $this->data->updatebuku($id, $data);
            }
            if($this->input->post('shdk')){
                $data['shdk'] = $this->input->post('shdk');
                $this->data->updatebuku($id, $data);
            }
            if($this->input->post('agama')){
                $data['agama'] = $this->input->post('agama');
                $this->data->updatebuku($id, $data);
            }
            if($this->input->post('pendidikan')){
                $data['pendidikan_terakhir'] = $this->input->post('pendidikan');
                $this->data->updatebuku($id, $data);
            }
            if($this->input->post('nama_ibu')){
                $data['nama_ibu'] = $this->input->post('nama_ibu');
                $this->data->updatebuku($id, $data);
            }
            if($this->input->post('nama_ayah')){
                $data['nama_ayah'] = $this->input->post('nama_ayah');
                $this->data->updatebuku($id, $data);
            }
            redirect(base_url().'index.php/weladmin/allbuku');
        }
        
        
        
	
	
	
	
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */