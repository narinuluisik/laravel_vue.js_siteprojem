<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function show()
    {
        // İlk (veya tek) sabit iletişim bilgisi
        $contact = Contact::first();

        return response()->json($contact);
    }
}
