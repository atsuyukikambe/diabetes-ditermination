<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; 

class UsersController extends Controller
{
    public function ditermination(){
        $user = \Auth::user();
        
        return view ('ditermination.ditermination',[
            'user' => $user,
            ]);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'mbgl' => 'required|max:3',
            'ogtt' => 'required|max:3',
            'hba1c' => 'required|max:4',
        ]);
        
        $request->user()->results()->create([
            'mbgl' => $request->mbgl,
            'ogtt' => $request->ogtt,
            'hba1c' => $request->hba1c,
        ]);
        
        $mbgl = $_POST['mbgl'];
        $ogtt = $_POST['ogtt'];
        $hba1c = $_POST['hba1c'];
        
        return view ('results.results', [
            'mbgl' => $mbgl,
            'ogtt' => $ogtt,
            'hba1c' => $hba1c,
            ]);
    }
}
