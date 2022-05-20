<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tutorial laravel</h1>
    <a href="#">{{$nama}}</a>

    <p>Mata Pelajaran</p>
    <ul>
        @foreach($mapel as $m)
            <li>{{$m}}</li>
        @endforeach
    </ul>
</body>
</html>