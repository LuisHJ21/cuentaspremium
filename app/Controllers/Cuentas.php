<?php

namespace App\Controllers;

class Cuentas extends BaseController
{
    public function index()
    {
      echo view('header');
      echo view('cuentas');
      echo view('footer');
    }
}
