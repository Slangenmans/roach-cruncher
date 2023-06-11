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
            'input_title' => 'required|min:6',
            'input_description' => 'required|max:40',
        ]);
        
        $project = Project::create([
            'title' => $request->input('input_title'),
            'description' => $request->input('input_description'),
        ]);

        return redirect()->route('projects');
    }

    public function show (string $id)
    {
        return 'individual project ' . $id;

        // ->with('table_headers', ['th1    ', 'th2    ', 'th3    ', ])
        // ->with('table_data', [['td1.1    ', 'th2.1    ', 'th3.1    '],['td1.2    ', 'th2.2    ', 'th3.3    '], ])
        //     ->with($id);
    }
}
