<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function show()
    {
      
        $contact = Contact::first();

        return response()->json($contact);
    }
}
