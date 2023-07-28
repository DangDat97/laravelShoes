<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientHomeController extends Controller
{
    public function index()
    {

        $data = [
            'title' => 'Hoc laravel'
        ];
        return view('layouts.client', $data);
    }
}
