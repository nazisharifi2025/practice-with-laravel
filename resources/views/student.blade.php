<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items:center;
        }
        table{
            border:1px solid black;
        }
        th{
            border:1px solid black;
        }
        td{
            border:1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>LastName</th>
            <th>Gender</th>
            <th>Created_at</th>
            <th>Updated_at</th>
        </tr>
       @foreach($data as $d)
       <tr>
        <td>{{$d["name"]}}</td>
        <td>{{$d["lastName"]}}</td>
        <td>{{$d["gender"]}}</td>
        <td>{{$d["created_at"]}}</td>
        <td>{{$d["updated_at"]}}</td>
       </tr>
       @endforeach
    </table>
</body>
</html>