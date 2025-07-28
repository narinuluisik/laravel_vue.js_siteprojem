<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamMember;

class TeamMemberController extends Controller
{
    public function index()
    {
        return TeamMember::all();
    }

    public function store(Request $request)
    {
        return TeamMember::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $item = TeamMember::findOrFail($id);
        $item->update($request->all());
        return $item;
    }

    public function destroy($id)
    {
        TeamMember::destroy($id);
        return response()->json(['message' => 'Silindi']);
    }

    public function show($id)
    {
        return TeamMember::findOrFail($id);
    }
}
