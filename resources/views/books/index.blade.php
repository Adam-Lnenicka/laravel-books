<h1>Index of books</h1>

@foreach ($books as $i => $b)
    <h2>{{ $b->title }}</h2>
    <p>{{ $b->authors }}</p>
    <img src="{{ $b->image }}"/>

{{--    <a href=""></a> --}}
@endforeach

