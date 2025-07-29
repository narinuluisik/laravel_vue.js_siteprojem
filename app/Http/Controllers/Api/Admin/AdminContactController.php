<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return response()->json($contacts);
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return response()->json($contact);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'address' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'map_embed' => 'nullable|string',
            'working_hours' => 'nullable|string',
        ]);

        $contact = Contact::create($data);
        return response()->json($contact, 201);
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);

        $data = $request->validate([
            'address' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'map_embed' => 'nullable|string',
            'working_hours' => 'nullable|string',
        ]);

        $contact->update($data);

        return response()->json($contact);
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return response()->json(null, 204);
    }
}
