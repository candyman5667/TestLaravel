<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $works = Work::all();
        return view('index',['works' => $works]);
    }

    function addWork(Request $request)
    {
        $work = new Work();
        $work->content = $request->content;
        $work->save();
        return redirect()
    }
}
