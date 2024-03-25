<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylsheet" href="{{ asset('css/app.css')}}">
</head>
<body>
    <p><a href="{{ route ('contacts')}}">Contatti</a></p>
    <p><a href="{{ route ('aboutme') }}">Chi sono</a></p>
    <p><a href="{{ route ('welcome') }}">Welcome</a></p>
    <p><a href="{{ route ('articles') }}">Articoli</a></p>

    <h1>Articoli</h1>

    <div>
        @if($articles)
            <ul> 
                @foreach($articles as $key => $article)
                    <li><a href="{{ route('article',$key)}}">{{ $article ['title'] }}</a></li>
                @endforeach
            </ul>
        @else
            <p>Non ci sono articoli disponibili</p>
        @endif

    </div>

</body>
</html>