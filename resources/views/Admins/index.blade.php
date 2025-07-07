<!DOCTYPE html>
<html>
  <head></head>
  <body>
    @if(session('success'))
    <p>{{session('success')}}</p>
    @endif

    <h2>Admin Information</h2>
    @foreach($admins as $admin)
    <p> Name: {{$admin->name}} <br> Age: {{$admin->age}} <br> Email: {{$admin->email}} </p>
    @endforeach

    <a href="{{route ('admin.create')}}">
      <button>Add admin acc</button>
    </a>
  </body>
</html>