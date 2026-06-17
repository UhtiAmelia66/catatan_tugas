<!DOCTYPE html>
<html>

<head>
    <title>Edit Tugas</title>

    <style>

        *{
            box-sizing:border-box;
            font-family:'Segoe UI',sans-serif;
        }

        body{
            background:linear-gradient(135deg,#ffd6e7,#f8c8dc,#e8c3ff);
            min-height:100vh;
            padding:40px;
        }

        .container{
            max-width:650px;
            margin:auto;
        }

        .card{
            background:white;
            padding:35px;
            border-radius:25px;
            box-shadow:0 10px 25px rgba(255,182,193,.4);
        }

        h1{
        text-align:center;
        color:#ff69b4;
        font-size:32px;
        font-weight:800;
        margin-bottom:25px;
}

        label{
            display:block;
            margin-top:15px;
            font-weight:bold;
            color:#555;
        }

        input,
        textarea,
        select{
            width:100%;
            padding:12px;
            margin-top:8px;
            border:2px solid #ffd6e7;
            border-radius:12px;
            font-size:15px;
            outline:none;
        }

        input:focus,
        textarea:focus,
        select:focus{
            border-color:#ff85b3;
        }

        textarea{
            height:120px;
        }

        .btn{
        width:100%;
        margin-top:25px;
        padding:14px;
        border:none;
        border-radius:15px;
        background:linear-gradient(135deg,#ff9ecf,#ff69b4);
        color:white;
        font-size:16px;
        font-weight:bold;
        cursor:pointer;
        transition:.3s;
        box-shadow:0 5px 15px rgba(255,105,180,.3);
}


.btn:hover{
    transform:translateY(-3px);
    background:linear-gradient(135deg,#ff69b4,#ff4f9a);
}

        .btn:hover{
            background:#ff4f9a;
        }

            .back{
        display:block;
        text-align:center;
        margin-top:20px;
        text-decoration:none;
        color:#ff69b4;
        font-weight:bold;
    }

.back:hover{
    color:#ff4f9a;
}

    </style>

</head>

<body>

<div class="container">

    <div class="card">

        <h1>Edit Tugas</h1>

        <form action="/tasks/{{ $task->id }}" method="POST">

            @csrf
            @method('PUT')

            <label>Judul</label>

            <input
                type="text"
                name="judul"
                value="{{ $task->judul }}">

            <label>Deskripsi</label>

            <textarea name="deskripsi">{{ $task->deskripsi }}</textarea>

            <label>Deadline</label>

            <input
                type="date"
                name="deadline"
                value="{{ $task->deadline }}">

            <label>Status</label>

            <select name="status">

                <option value="Belum"
                @if($task->status == 'Belum') selected @endif>
                    Belum
                </option>

                <option value="Selesai"
                @if($task->status == 'Selesai') selected @endif>
                    Selesai
                </option>

            </select>

            <button class="btn">
                Update Tugas
            </button>

        </form>

        <a href="/tasks" class="back">
            ← Kembali ke Daftar Tugas
        </a>

    </div>

</div>

</body>

</html>