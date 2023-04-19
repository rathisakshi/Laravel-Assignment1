<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Task;
class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return view('form', ['tasks' => $tasks]);
    }
    public function store(Request $request)
    {
        $task = new Task;
        $task->Title = $request->input('Title');
        $task->Description = $request->input('Description');
        $task->save();

        return redirect('form')->with('success', 'Task created successfully!');
    }

}

