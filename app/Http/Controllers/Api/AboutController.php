<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Project;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = AboutUs::first(); 

        $projects = Project::all();

        $team = TeamMember::all();

        return response()->json([
            'about' => $about,
            'projects' => $projects,
            'team' => $team,
        ]);
    }
}
