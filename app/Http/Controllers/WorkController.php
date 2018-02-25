<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Work;

class WorkController extends Controller
{
  public function index()
  {
    $works = Work::all();
    return view('works.index', compact('works'));
  }

  public function show($id)
  {
    $work = Work::find($id);
    return view('works.show', compact('work'));
  }
}
