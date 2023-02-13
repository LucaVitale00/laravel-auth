<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    //index
    public function home() {

        $projects = Project :: all();

        return view('pages.home', compact('projects'));
    }

    //show
    public function projectShow(Project $project){

        return view('pages.projectShow', compact('project'));
    }

    //DELETE
    public function projectDelete(Project $project){

        $project -> delete();

        return redirect() -> route('home');

    }

    //create & store
    public function projectCreate() {

	return view('pages.projectCreate');
    }

    public function projectStore(Request $request) {

	$data = $request -> validate([
		'name' => 'required|string|max:64|unique:projects,name',
		'description' => 'nullable|string',
        'main_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        'relase_date' => 'nullable|string|before:tomorrow',
		'repo_link' => 'required|string|unique:projects,repo_link',
	]);

    $img_path = Storage::put('uploads', $data['main_image']);
    $data['main_image'] = $img_path;

	$project = new Project();

	$project -> name = $data['name'];
	$project -> description = $data['description'];
	$project -> main_image = $img_path;
    $project -> relase_date = $data['relase_date'];
    $project -> repo_link = $data['repo_link'];


	$project -> save();

	return redirect() -> route('home');
    }

    //update
    public function projectEdit(Project $project) {

	return view('pages.projectEdit', compact('project'));
    }

    public function projectUpdate(Request $request, Project $project) {

	$data = $request -> validate([
		'name' => 'required|string|max:64|unique:projects,name',
		'description' => 'nullable|string',
        'main_image' => 'nullable|string|unique:projects,main_image',
        'relase_date' => 'nullable|string|before:tomorrow',
		'repo_link' => 'required|string|unique:projects,repo_link',
	]);

    $img_path = Storage::put('uploads', $data['main_image']);
    $data['main_image'] = $img_path;

	$project -> name = $data['name'];
	$project -> description = $data['description'];
	$project -> main_image = $img_path;
    $project -> relase_date = $data['relase_date'];
    $project -> repo_link = $data['repo_link'];

	$project -> save();

	return redirect() -> route('home');
    }      
}
