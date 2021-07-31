<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TarefasController extends Controller
{
    public function list(){
        $list = DB::select('SELECT * FROM tarefas');

        return view('tarefas.list',[
            'list' => $list
        ]);
    }

    public function add(){
        return view('tarefas.add');
    }

    public function addAction(Request $request){
        //  filled: verifica se o post está preenhcido
        if($request->filled('titulo')){
            $titulo = $request->input('titulo');
            // dd($titulo);
            DB::insert('INSERT INTO tarefas (titulo) VALUES (:titulo)',[
                'titulo' => $titulo 
            ]);

            return redirect()->route('tarefas.list');
        }else{

        }
    } 

    public function edit(){
        return view('tarefas.edit');
    }

    public function editAction(Request $id){
        $titulo = $id->get('titulo');

        DB::edit('UPDATE tarefas SET titulo = :titulo WHERE id = :id',[
            'titulo' => $titulo,
        ]);

        return redirect()->route('tarefas.list');
    }

    public function del(){

    }


    public function done(){

    }
}
