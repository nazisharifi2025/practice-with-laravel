<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>LastName</th>
        </tr>
        @foreach($allst as $st)
        <tr>
            <td>{{$st["id"]}}</td>
            <td>{{$st[name]}}</td>
            <td>{{$st["lastName"]}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
