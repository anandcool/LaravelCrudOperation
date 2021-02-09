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
  <h2>Add Post</h2>
  <form method="POST" action="{{route('post.update')}}">
  @csrf
    <div class="form-group">
      <label for="email">Title:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="title" value={{$post->title}}>
    </div>
    <div class="form-group">
      <label for="pwd">Body:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="body" value={{$post->body}}>
    </div>
    <button type="submit" class="btn btn-default">Update</button>
  </form>
</div>

</body>
</html>
