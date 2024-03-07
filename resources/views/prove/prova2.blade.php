<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prova 2</title>
</head>

<body>
<ul>
    @forelse ($lists as $list)
    <li  @if($loop->even) class='blue' @endif>{{$list}}</li>
    @empty
    <h2>la lista è vuota</h2>
    @endforelse
    </ul>
    <a href='{{route('home')}}'>Torna alla home</a>
    <a href='{{route('prova1')}}'>vai alla prova 1</a>
</body>

</html>