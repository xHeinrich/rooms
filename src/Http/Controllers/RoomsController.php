<?php

namespace xHeinrich\Rooms\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class RoomsController extends Controller
{
    public function index()
    {
        $rooms = Auth::user()->rooms()->with(['users', 'messages'])->get();
        return view('rooms::layout', compact('rooms'));
    }

    public function show($id)
    {

    }

    public function create(Request $request)
    {

    }
}
