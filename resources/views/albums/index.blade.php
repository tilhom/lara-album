@extends('layouts.app')

@section('content')
  <h1>Albums</h1>
  @if(count($albums) > 0)
    <div id="albums">
      <div class="row text-center ">
        @foreach($albums as $album)
         
             <div class='col-md-4'>
               <a href="/albums/{{$album->id}}">
                  <img class="img-thumbnail" src="storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}">
                </a>
               <br>
               <h4>{{$album->name}}</h4>
          </div>
          @if($loop->iteration % 3 == 0)
              </div><div class="row text-center">
            @endif
        @endforeach
      </div>
    </div>
  @else
    <p>No Albums To Display</p>
  @endif
<hr>
@endsection 