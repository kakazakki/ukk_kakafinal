@extends('layouts.app')
@section('content')

<h1>Unggah Album</h1>
<form action="{{route('albums.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('post')
    <div class="mb-3">
      <label for="name" class="form-label">Nama</label>
      <input type="text" name="name" class="form-control" id="name" placeholder="nama album">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Deskripsi</label>
      <input type="text" class="form-control" id="description" name="description">
    </div>
    <div class="mb-3">
        <label for="cover_image" class="form-label">Cover Album</label>
        <input type="file" class="form-control" id="cover_image" name="cover">
      </div>
    <button type="submit" class="btn btn-primary">Unggah</button>
  </form>
@endsection
