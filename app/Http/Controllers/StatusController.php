<?php

namespace App\Http\Controllers;

use App\Http\Requests\StatusRequest;
use App\Models\status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct(status $status)
    {
        $this->status = $status;
    }
    public function index()
    {
        $statuses = $this->status::orderBy('created_at', 'desc')->get();
        // dd($manufacturers);
        return view('status.index', compact('statuses'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('status.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StatusRequest $request)
    {
        $this->status::create($request->createStatus());
        return redirect()->route('status.index');

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
        $status = $this->status::find($id);
    //    dd($status);
        return view('status.edit', compact('status'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StatusRequest $request, $id)
    {
        $status = $this->status::find($id);
        $status->status_heading = $request->status_heading;
        $status->status_description = $request->status_description;
        // dd($status);
        $status->update();
        return redirect()->route('status.index');
    //    dd($status);
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
        //
    }
}
