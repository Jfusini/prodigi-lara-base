@extends('layouts/app')
@section('head_title', 'Elenco Clienti')

@section('content')
 
<h1>Lista dei Clienti:</h1>
    @php 
        $nomi=['Bruno Strati', 'Antonio Fosso'];
    @endphp

    <table>
    @foreach($nomi as $nome)
        <tr><td>{{$nome}}</td></tr>
    @endforeach
    </table>
@endsection