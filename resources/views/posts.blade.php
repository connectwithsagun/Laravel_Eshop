@extends('layout')

@section('content')

<h1>Posts</h1>
@foreach($posts as $post)
<article>


     <h2><a href="/posts/{{$post->id}}"> {{$post['post_name'] }} </a></h2>
     <p>{{ $post['post_desc'] }}  </p>
</article>
@endforeach

@endsection
