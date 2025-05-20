<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tugas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('/background.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 500px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1>Daftar Tugas</h1>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <div class="d-flex flex-wrap justify-content-center gap-2">
                    <a href="{{ url('/bahan') }}" class="btn btn-outline-secondary m-2" target="_blank">Bahan</a>
                    <a href="{{ url('/bootstrap1') }}" class="btn btn-outline-secondary m-2" target="_blank">Bootstrap 1</a>
                    <a href="{{ url('/coba') }}" class="btn btn-outline-secondary m-2" target="_blank">Coba</a>
                    <a href="{{ url('/coba4') }}" class="btn btn-outline-secondary m-2" target="_blank">Coba 4</a>
                    <a href="{{ url('/cobalagi') }}" class="btn btn-outline-secondary m-2" target="_blank">Coba Lagi</a>
                    <a href="{{ url('/index') }}" class="btn btn-outline-secondary m-2" target="_blank">Index</a>
                    <a href="{{ url('/js1') }}" class="btn btn-outline-secondary m-2" target="_blank">JS 1</a>
                    <a href="{{ url('/js2') }}" class="btn btn-outline-secondary m-2" target="_blank">JS 2</a>
                    <a href="{{ url('/linktree') }}" class="btn btn-outline-secondary m-2" target="_blank">Linktree</a>
                    <a href="{{ url('/pertama') }}" class="btn btn-outline-secondary m-2" target="_blank">Pertama</a>
                    <a href="{{ url('/soal4') }}" class="btn btn-outline-secondary m-2" target="_blank">Soal 4</a>
                    <a href="{{ url('/template') }}" class="btn btn-outline-secondary m-2" target="_blank">Template</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
