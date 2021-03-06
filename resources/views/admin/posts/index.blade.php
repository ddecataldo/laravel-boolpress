@extends('layouts.admin')

@section('content')

<div class="container-fluid">
    <h1>Lista Articoli</h1>
    <a href="{{route('admin.posts.create')}}" class="btn btn-primary">Crea articolo</a>
    @if(session("msg"))
        <div class="alert alert-success" role="alert">
            {{session("msg")}}
        </div>
    @endif
    <ul class="list-group">
        @foreach ($posts as $singlePost)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <p class="mb-0">{{$singlePost->title}}</p>
                <p class="mb-0">{{$singlePost->category}}</p>
                <p class="mb-0">{{$singlePost->author}}</p>
                <p class="mb-0">{{$singlePost->user->name}}</p>
                <div class="d-flex" style="gap:5px;">
                    <a href="{{ route('admin.posts.edit', $singlePost->id) }}" class="btn btn-primary"> Modifica </a>
                    <form action="{{ route('admin.posts.destroy', $singlePost->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>

@endsection