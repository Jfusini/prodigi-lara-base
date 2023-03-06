@extends('layouts/app')
@section('head_title', 'Elenco Fatture')

@section('content')
 
<h1>Lista delle Fatture:</h1>
    @php 
        $nomi=['Fattura 1', 'Fattura 2'];
    @endphp

    <ol>
    @foreach($nomi as $nome)
        <li>{{$nome}}</li>
    @endforeach
    </ol>
@endsection