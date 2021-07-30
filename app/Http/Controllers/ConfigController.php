<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index(Request $request){
        $nome = 'Bonieky';
        $idade = 90;

        $data = [
            'nome' => $nome,
            'idade' => $idade
        ];

        return view('admin.config',$data);
    }
}
