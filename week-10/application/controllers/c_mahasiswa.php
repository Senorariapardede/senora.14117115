<?php
defined('BASEPATH')OR exit('No direct script access allow');
class C_Mahasiswa extends CI_Controller{
    public function index(){
        $this ->load->model("m_mahasiswa");
        $get=$this->m_mahasiswa->get();
        $data ['nama']=$get[0]->nama;
        $data ['nim'] = $get[0]->nim;
        $data ['alamat']=$get[0]->alamat;
        $data ['TTL']=$get[0]->TTL;
        $this->load->view('v_mahasiswa',$data);
    }
}
