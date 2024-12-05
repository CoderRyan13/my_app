@extends('layouts.app')

@section('styles')
@stop

@section('content')
    <div class="mx-2 my-4">Home</div>

    @auth
        <h1>Logged In</h1>
    @endauth

    @guest
        <h1>Guest</h1>
    @endguest
@stop