<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('layouts.portfolio');
    }

    public function show($id)
    {
        return view('detailProject', compact('id'));
    }
}
