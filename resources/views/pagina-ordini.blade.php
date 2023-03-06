@extends('layouts/app')
@section('head_title', 'Elenco Ordini')

@section('content')
 
<h1>Lista dei Clienti:</h1>
    @php 
        $nomi=['Ordine 1', 'Ordine 2', 'Ordine 3'];
    @endphp

    <ul>
    @foreach($nomi as $nome)
        <tr><td>{{$nome}}</td></tr>
    @endforeach
    </ul>
@endsection