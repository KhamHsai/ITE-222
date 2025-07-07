<!DOCTYPE html>
<html>
  <body>
      @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
      @endif

    @foreach ($blogs as $blog)
    <h2>Title: {{ $blog->title }}</h2>
    <p>{{ $blog->content }}</p>
    @endforeach

    <button><a href="{{ route('blogs.create') }}">Add new post</a></button>
  </body>
</html>