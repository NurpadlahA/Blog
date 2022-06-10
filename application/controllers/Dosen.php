<?php
class Dosen extends CI_Controller{
    public function index(){
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getAl();
        $data['dosen'] = $dosen;
        $this->load->view('layouts/header');
        $this->load->view('dosen/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id){
        // akses model dosen
        $this->load->model('dosen_model');
        $dnn = $this->dosen_model->getById($id);
        $data['dnn'] = $dnn;
        $this->load->view('layouts/header');
        $this->load->view('dosen/detail', $data);
        $this->load->view('layouts/footer');
    }
    public function form(){
        // render view
        $this->load->view('layouts/header');
        $this->load->view('dosen/form');
        $this->load->view('layouts/footer');
    }
    public function save(){
        // akses model dosen
        $this->load->model('dosen_model','dosen'); // langkah 1
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_nidn = $this->input->post('nidn');
        $_pendidikan = $this->input->post('pendidikan');

       // langkah 2
        $data_dosen['nama'] = $_nama;
        $data_dosen['gender'] = $_gender;
        $data_dosen['tmp_lahir'] = $_tmp_lahir;
        $data_dosen['tgl_lahir'] = $_tgl_lahir;
        $data_dosen['nidn'] = $_nidn;
        $data_dosen['pendidikan'] = $_pendidikan; 

        if((!empty($_idedit))){
            $data_dosen['id'] = $_idedit;
            $this->dosen->update($data_dosen);
        }else{
            // data baru
            $this->dosen->simpan($data_dosen);
        }
        redirect('dosen','refresh');
    }
    public function edit($id){
        // akses modeldosen
        $this->load->model('dosen_model','dosen');
        $obj_dosen = $this->dosen->getById($id);
        $data['obj_dosen'] = $obj_dosen;
        $this->load->view('layouts/header');
        $this->load->view('dosen/edit', $data);
        $this->load->view('layouts/footer'); 
    }
    public function delete($id){
        $this->load->model('dosen_model','dosen');
        // ngcek data dosen berdasarkan id
        $data_dosen['id'] = $id;
        $this->dosen->delete($data_dosen);
        redirect('dosen','refresh');
    }
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            redirect('/login');
        }
    }
    public function upload(){
        $_iddosen = $this->input->post('iddosen');
        // akes model dosen
        $this->load->model('dosen_model','dosen');
        $dnn = $this->dosen->getById($_iddosen);
        $data['dnn'] = $dnn;

        $config ['upload_path']='./uploads/photos';
        $config ['allowed_types']='jpg|png';
        $config ['max_size']=2894;
        $config ['max_width']=2894;
        $config ['max_height']=2894;
        $config ['file_name']=$dnn->id;

        // aktifkan library upload
        $this->load->library('upload',$config);
        // jika tidak ada file yang di upload 
        if (!$this->upload->do_upload('foto')) {
            // maka tampilan pesan eror
            $data['error'] = $this->upload->display_errors();
        } else {
            // jika ada file yang di upload
            // maka tampilkan pesan data berhasil di upload
            $data['upload_data'] = $this->upload->data();
            $data['error'] = 'data sukses';
        }
        // kirim ke view
        $this->load->view('layouts/header');
        $this->load->view('dosen/detail', $data);
        $this->load->view('layouts/footer');
        
    }
}

?>