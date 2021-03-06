@extends('layouts.admin')

@section('title','Adição de tarefas')

@section('content')
    <h1> Adição </h1>

    @if ($errors->any())
        @alert
            @foreach($errors->all() as $error)
                {{ $error }}
            @endforeach
        @endalert
    @endif

    <br/>

    <form method="post">
        @csrf
        
        <label>
            Titulo: <br/><br/>
            <input type="text" name="titulo" />
            <input type="submit" value="Adicionar" />
        </label>
    </form>
    <br/>
        <a href="/config/info"> Informações </a>
    <br/>
    <br/>
@endsection