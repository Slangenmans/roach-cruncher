<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// TODO: Pass query-data from projects table
class ProjectController extends Controller
{
    public function index ()
    {
        return '<h1>Projects index</h1>';
    }

    public function show (string $id)
    {
        return view('projects.projects')
        ->with('table_headers', ['th1    ', 'th2    ', 'th3    ', ])
        ->with('table_data', [['td1.1    ', 'th2.1    ', 'th3.1    '],['td1.2    ', 'th2.2    ', 'th3.3    '], ])
            ->with($id);
    }
}
