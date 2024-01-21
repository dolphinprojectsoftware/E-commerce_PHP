@extends('sample::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('sample.name') !!}</p>
@endsection
