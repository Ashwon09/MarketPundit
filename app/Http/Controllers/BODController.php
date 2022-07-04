<?php

namespace App\Http\Controllers;

use App\Http\Requests\BODRequest;
use App\Models\BOD;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BODController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct(BOD $bod)
    {
        $this->bod = $bod;
    }
    public function index()
    {
        $bods = $this->bod::orderBy('created_at', 'desc')->get();
        // dd($manufacturers);
        return view('bod.index', compact('bods'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bod.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BODRequest $request)
    {
        // dd($request->all());
        if (!is_dir('uploads'))
            mkdir('uploads');

        if (!is_dir('uploads/bod'))
            mkdir('uploads/bod');

        $this->bod::create($request->createbod());
        return redirect()->route('bod.index');
        //
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
        $bod=$this->bod::find($id);
        return view('bod.edit', compact('bod'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
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
        $bod = $this->bod::find($id);
        // dd($bod);
        // dd($photo);
        // dd($photo->photo_location);
        $destination = public_path('uploads/bod/' . $bod->picture);
        // dd($destination);
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $bod->delete();
        return redirect()->route('photo.index');

        //
    }
}
