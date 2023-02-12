@extends('layouts.main-layout')

@section('content')
    
    <h1>New project</h1>
    <form method="POST" action="{{ route('admin.project.update', $project) }}">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" value={{ $project -> name }}>
        <br>
        <label for="description">Description</label>
        <input type="text" name="description" value={{ $project -> description }}>
        <br>
        <label for="main_image">Image</label>
        <input type="text" name="main_image" value={{ $project -> main_image }}>
        <br>
        <label for="relase_date">Release Date</label>
        <input type="date" name="relase_date" value={{ $project -> relase_date }}>
        <br>
        <label for="repo_link">Repo</label>
        <input type="text" name="repo_link" value={{ $project -> repo_link }}>
        <br>
        <input type="submit" value="UPDATE project">
    </form>

@endsection