<?php

namespace App\Controllers;

class Profil extends BaseController
{
    public function home(): string
    {
        helper('url');
        return view('view_profil/home');
    }
    public function pemweb(): string
    {
        return view('view_profil/pemweb');
    }
    public function sim(): string
    {
        return view('view_profil/sim');
    }
    public function visda(): string
    {
        return view('view_profil/visda');
    }
    public function mbd(): string
    {
        return view('view_profil/mbd');
    }
    public function hubungi(): string
    {
        return view('view_profil/hubungi');
    }
}
