<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cari extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $data['beranda'] = '';
        $data['resep'] = 'active';
        $this->key = $_GET['key'];
        $data['title'] = 'Hasil untuk ' . $this->key;
        $data['key'] = $this->key;
        $this->url = "https://masak-apa-tomorisakura.vercel.app/api/search/?q=" . $this->key;
        $this->data = file_get_contents($this->url);
        $data['result'] = json_decode($this->data, true);
        $this->load->view('header', $data);
        $this->load->view('cari', $data);
        $this->load->view('footer', $data);
    }
}