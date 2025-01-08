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

    <table class="table">
        <thead>
        <tr>

            <th scope="col">Predmet</th>
            <th scope="col">Ocena</th>
            <th scope="col">Profesor</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($ocene as $ocena)
                <tr>
                    <td>{{$ocena->predmet}}</td>
                    <td>{{$ocena->ocena}}</td>
                    <td>{{$ocena->profesor}}</td>
                    <td>
                        <a href="/admin/delete-product/{{$ocena->id}}" class="btn btn-danger">Obrisi</a>
                        <a class="btn btn-primary">Izmeni</a>
                    </td>
                </tr>


            @endforeach

        </tr>
        </tbody>
    </table>
@endsection
</body>
</html>
