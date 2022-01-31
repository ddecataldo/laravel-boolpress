@extends('layouts.admin')

@section('content')
<h1>Dettaglio Articolo</h1>
<h2>Articolo: {!! $post->title !!}</h2>
<p>Tags: 
    @foreach($post->tags as $tag)
        <span class="badge bg-primary text-white">{{$tag->name}}</span>
    @endforeach
</p>
@endsection