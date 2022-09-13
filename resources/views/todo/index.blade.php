<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>user</title>
</head>
<body>


<a class="btn btn-success btn-sm" href="{{route('todo.create')}}">create</a>
<table class="table table-dark table-striped">
    <thead>
    <tr>
        <th width="10%" scope="col">#</th>
        <th width="10%" scope="col">name</th>
        <th width="10%" scope="col">email</th>
        <th width="10%" scope="col">course</th>
        <th width="1%" scope="col">actions</th>
        <th width="1%" scope="col"></th>
        <th width="1%" scope="col"></th>




    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
    <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->course}}</td>

            <td> <a  class="btn btn-success btn-sm" href="{{route('todo.show',$user->id)}}">show</a></td>
            <td> <a  class="btn btn-primary btn-sm" href="{{route('todo.edit',$user->id)}}">edit</a></td>
            <td> <a  class="btn btn-danger btn-sm" href="{{route('todo.delete',$user->id)}}">delete</a></td>

    </tr>
    @endforeach
    </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>
