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
            return redirect()
                ->route('tarefas.add')
                ->with('warning','Você não preencheu o título');
        }
    } 

    public function edit($id){
        $data = DB::select('SELECT * FROM tarefas WHERE id = :id',[
            'id' => $id
        ]);

        if(count($data) > 0){
            return view('tarefas.edit',[
                'data' => $data[0]
            ]);
        } else {
            return redirect()->route('tarefas.list');
        }
    }

    public function editAction(Request $request,$id){
        if($request->filled('titulo')){

            $titulo = $request->input('titulo');
            $data = DB::select('SELECT * FROM tarefas WHERE id = :id',[
                'id' => $id
            ]);
    
            if(count($data) > 0){
                DB::update('UPDATE tarefas SET titulo = :titulo WHERE id = :id',[
                    'id' => $id,
                    'titulo' => $titulo
                ]);
            } 

            return redirect()->route('tarefas.list');
        } else {
            return redirect()
                ->route('tarefas.edit',['id' => $id])
                ->with('warning','Você não preencheu o título');
            }
    }
    

    public function del(){

    }


    public function done(){

    }
}
