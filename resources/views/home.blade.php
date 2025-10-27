@extends('layouts.app')


@section('title', 'alo')

@push('css')
    <style>
        body {
            background-color: #f0f0f0;
        }
    </style>
@endpush

@section('content')
    
<div class="max-w-4xl mx-auto px-4">
    {{-- <h1>Bienvenido a la pagina principal</h1> --}}
    
    <x-alert2 type="info" class="mb-4">
        <x-slot name='title'>
            Titulo de la alerta
        </x-slot>
        <x-slot name='slot'>
            contenido de la alerta
        </x-slot>
    </x-alert2>

    <p>Hola mundo</p>
</div>

@endsection
