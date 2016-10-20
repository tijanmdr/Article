<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function contact() {
        $name = [
            "Tijan Manandhar", "Anita Maharjan", "Nitest Qazi Tamrakar"
        ];
//        $name = [];

    	return view('page.contact', compact('name'));
    }
}
