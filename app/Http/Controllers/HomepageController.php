<?php

namespace App\Http\Controllers;

use App\Models\BOD;
use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Services;
use App\Models\status;
use Illuminate\Support\Facades\Http;

class HomepageController extends Controller
{
    function __construct(Photo $photo, Status $status, BOD $bod, Services $service)
    {
        $this->photo = $photo;
        $this->status = $status;
        $this->bod = $bod;
        $this->service = $service;
    }
    public function index()
    {
        $client = new \GuzzleHttp\Client();
        $request = Http::get("http://nepstockapi.herokuapp.com/");
        // dd($request);
        $response = $request->getBody()->getContents();
        // error_log($response);
        $data= json_decode($response);
        // dd($data);
        $status = $this->status::orderBy('id', 'desc')->take(3)->get();
        $photo = $this->photo::orderBy('id', 'desc')->first();
        return view('welcome', compact('status', 'photo', 'data'));
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
        $bods = $this->bod::orderBy('created_at', 'asc')->get();
        return view('aboutUs.boardOfDirectors', compact('bods'));
    }

    public function services()
    {
        $services = $this->service::orderBy('created_at', 'asc')->get();
        return view('services', compact('services'));
    }
    public function companyOverview()
    {
        return view('companyOverview');
    }
    //
}
