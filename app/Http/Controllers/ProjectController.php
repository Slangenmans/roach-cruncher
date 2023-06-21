<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index ()
    {
        $projects = DB::table('projects')->get();


        return view('projects.projects', [
            'projects' => $projects,
            ]);
    }

    public function store (Request $request)
    {
        $validated = $request->validate([
            'input_title' => 'required|min:6|max:69',
            'input_description' => 'max:120',
        ],
        [
            'input_title.required' => 'A title is required',
            'input_title.min' => 'Minimum of :min characters',
            'input_description.max' => 'Limit of :max characters exceeded',
        ]);
        
        $project = Project::create([
            'title' => $request->input('input_title'),
            'description' => $request->input('input_description'),
        ]);

        return redirect()->route('projects');
    }

    public function show (string $id)
    {
        return view('projects.project', [$id]);
    }
}
