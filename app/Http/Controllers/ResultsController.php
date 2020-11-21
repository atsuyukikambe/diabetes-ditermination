<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultsController extends Controller
{
    public function index()
    {
        $data = [ ];
        if (\Auth::check()) {
            
            $user = \Auth::user();
            
            $results = $user->results()->orderby('created_at', 'desc')->paginate(10);
            
            $data = [
                'user' => $user,
                'results' => $results
                ];
        }
        return view('past.past', $data);
    }
}