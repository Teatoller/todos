<?php

namespace App\Http\Controllers;

use App\TodoItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'content' => ['required', 'unique:todo_items,content', 'max:255'],
        );
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('todos.show')->withErrors($validator)->withInput();
        }
        $content = $request->input('content');
        $todo_list_id = $request->input('todo_list_id');

        $item = new TodoItem();

        $item->content = $content;
        $item->todo_list_id = $todo_list_id;
        $item->save();

        return redirect()->route('todos.index')->with('message', 'Todo Item Created Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = TodoItem::findOrFail($id);
        return view('todos.todoEdit')->with('item', $item);
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
        $rules = array('content' => ['required', 'unique:todo_items,content', 'max:255']);
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('tasks.edit', $id)->withErrors($validator)->withInput();
        }

        $item = TodoItem::findOrFail($id);

        $item->update(request(['content']));
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
        $item = TodoItem::findOrFail($id);

        $item->delete();
        return redirect()->route('todos.index')->with('message', 'Todo item Succesfully Deleted');
    }
}
