<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $data['title'] = "Beranda";
        $data['chategory'] = [
            [
                "category" => "Dessert",
                "thumb" => "https://www.masakapahariini.com/wp-content/uploads/2021/04/shutterstock_1890524233-780x600.jpg",
                "key" => "resep-dessert",
                "dekstop-thumb" => "https://www.masakapahariini.com/wp-content/uploads/2021/04/shutterstock_1890524233-1000x250.jpg",
            ],
            [
                "category" => "Masakan hari raya",
                "thumb" => "https://www.masakapahariini.com/wp-content/uploads/2018/04/menu-hari-raya-780x600.jpg",
                "key" => "masakan-hari-raya",
                "dekstop-thumb" => "https://www.masakapahariini.com/wp-content/uploads/2018/04/menu-hari-raya-1920x250.jpg",
            ],
            [
                "category" => "Masakan tradisional",
                "thumb" => "https://www.masakapahariini.com/wp-content/uploads/2018/04/masakan-tradisional-780x600.jpg",
                "key" => "masakan-tradisional",
                "dekstop-thumb" => "https://www.masakapahariini.com/wp-content/uploads/2018/04/masakan-tradisional-1920x250.jpg"
            ],
            [
                "category" => "Makan malam",
                "thumb" => "https://www.masakapahariini.com/wp-content/uploads/2018/04/makan-malam-780x600.jpg",
                "key" => "makan-malam",
                "dekstop-thumb" => "https://www.masakapahariini.com/wp-content/uploads/2018/04/makan-malam-1920x250.jpg"
            ],
            [
                "category" => "Menu makan siang",
                "thumb" => "https://www.masakapahariini.com/wp-content/uploads/2018/04/makan-siang-780x600.jpg",
                "key" => "makan-siang",
                "dekstop-thumb" => "https://www.masakapahariini.com/wp-content/uploads/2018/04/makan-siang-1920x250.jpg"
            ],
            [
                "category" => "Resep ayam",
                "thumb" => "https://www.masakapahariini.com/wp-content/uploads/2018/04/resep-ayam-780x600.jpg",
                "key" => "resep-ayam",
                "dekstop-thumb" => "https://www.masakapahariini.com/wp-content/uploads/2018/04/resep-ayam-1920x250.jpg"
            ],
            [
                "category" => "Resep daging",
                "thumb" => "https://www.masakapahariini.com/wp-content/uploads/2018/04/resep-daging-780x600.jpg",
                "key" => "resep-daging",
                "dekstop-thumb" => "https://www.masakapahariini.com/wp-content/uploads/2018/04/resep-daging-1920x250.jpg"
            ],
            [
                "category" => "Resep sayuran",
                "thumb" => "https://www.masakapahariini.com/wp-content/uploads/2018/04/resep-sayuran-780x600.jpg",
                "key" => "resep-sayuran",
                "dekstop-thumb" => "https://www.masakapahariini.com/wp-content/uploads/2018/04/resep-sayuran-1920x250.jpg"
            ],
            [
                "category" => "Resep seafood",
                "thumb" => "https://www.masakapahariini.com/wp-content/uploads/2018/04/resep-seafood-780x600.jpg",
                "key" => "resep-seafood",
                "dekstop-thumb" => "https://www.masakapahariini.com/wp-content/uploads/2018/04/resep-seafood-1920x250.jpg"
            ]
        ];
        $this->url = 'https://masak-apa-tomorisakura.vercel.app/api/recipes';
        $this->data = file_get_contents($this->url);
        $data['newRecipe'] = json_decode($this->data, true);
        $data['beranda'] = 'active';
        $data['resep'] = '';
        $this->load->view('header', $data);
        $this->load->view('beranda', $data);
        $this->load->view('footer', $data);
    }
}