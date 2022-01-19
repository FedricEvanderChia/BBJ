@extends('template')
@section('content')
<h1 class="mb-3 pt-5">Top Books</h1>
    
        <div class="row d-flex justify-content-around align-items-center pb-5">
        @foreach ($books as $Book)
        <div class="col mb-5 me-3">
            <div class="card">
                <a href="/Detail/{{$Book->id}}" class="text-dark" style="text-decoration: none;">
                <img src="{{asset('storage/images/'.$Book->name.'.jpg')}}" class="card-img-top" alt="..." style="height:40vh; width: fit-content">
                <div class="card-body">
                  <h5 class="card-title">{{$Book->name}}</h5>
                  <p class="card-text">{{$Book->Author->name}}</p>
                </div>
                </a>
            </div>
        </div>
        @endforeach
        </div>
@endsection