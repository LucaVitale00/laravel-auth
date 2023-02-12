@extends('layouts.main-layout')

@section('content')
    
    <h1>CONTENT</h1>
    <div class="card-body">
        <h1>{{$project -> name}}</h1>

        <img src="{{$project -> main_image}}" alt="">
        <h3>Description</h3>
        <p>{{$project -> description}}</p>
        <div>
            <span>Relese date: {{$project -> relase_date }}</span>
        </div>
        <a href="{{$project -> repo_link}}">{{$project -> repo_link}}</a>
           @guest
            @else
                <div>
                    <a href="{{ route('admin.project.delete', $project) }}">Delete</a>
                    <a href="{{ route('admin.project.edit', $project) }}">
                        EDIT
                    </a>
                </div>
            @endguest

    </div>
@endsection