<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    // Menampilkan semua data tugas
    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }



    // Menampilkan halaman tambah tugas
    public function create()
    {
        return view('tasks.create');
    }



    // Menyimpan data tugas baru
    public function store(Request $request)
    {

        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'deadline' => 'required',
            'status' => 'required'
        ]);


        Task::create([

            'judul' => $request->judul,

            'deskripsi' => $request->deskripsi,

            'deadline' => $request->deadline,

            'status' => $request->status

        ]);


        return redirect('/tasks')
            ->with('success','Tugas berhasil ditambahkan');

    }




    // Menampilkan halaman edit
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }





    // Update data tugas
    public function update(Request $request, Task $task)
    {


        $request->validate([

            'judul' => 'required',

            'deskripsi' => 'required',

            'deadline' => 'required',

            'status' => 'required'

        ]);



        $task->update([

            'judul' => $request->judul,

            'deskripsi' => $request->deskripsi,

            'deadline' => $request->deadline,

            'status' => $request->status

        ]);



        return redirect('/tasks')
            ->with('success','Tugas berhasil diperbarui');

    }





    // Menghapus data tugas
    public function destroy(Task $task)
    {

        $task->delete();


        return redirect('/tasks')
            ->with('success','Tugas berhasil dihapus');

    }

}