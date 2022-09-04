<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Upload extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile("profile_photo_path")) {
            $file = $request->file("profile_photo_path");
            $filename = $file->getClientOriginalName();
            $link = $file->storeAs(
                "public/profile_photo_path/" . auth()->user()->id,
                $filename
            );
            $link =
                "profile_photo_path/" . auth()->user()->id . "/" . $filename;

            return $link;
        }

        return "";
    }
}
