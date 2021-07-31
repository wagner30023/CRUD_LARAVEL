@extends('layouts.admin')

@section('title','Edição de Tarefas')

@section('content')
    <h1 href="{{ route('tarefas.edit')}}"> Edição </h1>
    <br/>

    <form method="post">
        @csrf
        
        <label>
            Titulo: <br/><br/>
            <input type="text" name="{{$titulo ?? ''}}" />
            <input type="submit" value="Editar" />
        </label>
    </form>
    <br/>
        <a href="/config/info"> Informações </a>
    <br/>
    <br/>
@endsection