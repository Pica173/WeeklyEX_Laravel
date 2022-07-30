<?php

namespace App\Http\Controllers;

use App\Models\WeeklyEx;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function create(Request $request)
    {
        $this->validate($request, WeeklyEx::$rules);
        $form = $request->all();
        WeeklyEx::create($form);
        return view('thanks');        
    }
    public function thanks()
    {
        return view('thanks');
    }
}
