<h1>Category: Biographies & Memoirs</h1>
<a href="">Back to list of categories</a>

<h2>Subcategories</h2>
<ul>

</ul>

@foreach ($books as $i => $b)
    <h2>{{ $b->title }}</h2>
    <p>{{ $b->authors }}</p>
    <img src="{{ $b->image }}"/>
    <p>
        <a href="{{ action('BookController@show', $b->id) }}">Detail of book</a>
    </p>
@endforeach
