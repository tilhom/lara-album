@extends('layouts.app')

@section('content')
  <h3>{{$photo->title}}</h3>
  <p>{{$photo->description}}</p>
  <a href="/albums/{{$photo->album_id}}" class="btn btn-primary">
    Back To Gallery
  </a>
  <hr>
  <a href="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" target="_blank" rel="nofollow noopener">
  <img src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" class="img-fluid" alt="{{$photo->title}}">
  </a>
  <hr>
  <small>Size: {{$photo->size}}</small>
  <br><br>
  <form action="/photos/{{$photo->id}}" method="POST" onsubmit="return confirm('Are you shure?')">
    <input type="hidden" name="_method" value="DELETE">
    {{@csrf_field()}}
    <button type="submit" class="btn btn-danger">Delete Photo</button>
  </form>
@endsection
           