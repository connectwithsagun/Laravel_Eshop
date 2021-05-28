@extends('layout')

@section('content')

<article>
    <h2> {{ $post->post_name }}</h2>
    <p> {{ $post->post_desc }} </p>
</article>
<a href="/posts"> Go to previous page</a>

@endsection