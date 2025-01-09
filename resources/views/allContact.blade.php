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

            <th scope="col">Ime</th>
            <th scope="col">Sifra</th>

        </tr>
        </thead>
        <tbody>
        <tr>
        @foreach($allContacts as $singleContact)
            <tr>
                <td>{{$singleContact->ime}}</td>
                <td>{{$singleContact->sifra}}</td>

                <td>
                    <a href="/admin/delete-contact/{{$singleContact->id}}" class="btn btn-danger">Obrisi</a>
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
