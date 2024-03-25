<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Contoh1 extends BaseController
{
    public function index()
    {
        return view('view_contoh');
    }
}
