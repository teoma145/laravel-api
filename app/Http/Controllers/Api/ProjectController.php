<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects= Project::all();

        return response()->json(
            ['success' => true,
             'results' => $projects],
        );
    }

    public function show($slug)
    {
        $project = Project::Where('slug', $slug)->with(['technologies','type'])->first();
        //$project = Project::find($id);
        return response()->json(
            ['success' => true,
             'results' => $project],
        );
    }

}
