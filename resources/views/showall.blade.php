<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($data as $new)
    <h1>{{ $new->email}}</h1>
    <h1>{{ $new->password}}</h1>

    
    <a href="{{route('edit' , ['id' => $new->id])}}" >  <button>edit<button>
      </a>


<form action="{{route('delete' , ['id' => $new->id])}}" method="post">
        @csrf
        <button type="submit">delete<button>2
     
</form>
    @endforeach

</body>
</html>