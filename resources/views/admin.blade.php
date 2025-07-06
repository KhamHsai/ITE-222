<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <h2>Admin Information</h2>
    @foreach($admins as $admin)
    <p> Name: {{$admin->name}} <br> Age: {{$admin->age}} <br> Email: {{$admin->email}} </p>
    @endforeach
  </body>
</html>