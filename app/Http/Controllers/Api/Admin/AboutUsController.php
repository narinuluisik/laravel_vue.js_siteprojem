<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;

class AboutUsController extends Controller
{
    public function index()
    {
        return AboutUs::all();
    }

    public function store(Request $request)
    {
        return AboutUs::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $item = AboutUs::findOrFail($id);
        $item->update($request->all());
        return $item;
    }

    public function destroy($id)
    {
        AboutUs::destroy($id);
        return response()->json(['message' => 'Silindi']);
    }

    public function show($id)
    {
        return AboutUs::findOrFail($id);
    }
}
