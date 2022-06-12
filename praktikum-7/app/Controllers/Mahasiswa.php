<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;


class Mahasiswa extends BaseController
{
    public function index()
    {
        $this->mhs1 = new MAhasiswaModel();
        $this->mhs2 = new MahasiswaModel();
        $this->mhs3 = new MahasiswaModel();


        $this->mhs1->id=1;
        $this->mhs1->nim='011033456';
        $this->mhs1->nama='Garin Fitra';
        $this->mhs1->gender='L';
        $this->mhs1->tmp_lahir = 'Bekasi';
        $this->mhs1->tgl_lahir = '12 April 2003';
        $this->mhs1->ipk=3.85;

        
        $this->mhs2->id=2;
        $this->mhs2->nim='02203456';
        $this->mhs2->nama='Tiara';
        $this->mhs2->gender='P';
        $this->mhs2->tmp_lahir = 'Samosir';
        $this->mhs2->tgl_lahir = '16 Agustus 2002';
        $this->mhs2->ipk=3.35;

        
        $this->mhs3->id=3;
        $this->mhs3->nim='033301897';
        $this->mhs3->nama='Muti';
        $this->mhs3->gender='P';
        $this->mhs3->tmp_lahir = 'Ngawi';
        $this->mhs3->tgl_lahir = '23 Juli 2002';
        $this->mhs3->ipk=3.25;


        $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];
        $data['list_mhs']=$list_mhs;
        
        return view('mahasiswa/index',$data);
        

    }
}