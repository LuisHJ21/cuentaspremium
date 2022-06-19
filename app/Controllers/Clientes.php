<?php

namespace App\Controllers;

class Clientes extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('clientes/clientes');
        echo view('footer');
    }

    public function nuevo()
    {
        echo view('header');
        echo view('clientes/nuevocliente');
        echo view('footer');
    }
}
