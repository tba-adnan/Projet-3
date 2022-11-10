<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brief</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id : </th>
                <th>Brief : </th>
            </tr>
        </thead>
        <tbody id="tbody"> 
            @foreach ($briefs as $value)
            <tr>
                <th>{{$value->id}}</th>
                <td>{{$value->brief}}</td>
                <td>
                    {{-- <a href="ddit/{{$value->id}}"><button>Modifier</button></a>
                    <a href="Delete/{{$value->id}}"><button>Supprimer</button></a> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
        <a href="/add"><button>Ajouter</button></a>
    </table>

</body>
</html>