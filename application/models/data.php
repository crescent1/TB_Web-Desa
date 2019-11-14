<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class data extends CI_Model {

	// ========================== view ========================
	
	public function cek_login($username, $pass){
		$this->db->select('*');
		$this->db->where('username', $username);
		$this->db->where('password', $pass);
		$query = $this->db->get('admin');
		return $query->num_rows();
	}
	
	public function loginNow($username, $pass){
		$this->db->where('username', $username);
		$this->db->where('password', $pass);
		$query = $this->db->get('admin');
		return $query->result();
	}
	
	
	
	
	public function insert_slider($data)
    {
        $this->db->insert('slider', $data);
    }
    
    function getGambar_data()
    {
        $this->db->select("*");
        $query = $this->db->get('slider');
        return $query->result();
    }
    
    function delete_slide($id)
    {
        $this->db->where('id_slide', $id);
        $this->db->delete('slider');
    }
    
    function updateSlide($id, $data)
    {    
        $this->db->where('id_slide', $id);
        $this->db->update('slider', $data);
    }
    
    public function getSlider($id){
    
        $this->db->where('id_slide',$id);
        $query = $this->db->get('slider');
        return $query->result();
    }
    /*----------------------------------------------------------------------------------*/
    public function post_insert($data)
    {
        $this->db->insert('post', $data);
    }
    
    function getGambar_post()
    {
       $this->db->select("*");
        $query = $this->db->get('post');
        return $query->result();
    }
    
    function get_post($num, $offset){
        $this->db->from('post');
        $this->db->order_by('id_post', 'desc');
        $this->db->limit($num, $offset);
        $query = $this->db->get();
        return $query->result();
    }
    
    function get_postAgenda($num, $offset){
        $this->db->from('post');
        $this->db->order_by('id_post', 'desc');
        $this->db->limit($num, $offset);
        $query = $this->db->get();
        return $query->result();
    }
    
    
    function delete_post($id)
    {
        $this->db->where('id_post', $id);
        $this->db->delete('post');
    }
    
    function updatepost($id, $data)
    {    
        $this->db->where('id_post', $id);
        $this->db->update('post', $data);
    }
    
    public function getPost($id){
    
        $this->db->where('id_post',$id);
        $query = $this->db->get('post');
        return $query->result();
    }
    /*----------------------------------------------------------------------------------*/

    public function halaman_insert($data)
    {
        $this->db->insert('halaman', $data);
    }
    
    function getGambar_halaman()
    {
        $this->db->select("*");
        $query = $this->db->get('halaman');
        return $query->result();
    }
    
    function delete_halaman($id)
    {
        $this->db->where('id_halaman', $id);
        $this->db->delete('halaman');
    }
    
    function updatehalaman($id, $data)
    {    
        $this->db->where('id_halaman', $id);
        $this->db->update('halaman', $data);
    }
    
    public function getHalaman($id){
    
        $this->db->where('id_halaman',$id);
        $query = $this->db->get('halaman');
        return $query->result();
    }
    /*----------------------------------------------------------------------------------*/

    
    public function galery_insert($data)
    {
        $this->db->insert('galery', $data);
    }
    
    function getGambar_galery()
    {
        $this->db->select("*");
        $query = $this->db->get('galery');
        return $query->result();
    }
    
    function delete_galery($id)
    {
        $this->db->where('id_galery', $id);
        $this->db->delete('galery');
    }
    
    function updategalery ($id,$data)
    {    
        $this->db->where('id_galery', $id);
        $this->db->update('galery', $data);
    }
    public function getGalery($id){
    
        $this->db->where('id_galery',$id);
        $query = $this->db->get('galery');
        return $query->result();
    }
    /*----------------------------------------------------------------------------------*/
    
    public function buku_insert($data)
    {
        $this->db->insert('buku_induk', $data);
    }
    
    function getGambar_buku()
    {
        $this->db->select("*");
        $query = $this->db->get('buku_induk');
        return $query->result();
    }
    
    function delete_buku($id)
    {
        $this->db->where('id_buku', $id);
        $this->db->delete('buku_induk');
    }
    
    function updatebuku ($id,$data)
    {    
        $this->db->where('id_buku', $id);
        $this->db->update('buku_induk', $data);
    }
    
    public function getBuku($id){
    
        $this->db->where('id_buku',$id);
        $query = $this->db->get('buku_induk');
        return $query->result();
    }
    
    /*----------------------------------------------------------------------------------*/
    public function getDesa($id){
    
        $this->db->where('id_halaman',$id);
        $query = $this->db->get('halaman');
        return $query->result();
    }
    
    function getGalerygambar($num, $offset)
    {
        $this->db->from('galery');
        $this->db->order_by('id_galery', 'desc');
        $this->db->limit($num, $offset);
        $query = $this->db->get();
        return $query->result();
    }
    
    function getTabelview($num, $offset)
    {
        $this->db->from('buku_induk');
        $this->db->order_by('id_buku', 'desc');
        $this->db->limit($num, $offset);
        $query = $this->db->get();
        return $query->result();
    }
    
    function getDownloadview($num, $offset)
    {
        $this->db->from('download');
        $this->db->order_by('id_download', 'desc');
        $this->db->limit($num, $offset);
        $query = $this->db->get();
        return $query->result();
    }
    
    
    /*---------------------------------------------------------------------*/
    
    public function link_insert($data)
    {
        $this->db->insert('download', $data);
    }
    
    public function getLink(){
    
        $this->db->select("*");
        $query = $this->db->get('download');
        return $query->result();
    }
    
    function delete_link($id)
    {
        $this->db->where('id_download', $id);
        $this->db->delete('download');
    }
    
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */