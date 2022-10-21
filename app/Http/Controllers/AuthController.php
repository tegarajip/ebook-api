<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me() {
        return [
            'Nis' => 3103120219,
            'Name' => 'Tegar AJi Pangestu',
            'Phone' => '082135551017',
            'Class' => 'XII RPL 7'
        ];
    }
}
