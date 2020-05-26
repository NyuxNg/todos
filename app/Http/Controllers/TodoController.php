<?php

namespace App\Http\Controllers;

use App\Todo;
use App\Step;
use App\Http\Requests\TodoCreateRequest;

class TodoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $todos = auth()->user()->todos->sortBy('completed');
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function edit(Todo $todo)
    {
        // dd($todo->title);
        return view('todos.edit', compact('todo'));
    }

    public function store(TodoCreateRequest $request)
    {

        $todo = auth()->user()->todos()->create(request()->all());
        if($request->step){
            foreach ($request->step as $step) {
                $todo->steps()->create(['name'=> $step]);
            }
        }
        return redirect()->back()->with('message', 'Todo created successfully.');
    }

    public function update(TodoCreateRequest $request, Todo $todo)
    {
        $todo->update(['title' => $request->title]);
        $todo->update(['description' => $request->description]);
        // dump($request->all());
        if($request->stepName){
            foreach ($request->stepName as $key => $value) {
                $id = $request->stepId[$key];
                if(!$id){
                    $todo->steps()->create(['name'=> $value]);
                } else {
                    $step = Step::find($id);
                    $step->update(['name'=> $value]);
                }

            }
        }
        // die();
        return redirect(route('todos.index'))->with('message', 'Todo title is updated.');
    }

    public function complete(Todo $todo)
    {
        $todo->update(['completed' => true]);

        return redirect()->back()->with('message', 'Task mark completed.');
    }

    public function uncomplete(Todo $todo)
    {
        $todo->update(['completed' => false]);

        return redirect()->back()->with('message', 'Task mark uncompleted.');
    }

    public function destroy(Todo $todo)
    {
        $todo->steps->each->delete();
        $todo->delete();
        return redirect()->back()->with('message', 'Task deleted.');
    }

    public function show(Todo $todo)
    {
        return view('todos.show', compact('todo'));
    }

}

