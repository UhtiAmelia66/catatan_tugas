<!DOCTYPE html>
<html>

<head>
    <title>Tambah Tugas</title>

    <style>

        *{
            box-sizing:border-box;
            font-family:'Poppins',sans-serif;
        }

        body{
            background:linear-gradient(135deg,#ffd6e7,#f8c8dc,#e8c3ff);
            min-height:100vh;
            padding:40px;
        }

        .container{
            max-width:600px;
            margin:auto;
        }

            .card{
        background:white;
        padding:35px;
        border-radius:25px;
        box-shadow:0 10px 25px rgba(255,182,193,.4);
        animation: muncul .5s ease;
    }


    @keyframes muncul{

        from{
            opacity:0;
            transform:translateY(20px);
        }

        to{
            opacity:1;
            transform:translateY(0);
        }

    }

            h1{
        text-align:center;
        color:#ff69b4;
        margin-bottom:25px;
    }

        label{
            font-weight:600;
            color:#555;
            display:block;
            margin-top:10px;
        }

        input,
        textarea,
        select{
            width:100%;
            padding:12px;
            margin-top:8px;
            border:2px solid #ffd6e7;
            border-radius:12px;
            outline:none;
        }

        input:focus,
        textarea:focus,
        select:focus{
            border-color:#ff9ecb;
        }

        textarea{
            height:120px;
        }

                .btn{
            width:100%;
            padding:14px;
            margin-top:20px;
            border:none;
            border-radius:12px;
            background:#ff85b3;
            color:white;
            font-size:16px;
            cursor:pointer;
        }

        .btn:hover{
            background:#ff69b4;
        }

        .back{
            display:block;
            text-align:center;
            margin-top:15px;
            text-decoration:none;
            color:#ff69b4;
            font-weight:bold;
        }

    </style>
</head>

<body>

<div class="container">

    <div class="card">

        <h1> Tambah Tugas</h1>

        <form action="/tasks" method="POST">

            @csrf

            <label>Judul Tugas</label>
            <input
                type="text"
                name="judul"
                placeholder="Masukkan judul tugas">

            <label>Deskripsi</label>
            <textarea
                name="deskripsi"
                placeholder="Masukkan deskripsi tugas"></textarea>

            <label>Deadline</label>
            <input
                type="date"
                name="deadline">

            <label>Status</label>

            <select name="status">
                <option value="Belum">Belum</option>
                <option value="Selesai">Selesai</option>
            </select>

            <button class="btn">
                 Simpan Tugas
            </button>

        </form>

        <a href="/tasks" class="back">
            ← Kembali ke Daftar Tugas
        </a>

    </div>

</div>

</body>
</html>