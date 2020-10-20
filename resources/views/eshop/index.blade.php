<h1>Books eshop</h1>

<h2>Categories</h2>
<ul>
    <li><a href=""></a></li>
</ul>

@foreach ($books as $i => $b)
    <h2>{{ $b->title }}</h2>
    <p>{{ $b->authors }}</p>
    <img src="{{ $b->image }}"/>
    <p>
        <a href="{{ action('BookController@show', $b->id) }}">Detail of book</a>
    </p>
@endforeach
