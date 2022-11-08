<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brief</title>
</head>
<body>
    
    <a href="/create"><button>Ajouter</button></a>
    <table>
        <thead>
            <tr>
                <th>id : </th>
                <th>Brief : </th>
            </tr>
        </thead>
        <tbody id="tbody"> 
            {{-- @foreach ($promotion as $value) --}}
                
            <tr>
                <th></th>
                <td></td>
                <td>
                    {{-- <a href="ddit/{{$value->id}}"><button>Modifier</button></a>
                    <a href="Delete/{{$value->id}}"><button>Supprimer</button></a> --}}
                </td>
            </tr>
            {{-- @endforeach
     --}}
        </tbody>
    </table>

</body>
</html>