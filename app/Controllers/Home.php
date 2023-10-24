<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function user(){
        $data['title'] = "Login";
        return view('user/index.php', $data);
    }
}
