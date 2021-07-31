@extends('layouts.admin')

@section('title','Edição de Tarefas')

@section('content')
    <h1 href=""> Edição </h1>
    <br/>

    @if(session('warning'))
        @alert
            {{ session('warning') }}
        @endalert
    @endif

    <form method="POST">
        @csrf
        
        <label>
            Titulo: <br/><br/>
            <input type="text" name="titulo" value="{{ $data->titulo }}" />
        </label>
        <input type="submit" value="Editar" />
    </form>
    <br/>
    <br/>
@endsection