@extends('app')

@section('title', '123 Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection
@section('sidebar1')
@parent
<p>php-12</p>
@endsection
@section('content')
    <p>This is my body content.</p>
@endsection 