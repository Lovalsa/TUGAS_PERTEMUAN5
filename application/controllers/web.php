<?php
defined('BASEPATH') OR exit ('no direct scrip access allowed');

class web extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
    }
    public function user()
    {
        $data=array(
            'user'=>$this->m_data->ambil_data()->result(),
            'judul'=> "Daftar User"
        );

        $this->load->view('v_header', $data);
        $this->load->view('v_user', $data);
        $this->load->view('v_footer', $data);
    }

    public function index(){
        $data['judul'] = "Home";
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);
    }

    public function blog(){
        $data['judul'] = "Blog";
        $this->load->view('v_header',$data);
        $this->load->view('v_blog',$data);
        $this->load->view('v_footer',$data);
    }

    public function about(){
        $data['judul'] = "About";
        $this->load->view('v_header',$data);
        $this->load->view('v_about',$data);
        $this->load->view('v_footer',$data);
    }
}