@extends('layouts.admin')

@section('content')

<div class="container-fluid">
    <h1>Lista Utenti</h1>
    {{-- <a href="{{route('admin.posts.create')}}" class="btn btn-primary">Crea articolo</a> --}}
    @if(session("msg"))
        <div class="alert alert-success" role="alert">
            {{session("msg")}}
        </div>
    @endif
    <ul class="list-group">
        @if(count($users) === 0)
            <li class="list-group-item">
                Ancora nessun dato disponibile
            </li>    
        @else
        @foreach ($users as $singleUser)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <p class="mb-0">{{$singleUser->name}}</p>
                <p class="mb-0">{{$singleUser->email}}</p>
                <p class="mb-0">{{$singleUser->role}}</p>
                <div class="d-flex" style="gap:5px;">
                    <a href="{{ route('admin.users.edit', $singleUser->id) }}" class="btn btn-primary"> Modifica </a>
                </div>
            </li>
        @endforeach
        @endif
    </ul>
</div>

@endsection