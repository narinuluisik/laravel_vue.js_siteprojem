<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function slider()
{
    $sliderItems = [
        ['id' => 1, 'title' => 'Birinci Slider', 'image' => '/images/slider1.jpg'],
        ['id' => 2, 'title' => 'İkinci Slider', 'image' => '/images/slider2.jpg'],
    ];

    // Debug için hemen döndürmeden önce yazdır
    dd($sliderItems);

    return response()->json($sliderItems);
}

}
