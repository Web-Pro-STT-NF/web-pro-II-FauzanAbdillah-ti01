<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

    public function index(){
        $this->load->model('Dosen_model','dsn1');
        $this->dsn1->id=1;
        $this->dsn1->nama='Heri Sanjaya.M.Ag,';
        $this->dsn1->nidn='0321987';
        $this->dsn1->gender="L";
        $this->dsn1->tmp_lahir='Palangkaraya';
        $this->dsn1->tgl_lahir='1973-03-17';
        $this->dsn1->pendidikan='Magister Agama';

        $this->load->model('Dosen_model','dsn2');
        $this->dsn2->id=2;
        $this->dsn2->nama='Moh.Yamin.M.T,';
        $this->dsn2->nidn='0587690';
        $this->dsn2->gender="L";
        $this->dsn2->tmp_lahir='Banyuwangi';
        $this->dsn2->tgl_lahir='1978-11-24';
        $this->dsn2->pendidikan='MAgister Teknik Informatika';

        $this->load->model('Dosen_model','dsn3');
        $this->dsn3->id=3;
        $this->dsn3->nama='Aminah Sholiha.M.T,';
        $this->dsn3->nidn='0321987';
        $this->dsn3->gender="L";
        $this->dsn3->tmp_lahir='Palangkaraya';
        $this->dsn3->tgl_lahir='1973-03-17';
        $this->dsn3->pendidikan='Magister Teknik Sipil';

        $this->load->model('Dosen_model','dsn4');
        $this->dsn4->id=4;
        $this->dsn4->nama='Heri Sanjaya.M.Pd,';
        $this->dsn4->nidn='0321987';
        $this->dsn4->gender="L";
        $this->dsn4->tmp_lahir='Palangkaraya';
        $this->dsn4->tgl_lahir='1973-03-17';
        $this->dsn4->pendidikan='Magister Sastra Arab';

        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3, $this->dsn4];
        $data['list_dsn']=$list_dsn;

        $this->load->view('header');
        $this->load->view('dosen/index',$data);
        $this->load->view('footer');
    }

    public function create(){
        $data['judul']='Form data dosen';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/create',$data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model('Dosen_model','dsn1');

        $this->dsn1->nama = $this->input->post('nama');
        $this->dsn1->nidn = $this->input->post('nidn');
        $this->dsn1->gender = $this->input->post('jk');
        $this->dsn1->tmp_lahir = $this->input->post('tmp_lahir');
        $this->dsn1->tgl_lahir = $this->input->post('tgl_lahir');
        $this->dsn1->pendidikan= $this->input->post('pendidikan');

        // die(print_r($this->mhs1));
        $data['dsn1']=$this->dsn1;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/view',$data);
        $this->load->view('layout/footer');
    }


}
?>