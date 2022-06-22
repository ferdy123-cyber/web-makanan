<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail extends CI_Controller
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
        $data['key'] =  $this->key;
        $data['title'] = $this->key;
        $this->load->view('header', $data);
        $this->url = 'https://masak-apa-tomorisakura.vercel.app/api/recipe/' . $this->key;
        $this->data = file_get_contents($this->url);
        $data['detailRecipe'] = json_decode($this->data, true);
        $this->url2 = "https://masak-apa-tomorisakura.vercel.app/api/recipes-length/?limit=5";
        $this->data2 = file_get_contents($this->url2);
        $data['newRecipe'] = json_decode($this->data2, true);
        $this->load->view('detail', $data);
        $this->load->view('footer', $data);
    }
}