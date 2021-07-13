@dump($listaMovies)

{{-- movie details exemple--}} 
    {{-- 
        "id" => 1
        "title" => "Il Padrino"
        "original_title" => "The Godfather"
        "nationality" => "american"
        "date" => "1972-03-24"
        "vote" => 9.2 
    --}}

<ul>
    @foreach($listaMovies as $movie)
        <li>{{ $movie->id }}</li>
        <li>{{ $movie->title }}</li>
        <li>{{ $movie->original_title }}</li>
        <li>{{ $movie->nationality }}</li>
        <li>{{ $movie->date }}</li>
        <li>{{ $movie->vote }}</li>
        <br>
    @endforeach
</ul>