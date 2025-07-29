<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class AdminContactMessageController extends Controller
{
    // Tüm mesajları listele
    public function index()
    {
        $messages = ContactMessage::orderBy('created_at', 'desc')->get();
        return response()->json($messages);
    }

    // Belirli bir mesajı göster
    public function show($id)
    {
        $message = ContactMessage::find($id);
        if (!$message) {
            return response()->json(['message' => 'Mesaj bulunamadı'], 404);
        }
        return response()->json($message);
    }

    // Mesaj sil
    public function destroy($id)
    {
        $message = ContactMessage::find($id);
        if (!$message) {
            return response()->json(['message' => 'Mesaj bulunamadı'], 404);
        }
        $message->delete();
        return response()->json(['message' => 'Mesaj başarıyla silindi']);
    }
}
