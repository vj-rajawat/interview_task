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

<form method="POST" action="{{route('genre.update',$genre->id)}}">
  @csrf
   <h1> Update Genre </h1>
   <div class="mb-3">
     <label for="exampleFormControlInput1" class="form-label">Name</label>
     <input type="text" name="name" value="{{$genre->name}}" class="form-control" id="exampleFormControlInput1" placeholder="Enter update name">
   </div>
   <button type="submit" class="btn btn-secondary">Submit</button>
 </form>
</body>
</html>