<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h1> Genre </h1>
    <a type="button" href="{{route('genre.create')}}" class="btn btn-info">Add Genre</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($genre as $item)
            <tr>
                <th scope="row">1</th>
                <td>{{$item->name}}</td>
                <td><a type="button" href="{{ route('genre.edit',$item->id) }}" class="btn btn-primary">Edit</a></td>
                <td><a type="button" href="{{ route('genre.delete',$item->id) }}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>