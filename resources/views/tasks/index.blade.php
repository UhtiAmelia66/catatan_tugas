<!DOCTYPE html>
<html>

<head>

<title>Catatan Tugas</title>


<style>

body{

background:linear-gradient(135deg,#ffd6e7,#f8c8dc,#e8c3ff);

font-family:Arial;

padding:40px;

}


.container{

width:800px;

margin:auto;

}


h1{

text-align:center;

color:white;

}



.tambah{

background:#00c853;

color:white;

padding:12px 20px;

border-radius:10px;

text-decoration:none;

}



.card{

background:white;

margin-top:20px;

padding:25px;

border-radius:20px;

box-shadow:0 10px 20px rgba(0,0,0,.2);

}



.edit{

background:#2196f3;

color:white;

padding:8px;

border-radius:8px;

text-decoration:none;

}



button{

background:#f44336;

color:white;

border:none;

padding:8px;

border-radius:8px;

}



</style>


</head>


<body>


<div class="container">


<h1>
📚 Catatan Tugas Mahasiswa
</h1>



<a class="tambah" href="/tasks/create">

+ Tambah Tugas

</a>



@foreach($tasks as $task)



<div class="card">


<h2>

{{ $task->judul }}

</h2>


<p>

{{ $task->deskripsi }}

</p>



<p>

Deadline:

{{ $task->deadline }}

</p>



<p>

Status:

{{ $task->status }}

</p>



<a class="edit" href="/tasks/{{ $task->id }}/edit">

Edit

</a>




<form action="/tasks/{{ $task->id }}" method="POST" style="display:inline">


@csrf

@method('DELETE')


<button>

Hapus

</button>


</form>



</div>



@endforeach



</div>


</body>


</html>