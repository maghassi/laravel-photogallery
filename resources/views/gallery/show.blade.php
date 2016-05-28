@extends('layout.main')

@section('content')
             <div class="callout primary">
            <div class="row column">
                <a href="/">Back to galleries</a>
              <h1>{{$gallery->name}}</h1>
              <p class="lead">{{$gallery->description}}</p>
              <a class = "button button-upload" href="/photo/create/{{$gallery->id}}">Upload New Photo</a>
            </div>
            
          </div>
          <div class="row small-up-2 medium-up-3 large-up-4">
              @foreach ($photos as $photo)
              <div class = "column">
             <a href="/photo/details/{{$photo->id}}">
               <img class="thumbnail" src="/images/{{$photo->image}}">
             </a>
             </div>
             @endforeach
          </div>
@stop