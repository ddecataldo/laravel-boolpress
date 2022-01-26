@extends('layouts.admin')

@section('content')
<div class="container-fluid">
<form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="mb-5">

  @csrf
  @method('put')

  <div class="form-group">
    <label class="form-label">Nome</label>
    <input id="name" type="text"
      class="form-control @error('name') is-invalid @enderror" name="name"
      value="{{ $user->name }}" required autocomplete="name">

    @error('name')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>

  <div class="form-group">
    <label class="form-label">Email</label>
    <input id="email" type="email"
      class="form-control @error('email') is-invalid @enderror" name="email"
      value="{{ $user->email }}" required autocomplete="email">

    @error('email')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>

  <div class="form-group">
    <label class="form-label">Telefono</label>
    <input id="phone" type="text"
      class="form-control @error('phone') is-invalid @enderror" name="phone"
      value="{{ $user->phone }}" required autocomplete="phone">

    @error('phone')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>

  <div class="form-group">
    <label class="form-label">Indirizzo</label>
    <input id="address" type="text"
      class="form-control @error('address') is-invalid @enderror" name="address"
      value="{{ $user->address }}" required autocomplete="address">

    @error('address')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>

  <div class="form-group">
    <label class="form-label">Cover</label>
    <input id="address" type="text"
      class="form-control @error('cover') is-invalid @enderror" name="cover"
      value="{{ $user->cover }}" required autocomplete="cover">

    @error('cover')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>

  <div class="form-group">
    <label class="form-label">Ruolo</label>

    @if(Auth::user()->role === "admin")
    <select class="form-control @error('role') is-invalid @enderror" id="role"
      name="role" required>
      <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>
        Utente standard</option>
      <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>
        Amministratore</option>
    </select>
    @else
    <p class="form-control-static">{{ $user->role }}</p>
    @endif


    @error('role')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>

  <div class="d-flex">

    <a href="{{route('admin.users.index')}}" class="btn btn-outline-primary" type="reset">Annulla</a>
    <button class="btn btn-primary" type="submit">Salva</button>
  </div>

</form>
@endsection
</div>