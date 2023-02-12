@extends('layouts.main-layout')

@section('content')
    
    <h1>CONTENT</h1>
    <div class="card-body">
        <h1>Homepage</h1>
        @guest
        <h2>Not Logged</h2>
        @else
        <h2>Logged</h2>
        @endguest

    </div>
@endsection