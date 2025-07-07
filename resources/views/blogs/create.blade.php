<!DOCTYPE html>
<html>
  <body>
    <h1>Create New Blog</h1>
    @if ($errors->any())
    <div style="color: red">
      @foreach($errors->all() as $error)
      <p>{{$error}}</p>
      @endforeach
    </div>
  @endif

  <form action="{{ route('blogs.store')}}" method="POST">
      @csrf
      <label>Title:</label> <br>
      <input type="text" name="title"><br><br>

      <label>Content:</label><br>
      <textarea name="content" rows="5"></textarea><br>

      <button type="submit">Post</button>
  </form>
  </body>
</html>