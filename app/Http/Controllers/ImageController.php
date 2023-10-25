<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function handleImage(Request $request) {
        $request->validate([
            'image' => 'required|max:500|min:100|mimes:png,gif'
        ]);

        // $request->image->store('/images');
        $request->image->storeAs('/images', $request->image->getClientOriginalName());
    }
}
