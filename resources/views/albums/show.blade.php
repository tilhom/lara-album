  @extends('layouts.app')
  
  @section('content')
    <h1>{{$album->name}}</h1>
    <a class="btn btn-primary" href="/">Go Back</a>
    <a class="btn btn-success" href="/photos/create/{{$album->id}}">Upload Photo To Album</a>
    <hr>
    @if(count($album->photos) > 0)
      <div id="albums">
        <div class="row text-center">
          @foreach($album->photos as $photo)
           
               <div class='col-md-4'>
                 <a href="/photos/{{$photo->id}}">
                    <img class="img-thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
                  </a>
                 <br>
                 <h4>{{$photo->title}}</h4>
            </div>
            @if($loop->iteration % 3 == 0)
                </div><div class="row text-center">
              @endif
          @endforeach
        </div>
      </div>
    @else
      <p>No Photos To Display</p>
    @endif
  <hr>
  @endsection  