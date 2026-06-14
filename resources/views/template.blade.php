<!DOCTYPE html>
<html>
<head>
     <title>5026241099 Naufal Agni Muhammad</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-3">

        <div class="mt-4 p-5 bg-primary text-white rounded">
            @yield('judul')
            <h1>5026241099 Naufal Agni Muhammad</h1>
            <p>Data Pegawai</p>
        </div>
        <br>
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/pegawai">Pegawai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/beras">Beras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/d4">D4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/e5">E5</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/eas">EAS</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-3">
        @yield('konten')
    </div>

</body>

</html>
