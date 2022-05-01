<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;

class TodoController extends Controller
{
    public function index() {
        $items = Work::all();
        return view('index',$items);
    }
    public function create(Request $request) {
        $request->validate([
            'content' => 'required | max:20'
        ]);
        return view('index');
    }
    public function update(Request $request)
    {

    }
    public function delete()
    {

    }
}
