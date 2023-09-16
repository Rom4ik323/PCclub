<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $price = Post::all();
        return view('adminpanel_price', compact('price'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('price')->insert([
            [
            'time' => $request->input('time'),
            'money' => $request->input('money'),
            'lobby' => $request->input('lobby')
            ]
        ]);
        return view('success_price');
    }

    public function storePrice(Request $request)
    {
        return view('store_price');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $price = Post::find($id);
        $price->lobby=$request->lobby;
        $price->time=$request->time;
        $price->money=$request->money;
        $price->save();
        return redirect('/adminpanel/price');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $price)
    {
        $price->delete();
        return back();
    }

    public function UpdatePrice($id)
    {
        $price = Post::find($id);
        return view('update_price', compact('price'));
    }
}
