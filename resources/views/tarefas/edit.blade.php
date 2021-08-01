@extends('layouts.admin')

@section('title','Edição de Tarefas')

@section('content')
    <h1 href=""> Edição </h1>
    <br/>

    @if ($errors->any())
        @alert
            @foreach($errors->all() as $error)
                {{ $error }}
            @endforeach
        @endalert
    @endif

    <br/>

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