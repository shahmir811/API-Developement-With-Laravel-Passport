<?php

namespace App\Http\Controllers;


use App\User;
use App\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index(Request $request)
    {
      return $request->user()->tweets()->with(['user'])->latestFirst()->get();
    }

    public function store(Request $request)
    {
      $this->validate($request, [
        'body' => 'required'
      ]);

      $tweet = $request->user()->tweets()->create([
         'body' => $request->body
      ])->load('user'); //Load the user back

      return $tweet; //Brings back the tweet the user just made

    }

}
