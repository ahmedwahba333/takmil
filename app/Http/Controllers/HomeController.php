<?php

namespace App\Http\Controllers;
use App\Models\Content;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        $contents = Content::all();
        return view('home.index', compact('contents'));
    }
    public function create()
    {
        $contents = Content::all();
        return view("home.create", compact('contents'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'whous' => "required",
            'vision' => "required",
            'role' => "required",
            'model' => "required",
            'partners' => "required",
            'contact' => "required",
            'email' => "required",
            'phone' => "required",
        ]);

        Content::create([
            'whous' => $request['whous'],
            'vision' => $request['vision'],
            'role' => $request['role'],
            'model' => $request['model'],
            'partners' => $request['partners'],
            'contact' => $request['contact'],
            'email' => $request['email'],
            'phone' => $request['phone']
        ]);
        return redirect('/dashboard');
    }
    
    public function edit(Content $id)
    {
        return view("home.edit", ["data" => $id]);
    }
    public function update(Content $id, Request $request)
    {
        $request->validate([
            'whous' => "required",
            'vision' => "required",
            'role' => "required",
            'model' => "required",
            'partners' => "required",
            'contact' => "required",
            'email' => "required",
            'phone' => "required",
        ]);
        $id->update([
            'whous' => $request['whous'],
            'vision' => $request['vision'],
            'role' => $request['role'],
            'model' => $request['model'],
            'partners' => $request['partners'],
            'contact' => $request['contact'],
            'email' => $request['email'],
            'phone' => $request['phone']
        ]);
        return redirect('/dashboard');
    }

}
