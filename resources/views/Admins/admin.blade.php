<!DOCTYPE html>
<html>
  <body>

    <h2>Create an Admin account</h2>

    @if ($errors->any())
    @foreach($errors->all() as $error)
    <p>{{$error}}</p>
    @endforeach
    @endif

    <form action="{{ route('admin.store') }}" method="POST">
      @csrf
    <label>Name: <input type="text" name ="admin_name"></label><br><br>
    <label>Age:   <input type="number" name="admin_age"></label><br><br>
    <label>Email: <input type="text" name="admin_email"></label><br><br>
    
    <button type="submit">Create</button>
    </form>
  </body>
</html>