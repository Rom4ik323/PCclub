<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Panel;
class PanelController extends Controller
{
    public function index()
    {
        $orders = Panel::all();
        return view('adminpanel1', compact('orders'));
    }

    public function destroy(Panel $orders)
    {
        $orders->delete();
        return back();
    }

    public function store(Request $request)
    {
        DB::table('orders')->insert([
            ['name' => $request->input('name'),
            'number' => $request->input('number'),
            'hours' => $request->input('hours'),
            'lobby' => $request->input('lobby'),
            'guys' => $request->input('guys')]
        ]);
        return view('success');
    }
    
    public function storeOrder(Request $request)
    {
        return view('store_order');
    }
}
