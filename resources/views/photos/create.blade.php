@extends('layouts.app')

@section('content')

<h1>Unggah Foto</h1>
<form action="{{route('photos.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('post')
    <div class="mb-3">
      <label for="title" class="form-label">Judul</label>
      <input type="text" name="title" class="form-control" id="title" placeholder="judul">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Deskripsi</label>
      <input type="text" class="form-control" id="description" name="description">
    </div>
    <div class="mb-3">
        <label for="photo" class="form-label">Foto</label>
        <input type="file" class="form-control" id="photo" name="photo">
      </div>
      <input type="hidden" name="album_id" value="{{$album_id}}">
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
