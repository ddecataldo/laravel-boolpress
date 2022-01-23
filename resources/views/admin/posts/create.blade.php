@extends('layouts.admin')

@section('content')
<div class="container-fluid">
<h1>Crea articolo</h1>
<form action="{{route("admin.posts.store")}}" method="post">
    @csrf
    <div class="form-group">
        <label for="inputTitle">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="inputTitle" placeholder="Titolo articolo">
        @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="inputDescription">Descrizione</label>
        <textarea class="form-control @error('content') is-invalid @enderror" id="inputDescription" name="content" rows="3"></textarea>
        @error('content')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="inputThumb">Immagine</label>
        <input type="text" class="form-control @error('imageUrl') is-invalid @enderror" id="inputThumb" name="imageUrl" placeholder="Url image">
        @error('imageUrl')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="inputAuthor">Autore</label>
        <input type="text" class="form-control @error('author') is-invalid @enderror" id="inputAuthor" name="author" placeholder="Autore articolo">
        @error('author')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="inputCategory">Cateogoria</label>
        <input type="text" class="form-control @error('author') is-invalid @enderror" id="inputCategory" name="category" placeholder="Nome categoria">
        @error('category')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="inputPublished">Pubblicato</label>
        <input type="text" class="form-control @error('published') is-invalid @enderror" id="inputPublished" name="published" placeholder="Pubblicato">
        @error('published')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Pubblica</button>

</form>

<script type="text/javascript" src="//js.nicedit.com/nicEdit-latest.js"></script> 
<script type="text/javascript">
      bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>

</div>
@endsection