<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Todo;
use App\Http\Requests\StoreTodoRequest;
use App\Http\Requests\UpdateTodoRequest;
use Illuminate\Support\Facades\DB;

//use http\Env\Request;


class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=Todo::all();
        return view('todo.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTodoRequest  $request
     * @return \Illuminate\Http\Response
     *///
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required:todos|max:25',
            'email' => 'required:todos|max:255',
        ]);

        $todo=Todo::create([
            'name'=>$request->name,
            'email'=>$request->email,
        ]);
        return redirect()->route('todo.course');
    }

    public function storeb(Request $request,$id)
    {
        $request->validate([
            'course' => 'required:todos|max:25',
//            'id' => 'required:todos|max:25',

        ]);
        $user = Todo::orderBy('created_at', 'desc')->first();


//        $user = Todo::find($request->$id);
        $user->update([
            'course'=>$request->course,
        ]);

        return redirect()->route('todo.cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function cart()
    {
        $user = Todo::orderBy('created_at', 'desc')->first();
        $users = DB::table('todos')
            ->where('name', '=', $user->name)
            ->where('email', '=', $user->email)->get();

        return view('todo.cart',compact('users'));






//
//        $user_name = Todo::find($user->name);
//
//        $user_email=$user_name->find($user.email);
//        dd($user_email);
//        $user_final=;


//        return view('todo.index',compact('users'));



    }







    public function show($id)
    {
        $user=Todo::FindorFail($id);
        return view('todo.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=Todo::FindorFail($id);
        return view('todo.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTodoRequest  $request
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required:todos|max:25',
            'email' => 'required|unique:todos|max:255',
        ]);
        $todo=Todo::FindorFail($id);
        $todo->update([
            'name'=>$request->name,
            'email'=>$request->email,
        ]);
        return redirect()->route('todo.cart');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo=Todo::FindorFail($id);
        $todo->delete();
        return redirect()->route('todo.cart');


    }
}
