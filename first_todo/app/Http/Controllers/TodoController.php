<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(Request $request)
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
        $todo=Todo::find($form->id);
        $todo_id=$todo->id;
        return redirect('/delete',[]);
    }
    public function remove(Request $request)
    {
        $todo_id=$request->id;
        Todo::find($todo_id)->delete();
        return redirect('/');
    }
}
