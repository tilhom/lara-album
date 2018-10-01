@extends('layouts.app')

@section('content')
  <h3>Create Photo</h3>
  <form action="/photos/store" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
      <label>Title</label>
      <input type="text" name="title" class="form-control" placeholder="Photo title Name"> 
    </div>

    <div class="form-group">
      <label>Description</label>
      <textarea type="text" name="description" class="form-control" placeholder="Photo Description"></textarea> 
    </div>
 
    <div class="form-group">
      <label>Photo</label>
      <input type="file" name="photo" class="form-control"> 
    </div>
  <input type="hidden" name="album_id" value="{{$album_id}}">
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
 @endsection    