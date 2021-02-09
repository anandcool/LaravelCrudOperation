<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Show All Post</h2>  
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Body</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($posts as $post)
      <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->body}}</td>
        <td><a href="/showpost/{{$post->id}}" class="btn btn-danger">Details</a></td>
        <td><a href="/deletepost/{{$post->id}}" class="btn btn-danger">Delete</a></td>
        <td><a href="/editpost/{{$post->id}}" class="btn btn-danger">Edit</a></td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
