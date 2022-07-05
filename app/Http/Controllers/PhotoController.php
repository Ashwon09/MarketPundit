<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhotoEditRequest;
use App\Http\Requests\PhotoRequest;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct(Photo $photo)
    {
        $this->photo = $photo;
    }
    public function index()
    {
        $photos = $this->photo::orderBy('created_at', 'desc')->get();
        return view('photos.index', compact('photos'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photos.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhotoRequest $request)
    {

        if (!is_dir('uploads'))
            mkdir('uploads');

        if (!is_dir('uploads/photos'))
            mkdir('uploads/photos');

        $this->photo::create($request->createPhoto());
        return redirect()->route('photo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photo = $this->photo::find($id);
        return view('photos.edit', compact('photo'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PhotoEditRequest $request, $id)
    {
        // dd($request->all());
        $photo = $this->photo::find($id);
        // dd($photo);
        $photo->photo_heading = $request->photo_heading;

        if ($request->photo_location != null) {
            $destination = public_path('uploads/photos/' . $photo->photo_location);
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('photo_location');
            $newImageName = time() . '_' . $file->getClientOriginalName();
            $dest = public_path('/uploads/photos');
            $request->file('photo_location')->move($dest, $newImageName);
            $photo->photo_location = $newImageName;
        }
        $photo->photo_location = $photo->photo_location;
        $photo->update();
        return redirect()->route('photo.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $photo = $this->photo::find($id);
        // dd($photo);
        // dd($photo->photo_location);
        $destination = public_path('uploads/photos/' . $photo->photo_location);
        // dd($destination);
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $photo->delete();
        return redirect()->route('photo.index');
        
        //
    }
}
