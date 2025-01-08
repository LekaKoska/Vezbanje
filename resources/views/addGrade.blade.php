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
<form action="/add-grade" method="POST">
    @if($errors->any())
        <p>{{$errors->first()}}</p>
    @endif
    {{csrf_field()}}
    <input type="text" name="predmet" placeholder="Upisi predmet">
    <input type="number" name="ocena" placeholder="Upisi ocenu">
    <input type="text" name="profesor" placeholder="Upisi ime profesora">
    <button>Dodaj</button>
</form>
@endsection
</body>
</html>
