@extends('layouts.app')

@section('content')
  <h3>Create Album</h3>
  <form action="/albums/store" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" class="form-control" placeholder="Album Name"> 
    </div>

    <div class="form-group">
      <label>Description</label>
      <textarea type="text" name="description" class="form-control" placeholder="Album Description"></textarea> 
    </div>
 
    <div class="form-group">
      <label>Album Cover</label>
      <input type="file" name="cover_image" class="form-control"> 
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
 @endsection  