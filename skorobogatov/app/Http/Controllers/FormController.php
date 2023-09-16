<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FormController extends Controller
{
    public function create(){
        return view('/form');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:15',
            'hours' => 'required',
            'guys' => 'required',
            'number' => 'required',
            'lobby' => 'required',
        ]);

        DB::table('orders')->insert([
            ['name' => $request->input('name'),
            'number' => $request->input('number'),
            'hours' => $request->input('hours'),
            'lobby' => $request->input('lobby'),
            'guys' => $request->input('guys')]
        ]);
        return redirect('/');
        
    }
}
