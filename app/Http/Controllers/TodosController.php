<?php

namespace App\Http\Controllers;

use App\TodoList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todo_lists = TodoList::all();
        return view('todos.index')->with('todo_lists', $todo_lists);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array('name' => ['required','unique:todo_lists,name', 'max:255']);
        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return redirect()->route('todos.create')->withErrors($validator)->withInput();
        } 
        
        $name = $request->input('name');
        $list = new TodoList();
        $list->name = $name;
        $list->save();

        return redirect()->route('todos.index')->with('message', 'Todo List Created Succesfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $list = TodoList::findOrFail($id);
        return view('todos.show')->with('list', $list);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list = TodoList::findOrFail($id);
        return view('todos.edit')->with('list', $list);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = array('name' => ['required','unique:todo_lists,name', 'max:255']);
        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return redirect()->route('todos.edit', $id)->withErrors($validator)->withInput();
        } 

        $list = TodoList::findOrFail($id);
        
        $list->update(request(['name']));
        return redirect()->route('todos.index')->with('message', 'Todo Item Succesfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $list = TodoList::findOrFail($id);
        
        $list->delete();
        return redirect()->route('todos.index')->with('message', 'Todo item Succesfully Deleted');
    }
}
