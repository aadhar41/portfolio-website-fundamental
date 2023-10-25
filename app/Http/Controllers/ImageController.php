<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function handleImage(Request $request) {
        $request->validate([
            'image' => 'required|max:500|min:100|mimes:png,gif,jpg'
        ]);

        // $request->image->store('/images');
        $request->image->storeAs('/images', $request->image->getClientOriginalName());

        return redirect()->back();
        // return redirect()->route('success');
    }


    public function download(Request $request) {
        return response()->download(public_path('/storage/images/chatting-1.jpg'));
    }

}
