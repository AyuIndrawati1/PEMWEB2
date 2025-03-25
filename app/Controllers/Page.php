<?php

namespace App\Controllers;

class Page extends BaseController

{
    public function about()
    {
        echo "about page";
    }
    public function contact()
    {
        echo "contact page";
    }
    public function faqs()
    {
        echo "Faqs page";
    }
    public function tos()
    {
        echo "Halaman Term of Service";
    }
    public function biodata()
    {
        echo "Ayu Indrawati<br>";
        echo "NIM 4123017<br>";
        echo "Kelas B<br>";
        echo "Semester 4<br>";
        echo "Prodi Sistem Informasi<br>";
        echo "Fakultas Sains dan Teknologi<br>";
        echo "Universitas Pesantren Tinggi Darul Ulum Jombang<br>";
    }
}
