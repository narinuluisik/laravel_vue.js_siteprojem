<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        return Project::all();
    }

    public function store(Request $request)
    {
        return Project::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $item = Project::findOrFail($id);
        $item->update($request->all());
        return $item;
    }

    public function destroy($id)
    {
        Project::destroy($id);
        return response()->json(['message' => 'Silindi']);
    }

    public function show($id)
    {
        return Project::findOrFail($id);
    }
}
