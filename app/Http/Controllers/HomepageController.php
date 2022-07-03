<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\status;
class HomepageController extends Controller
{
     function __construct(Photo $photo, Status $status)
    {
        $this->photo = $photo;
        $this->status = $status;
    }
    public function index()
    {
        $status = $this->status::orderBy('id', 'desc')->take(3)->get();
        $photo = $this->photo::orderBy('id', 'desc')->first();
        return view('welcome', compact('status', 'photo'));
    }



    public function statusView($id)
    {
        $status = $this->status::find($id);
        //    dd($status);
        return view('status', compact('status'));
    }

    public function viewAll()
    {
        // dd('here');
        $statuses = $this->status::orderBy('created_at', 'desc')->get();
        //    dd($status);
        return view('viewallstatus', compact('statuses'));
    }

    public function viewPhoto()
    {
        // dd('here');
        $photos = $this->photo::orderBy('created_at', 'desc')->get();
        //    dd($status);
        return view('viewphoto', compact('photos'));
    }

    public function aboutUs()
    {
        return view('aboutUs.aboutUs');
    }

    public function boardOfDirectors()
    {
        return view('aboutUs.boardOfDirectors');
    }

    public function services()
    {
        return view('services');
    }
     public function companyOverview(){
        return view('companyOverview');
     }
    //
}
