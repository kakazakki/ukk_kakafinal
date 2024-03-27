<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PhotosController extends Controller
{
    //
    public function create(int $album_id)
    {
        return view('photos.create', compact('album_id'));
    }

    public function store(Request $request)
    {
       $valid = $request->validate([
            'title' => 'required',
            'photo' => 'required|image|max:1999',
            'description' => 'required',
            'album_id' => 'required',
        ]);
$valid['size'] = "null";
$valid['photo'] = $request->file('photo')->store('photos_');
Photo::create($valid);

        return redirect('/albums/' . $request->input('album_id'))->with('success', 'Photo created');
    }

    public function show(Photo $photo)
    {
        $photo = Photo::findOrFail($photo->id);
        return view('photos.show', compact('photo'));
    }

    public function destroy($id)
    {
        $photo = Photo::findOrFail($id);
        $photo->delete();
        return redirect('/albums/' . $photo->album_id)->with('success', 'Photo deleted');
    }
}
