@extends('layouts.admin')

@section('content')
<div class="container-fluid">
<h1>Crea articolo</h1>
<form action="{{route("admin.posts.store")}}" method="post">
    @csrf
    <div class="form-group">
        <label for="inputTitle">Title</label>
        <input type="text" class="form-control" id="inputTitle" placeholder="Titolo articolo">
    </div>
    <div class="form-group">
        <label for="inputDescription">Descrizione</label>
        <textarea class="form-control" id="inputDescription" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="inputThumb">Thumb</label>
        <input type="text" class="form-control" id="inputThumb" placeholder="Url image">
    </div>
    <div class="form-group">
        <label for="inputAuthor">Author</label>
        <input type="text" class="form-control" id="inputAuthor" placeholder="Autore articolo">
    </div>
    <div class="form-group">
        <label for="inputCategory">Cateogoria</label>
        <input type="text" class="form-control" id="inputCategory" placeholder="Nome categoria">
    </div>
    <div class="form-group">
        <label for="inputPublished">Pubblicato</label>
        <input type="text" class="form-control" id="inputPublished" placeholder="Pubblicato">
    </div>

    <button type="submit" class="btn btn-primary">Pubblica</button>

</form>
</div>
@endsection