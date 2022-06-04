<?php
class Matakuliah extends CI_Controller{
    // methood matakuliah
    // tulis mwthood dan objek
    public function index(){
        $this->load->model('matakuliah_model');
        $mk = $this->matakuliah_model->getA();
        $data['mk'] = $mk;
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('layouts/footer'); 
    }
    public function form(){
        // render view
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/form');
        $this->load->view('layouts/footer');
    }
    public function save(){
        // akses model matakuliah
        // langkah 1
        $this->load->model('matakuliah_model','matakuliah'); 
        $_nama= $this->input->post('nama');
        $_sks= $this->input->post('sks');
        $_kode = $this->input->post('kode');
       
        // langkah 2
        $data_matakuliah['nama'] = $_nama; 
        $data_matakuliah['sks'] = $_sks;
        $data_matakuliah['kode'] = $_kode;

        if((!empty($_idedit))){
            $data_matakuliah['id'] = $_idedit;
            $this->matakuliah->update($data_matakuliah);
        }else{
            // data baru
            $this->matakuliah->simpan($data_matakuliah); 
        }
        redirect('matakuliah','refresh');
    }
    public function edit($id){
        // akses model matakuliah
        $this->load->model('matakuliah_model','matakuliah');
        $obj_matakuliah = $this->matakuliah->getById($id);
        $data['obj_matakuliah'] = $obj_matakuliah;
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/edit', $data);
        $this->load->view('layouts/footer'); 
    }
    public function delete($id){
        $this->load->model('matakuliah_model','matakuliah');
        // ngcek data mahasiswa berdasarkan id
        $data_matakuliah['id'] = $id;
        $this->matakuliah->delete($data_matakuliah);
        redirect('matakuliah','refresh');
    }
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('username')){
            redirect('/login');
        }
    }
}

?>