@extends('sample::layouts.master')

@section('content')
    <h1>Index Auth Module</h1>

    <p>Module: {!! config('auth.name') !!}</p>
    <p>Hola Mundo</p>
@endsection
