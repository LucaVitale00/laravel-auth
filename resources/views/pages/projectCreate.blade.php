@extends('layouts.main-layout')

@section('content')
    
    <h1>New Project</h1>
    <form method="POST" action="{{ route('admin.project.store') }}">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">
        <br>
        <label for="description">Description</label>
        <input type="text" name="description">
        <br>
        <label for="main_image">Image</label>
        <input type="text" name="main_image">
        <br>
        <label for="relase_date">Release Date</label>
        <input type="date" name="relase_date">
        <br>
        <label for="repo_link">Repo</label>
        <input type="text" name="repo_link">
        <br>
        <input type="submit" value="CREATE NEW PROJECT">
    </form>

@endsection