@extends('layouts.admin')

@section('content')
<div class="container-fluid">
<h1>Modifica Articolo</h1>
<form action="{{route("admin.posts.update",  $posts->id)}}" method="post">
    @csrf
    @method("PUT")
    <div class="form-group">
        <label for="inputTitle">Title</label>
        <input type="text" value="{{old('title') ?? $posts->title}}" class="form-control" name="title" id="inputTitle" placeholder="Titolo articolo">
    </div>
    <div class="form-group">
        <label for="inputDescription">Descrizione</label>
        <textarea value="{{old('content') ?? $posts->content}}" class="form-control" id="inputDescription" name="content" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="inputThumb">Thumb</label>
        <input type="text" value="{{old('imageUrl') ?? $posts->imageUrl}}" class="form-control" id="inputThumb" name="imageUrl" placeholder="Url image">
    </div>
    <div class="form-group">
        <label for="inputAuthor">Author</label>
        <input type="text" value="{{old('author') ?? $posts->author}}" class="form-control" id="inputAuthor" name="author" placeholder="Autore articolo">
    </div>
    <div class="form-group">
        <label for="inputCategory">Cateogoria</label>
        <input type="text" value="{{old('category') ?? $posts->category}}" class="form-control" id="inputCategory" name="category" placeholder="Nome categoria">
    </div>
    <div class="form-group">
        <label for="inputPublished">Pubblicato</label>
        <input type="text" value="{{old('published') ?? $posts->published}}" class="form-control" id="inputPublished" name="published" placeholder="Pubblicato">
    </div>

    <a href="{{ route('admin.posts.index') }}" class="btn btn-outline-primary">Indietro</a>
    <button type="submit" class="btn btn-primary">Modifica</button>

</form>
</div>
@endsection