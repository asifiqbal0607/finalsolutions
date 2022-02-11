<?php

namespace App\Controllers;
use App\Models\User_model;

class User extends BaseController
{

    public function register()
    {
        echo view('user/register');
    }



    public function login()
    {
        echo view('user/login');
    }
    

}
?>