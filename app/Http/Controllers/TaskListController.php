<?php

namespace App\Http\Controllers;
use App\Models\TaskList;

use Illuminate\Http\Request;

class TaskListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('task-list', [
            'tasks' => TaskList::orderBy('id', 'DESC')->paginate(5)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $taskInput = $request->get('task');

        $task = new TaskList();

        $task->task = $taskInput;

        $task->save();

        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = Tasklist::where('id', $id)->first();
        return view('includes.edit-task-modal', [
            'task' => $task,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $taskInput = $request->all();

        TaskList::find($id)->update($taskInput);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        Tasklist::where('id', $id)->delete();
        return redirect('/');

    }
}