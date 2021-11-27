<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $items=Todo::all();
        return view('index',['items'=>$items]);
    }
    public function create(Request $request)
    {
        $form=$request->all();
        Todo::create($form);
        return redirect('/');
    }
    public function delete(Request $request)
    {
        $form=$request->all();
        Todo::find($form->id)->delete();
        return redirect('/');
    }
}
