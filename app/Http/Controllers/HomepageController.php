<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\status;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    function __construct(Photo $photo, status $status)
    {
        $this->photo = $photo;
        $this->status = $status;

    }
    public function index(){
        return view('welcome');
    }
    //
}
