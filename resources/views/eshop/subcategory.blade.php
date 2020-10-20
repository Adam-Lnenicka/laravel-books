<h1>Subcategory: Historical</h1>
<a href="">Back to category Biographies & Memoirs</a>

@foreach ($books as $i => $b)
    <h2>{{ $b->title }}</h2>
    <p>{{ $b->authors }}</p>
    <img src="{{ $b->image }}"/>
    <p>
        <a href="{{ action('BookController@show', $b->id) }}">Detail of book</a>
    </p>
@endforeach
