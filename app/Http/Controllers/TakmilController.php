<?php

namespace App\Http\Controllers;
use App\Models\Content;

use Illuminate\Http\Request;

class TakmilController extends Controller
{
    public function index()
    {
        $contents = Content::all();
        return view("index",compact('contents'));
    }
}
