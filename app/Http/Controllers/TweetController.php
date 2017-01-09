<?php

namespace App\Http\Controllers;


use App\User;
use App\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index(Request $request)
    {
        //return $request->user()->tweets()-->get();
        return $request->user()->tweets()->with(['user'])->get();
    }

}
