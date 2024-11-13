<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerprofile extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'I Putu Aditya Kusuma Putra',
            'nim' => '2301010350',
            'email' => 'sontel700@gmail.com',
            'telepon' => '085536553102',
        ];
        return view('profiles.profile', compact('data'));
    }
}
