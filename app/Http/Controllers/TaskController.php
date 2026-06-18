<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

   public function index()
{
    $tasks = Task::all();

     return 'Laravel berhasil berjalan';
    }


    public function create()
    {
        return view('tasks.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'judul'=>'required',
            'deskripsi'=>'required',
            'deadline'=>'required',
            'status'=>'required'
        ]);


        Task::create([
            'judul'=>$request->judul,
            'deskripsi'=>$request->deskripsi,
            'deadline'=>$request->deadline,
            'status'=>$request->status
        ]);


        return redirect('/tasks')
        ->with('success','Tugas berhasil ditambahkan');

    }



    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }



    public function update(Request $request, Task $task)
    {


        $request->validate([
            'judul'=>'required',
            'deskripsi'=>'required',
            'deadline'=>'required',
            'status'=>'required'
        ]);



        $task->update([

            'judul'=>$request->judul,
            'deskripsi'=>$request->deskripsi,
            'deadline'=>$request->deadline,
            'status'=>$request->status

        ]);


        return redirect('/tasks')
        ->with('success','Tugas berhasil diperbarui');

    }



    public function destroy(Task $task)
    {

        $task->delete();


        return redirect('/tasks')
        ->with('success','Tugas berhasil dihapus');

    }

}