<?php 
class Tampil extends CI_Controller{
    public function index(){
        // akses model mahasiswa
        $this->load->model('mahasiswa_model');
        $mahasiswa = $this->mahasiswa_model->getAll();
        $data['mahasiswa'] = $mahasiswa;

        // render view
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/tampil', $data);
        $this->load->view('layouts/footer');
    }
    public function dosen(){
        // akses model dosen
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getAl();
        $data['dosen'] = $dosen;

        // render view
        $this->load->view('layouts/header');
        $this->load->view('dosen/tampil', $data);
        $this->load->view('layouts/footer');
    }
    public function matakuliah(){
        // akses moel
        $this->load->model('matakuliah_model');
        $matakuliah = $this->matakuliah_model->getA();
        $data['matakuliah'] = $matakuliah;

        // Render view
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/tampil', $data);
        $this->load->view('layouts/footer');
    }
}
?>