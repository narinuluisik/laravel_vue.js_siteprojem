<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Project;
use App\Models\TeamMember;

class AboutPageController extends Controller
{
    public function index()
    {
        return response()->json([
            'about_us' => AboutUs::first(),
            'projects' => Project::all(),
            'team_members' => TeamMember::all(),
        ]);
    }
}
