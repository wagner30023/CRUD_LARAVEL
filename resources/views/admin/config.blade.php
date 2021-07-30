@extends('layouts.admin')

@section('title','Configurações')

@section('content')
        <h1> Configurações </h1>

        @component('components.alert')
            @slot('type')
                Erro:
            @endslot
        @endcomponent

        <br/><br/>

        <form method="post">
            @csrf

            Nome: <br/>
            <input type="text" name="nome" /> <br/>
                
            Idade: <br/>
            <input type="text" name="idade" /> <br/>

            Cidade: <br/>
            <input type="text" name="cidade" /> <br/>
            <br/>
                <input type="submit" value="Enviar" />
            <br/>
        </form>
        <br/>
            <a href="/config/info"> Informações </a>
        <br/>
        <br/>
@endsection
