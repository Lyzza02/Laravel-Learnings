<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$heading;}}</h1>
    {{--empty listing 
        yun unless parang if statement din cya --}}
    @unless(count($listings) == 0)
        @foreach ($listings as $list)
            <h2> <a href="/listings/{{ $list['id'] }}"> {{ $list['title'] }} </a></h2>
            <p>  {{ $list['description'] }}</p>
        @endforeach
    @else
        <p>No listings found</p>
    @endunless
</body>
</html>