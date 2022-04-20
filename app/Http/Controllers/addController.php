<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class addController extends Controller
{
    function view(){

        $data=Task::all();
        return view('index',['tasks'=>$data]);
    }

    function addTask(Request $r){
        $task=new Task;
        $task->tasks=$r->task;
        $task->save();

        return redirect('/');
    }

    function edit($id){
        $data=Task::find($id);
        return view('edittask',['task'=>$data]);
    }

    function editdata(Request $r){
        $data=Task::find($r->id);
        $data->tasks=$r->task;
        $data->save();

        return redirect('/');
    }

    function del($id){
        $data=Task::find($id);
        $data->delete();

        return redirect('/');
    }
}
