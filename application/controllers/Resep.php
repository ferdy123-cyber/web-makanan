<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Resep extends CI_Controller
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
        $this->url = "https://masak-apa-tomorisakura.vercel.app/api/recipes/1";
        $this->data = file_get_contents($this->url);
        $data['allRecipe'] = json_decode($this->data, true);
        $this->url2 = "https://masak-apa-tomorisakura.vercel.app/api/recipes-length/?limit=5";
        $this->data2 = file_get_contents($this->url2);
        $data['newRecipe'] = json_decode($this->data2, true);
        $data['title'] = 'Daftar Resep';
        $this->load->view('header', $data);
        $this->load->view('resep', $data);
        $this->load->view('footer', $data);
    }
}