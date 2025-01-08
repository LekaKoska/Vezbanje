<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
@extends("layout")
@section("sadrzajStranice")
    @foreach($ocene as $ucenikovaOcena)
        <p>Predmet:{{$ucenikovaOcena->predmet}}</p>
        <p>Ocena:{{$ucenikovaOcena->ocena}}</p>
    @endforeach
    <a href="/dodaj-ocenu">Dodaj ocenu</a>
@endsection
</body>
</html>
