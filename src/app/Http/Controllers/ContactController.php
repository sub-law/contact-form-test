<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function create()
  {
    return view('create');
  }

  public function confirm(Request $request)
  {
    $data = $request->all(); // 必要に応じてバリデーションも
    return view('confirm', compact('data'));
  }

  public function edit()
  {

    return view('create');
  }

  public function thanks()
  {
    return view('thanks');
  }
}
