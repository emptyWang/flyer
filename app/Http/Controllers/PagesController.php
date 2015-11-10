<?php

namespace App\Http\Controllers;

use App\Services\OSS;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home()
    {
        // OSS::upload('photos/'.time().'.jpeg', 'flyer/photos/0b0bc583e242f93b61c4f0e4c869f00c64ff23f7.jpeg');
        // dd(OSS::getUrl('photos/1447090840.jpeg'));
        // dd(OSS::getAllObjectKey('photocenter'));
        return view('pages.home');
    }
}
