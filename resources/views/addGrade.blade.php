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
        <p class="text-danger">{{$errors->first()}}</p>
    @endif
    {{csrf_field()}}
    <input type="text" name="predmet" placeholder="Upisi predmet" value="{{old("predmet")}}">
    <input type="number" name="ocena" placeholder="Upisi ocenu" value="{{old("ocena")}}">
    <input type="text" name="profesor" placeholder="Upisi ime profesora" value="{{old("profesor")}}">
    <button>Dodaj</button>
</form>
@endsection
</body>
</html>
