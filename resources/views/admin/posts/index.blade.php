@extends('layouts.admin')

@section('content')

<div class="container-fluid">
    <h1>Lista Articoli</h1>
    <ul class="list-group">
        @foreach ($posts as $singlePost)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <p>{{$singlePost->title}}</p>
                <p>{{$singlePost->category}}</p>
                <p>{{$singlePost->author}}</p>
            </li>
        @endforeach
    </ul>
</div>

@endsection