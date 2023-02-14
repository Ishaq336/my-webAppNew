<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('common/headerlogin');
        echo view('common/nav');
        echo  view('user/login');
    }
}
