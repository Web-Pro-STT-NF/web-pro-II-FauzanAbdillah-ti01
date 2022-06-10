<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Matakuliah extends CI_Controller {
    
    public function index(){
        $this->load->model('Matakuliah_model','mtkl1');
        $this->mtkl1->id=1;
        $this->mtkl1->nama='Pemrogramman Web';
        $this->mtkl1->sks='3';
        $this->mtkl1->kode='PW03';

        $this->load->model('Matakuliah_model','mtkl2');
        $this->mtkl2->id=2;
        $this->mtkl2->nama='Jaringan Komputer';
        $this->mtkl2->sks='2';
        $this->mtkl2->kode='JK02';

        $this->load->model('Matakuliah_model','mtkl3');
        $this->mtkl3->id=3;
        $this->mtkl3->nama='Basis Data';
        $this->mtkl3->sks='3';
        $this->mtkl3->kode='BD05';

        $list_mtkl = [$this->mtkl1, $this->mtkl2, $this->mtkl3];
        $data['list_mtkl']=$list_mtkl;

        $this->load->view('header');
        $this->load->view('matakuliah/index',$data);
        $this->load->view('footer');
    }

}