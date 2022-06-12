<?php

namespace App\Controllers;

use App\Models\DosenModel;

class Dosen extends BaseController
{

    public function index()
    {
        $this->dsn1 = new DosenModel();
        $this->dsn2 = new DosenModel();
        $this->dsn3 = new DosenModel();
        $this->dsn4 = new DosenModel();


        $this->dsn1->id=1;
        $this->dsn1->nama='Heri Sanjaya.M.Ag,';
        $this->dsn1->nidn='0321987';
        $this->dsn1->gender="L";
        $this->dsn1->tmp_lahir='Palangkaraya';
        $this->dsn1->tgl_lahir='1973-03-17';
        $this->dsn1->pendidikan='Magister Agama';

        $this->dsn2->id=2;
        $this->dsn2->nama='Moh.Yamin.M.T,';
        $this->dsn2->nidn='0587690';
        $this->dsn2->gender="L";
        $this->dsn2->tmp_lahir='Banyuwangi';
        $this->dsn2->tgl_lahir='1978-11-24';
        $this->dsn2->pendidikan='MAgister Teknik Informatika';

        $this->dsn3->id=3;
        $this->dsn3->nama='Aminah Sholiha.M.T,';
        $this->dsn3->nidn='0321987';
        $this->dsn3->gender="L";
        $this->dsn3->tmp_lahir='Palangkaraya';
        $this->dsn3->tgl_lahir='1973-03-17';
        $this->dsn3->pendidikan='Magister Teknik Sipil';

        
        $this->dsn4->id=4;
        $this->dsn4->nama='Heri Sanjaya.M.Pd,';
        $this->dsn4->nidn='0321987';
        $this->dsn4->gender="L";
        $this->dsn4->tmp_lahir='Palangkaraya';
        $this->dsn4->tgl_lahir='1973-03-17';
        $this->dsn4->pendidikan='Magister Sastra Arab';

        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3, $this->dsn4];
        $data['list_dsn']=$list_dsn;

        
        return view('dosen/index',$data);
    }
        


}
